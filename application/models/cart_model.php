<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	function update_cart($rowid,$orderid,$qty,$price,$name, $amount) {
 		$data = array(
			'rowid'   => $rowid,
			'orderid'     => $orderid,
			'qty'     => $qty,
			'price'   => $price,
			'name'   => $name,
			'amount'   => $amount
		);

		$this->cart->update($data);
	$query="insert into placeorder values('$orderid','$qty','$price','$name','$amount')";
	$this->db->query($query);
	}
}