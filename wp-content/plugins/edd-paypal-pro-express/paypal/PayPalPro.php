<?php
class PayPalProGateway {

  protected $_purchase_data;
  protected $_api_version = 124;

  public function purchase_data($data) {
    $this->_purchase_data = $data;
  }

  public function process_sale() {
    $ppfunctions = new PayPalFunctions();
    $ppfunctions->api_end_point($this->_purchase_data['api_end_point']);
    $cart_details = $this->_purchase_data['cart_details'];
    $items        = array();

    foreach( $cart_details as $c ) {

      $item_data   = array(
        'name'     => html_entity_decode( $c['name'], ENT_COMPAT, 'UTF-8' ),
        'amount'   => $c['subtotal'],
        'number'   => $c['item_number'],
        'quantity' => $c['quantity'],
        'tax'      => $c['tax']
      );

      $items[]     = $c['subtotal'];

      $ppfunctions->new_item( $item_data );

    }

    if( ! empty( $this->_purchase_data['fees'] ) ) {
      foreach( $this->_purchase_data['fees'] as $fee ) {

        $item_data   = array(
          'name'     => html_entity_decode( $fee['label'], ENT_COMPAT, 'UTF-8' ),
          'amount'   => $fee['amount'],
          'quantity' => 1
        );

        $items[]     = $fee['amount'];

        $ppfunctions->new_item( $item_data );

      }
    }

    $total_amount = $this->_purchase_data['price'];
    $item_total   = array_sum( $items );
    $tax          = $this->_purchase_data['tax'];
    $discount     = $this->_purchase_data['discount_amount'];

    if( ( $item_total + $tax ) > $total_amount) {

      $item_data = array(
        'name' => __('Discount', 'eppe'),
        'amount' => 0 - $discount,
        'number' => $this->_purchase_data['discount'],
        'quantity' => 1
      );
      $items[] = 0 - $discount;

      $ppfunctions->new_item($item_data);

      $item_total = array_sum( $items );

    }

    $data = array(
      'USER'            => $this->_purchase_data['credentials']['api_username'],
      'PWD'             => $this->_purchase_data['credentials']['api_password'],
      'SIGNATURE'       => $this->_purchase_data['credentials']['api_signature'],
      'VERSION'         => $this->_api_version,
      'METHOD'          => 'DoDirectPayment',
      'PAYMENTACTION'   => 'Sale',
      'IPADDRESS'       => edd_get_ip(),
      'CREDITCARDTYPE'  => $this->_purchase_data['card_data']['card_type'],
      'ACCT'            => $this->_purchase_data['card_data']['number'],
      'EXPDATE'         => $this->_purchase_data['card_data']['exp_month'] . $this->_purchase_data['card_data']['exp_year'], // needs to be in the format 062019
      'CVV2'            => $this->_purchase_data['card_data']['cvc'],
      'EMAIL'           => $this->_purchase_data['card_data']['email'],
      'FIRSTNAME'       => $this->_purchase_data['card_data']['first_name'],
      'LASTNAME'        => $this->_purchase_data['card_data']['last_name'],
      'STREET'          => $this->_purchase_data['card_data']['billing_address'],
      'CITY'            => $this->_purchase_data['card_data']['billing_city'],
      'STATE'           => $this->_purchase_data['card_data']['billing_state'],
      'COUNTRYCODE'     => $this->_purchase_data['card_data']['billing_country'],
      'ZIP'             => $this->_purchase_data['card_data']['billing_zip'],
      'AMT'             => number_format($total_amount, 2, '.', ''),
      'ITEMAMT'         => number_format($item_total, 2, '.', ''),
      'SHIPPINGAMT'     => 0,
      'TAXAMT'          => number_format($tax, 2, '.', ''),
      'CURRENCYCODE'    => $this->_purchase_data['currency_code'],
      'BUTTONSOURCE'    => 'ArmorlightComputers_SP',
      'CUSTOM'          => $this->_purchase_data['payment_id']
    );

    $ppfunctions->request_fields( $data );

    $response = $ppfunctions->paypal_query();
    return $response;
  }

  public function refund_transaction( $transaction_id, $refund_type, $amount, $currency, $note ) {

    $ppfunctions = new PayPalFunctions();
    $ppfunctions->api_end_point($this->_purchase_data['api_end_point']);

    $data =  array(
      'USER' => $this->_purchase_data['credentials']['api_username'],
      'PWD' => $this->_purchase_data['credentials']['api_password'],
      'SIGNATURE' => $this->_purchase_data['credentials']['api_signature'],
      'VERSION' => $this->_api_version,
      'METHOD' => 'RefundTransaction',
      'TRANSACTIONID' => $transaction_id,
      'REFUNDTYPE' => $refund_type,
      'AMT' => number_format($amount, 2, '.', ''),
      'CURRENCYCODE' => $currency,
      'NOTE' => $note,
    );

    $ppfunctions->request_fields( $data );

    $response = $ppfunctions->paypal_query();
    return $response;
  }

}