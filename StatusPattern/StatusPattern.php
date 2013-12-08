<?php
namespace DesignPatterns;


/**
* The order has two status: new, shipping.
* When the order's status is new, what can do is just 'shipping' handle;
* When the order's status is shipping, what can do is just 'completed' handle;
* 
*/
interface OrderInterface 
{

	public function shipOrder();

	public function completeOrder();

}

class Order 
{

	protected $order;

	public function __construct(array $order)
	{
		if (empty($order)) {
			throw new \Exception('Order can not be empty!');
		}
		$this->order = $order;
	}

}

class NewOrder extends Order implements OrderInterface
{
	public function shipOrder()
	{
		$this->order['status'] = 'shipping';
		$this->order['updatedTime'] = time();
		// Setting the new order status into database;
		return $this->updateOrder($order);
	}

	public function completeOrder()
	{
		//Can not complete the order which status is new, throw exception;
		throw new \Exception('Can not complete the order which status is new!');
	}
}

class ShippingOrder extends Order implements OrderInterface
{
	public function shipOrder()
	{
		//Can not ship the order which status is shipping, throw exception;
		throw new \Exception('Can not ship the order which status is shipping!');
	}

	public function completeOrder()
	{
		$this->order['status'] = 'completed';
		$this->order['updatedTime'] = time();
		// Setting the new order status into database;
		return $this->updateOrder($order);
	}
}


class OrderFactory {

	public static function getOrder($id)
	{
		$order = 'Get Order From Database';

		switch ($order['status']) {
			case 'new':
				return new NewOrder($order);
			case 'shipping':
				return new ShippingOrder($order);
			default:
				throw new \Exception('Order status error!');
				break;
		}
	}

	private function __construct()
	{
		throw Exception('Can not instance the OrderFactory class!');
	}
}


// Client

Class OrderControler {

	public function shipAction($id)
	{
		$order = OrderFactory::getOrder($id);
		try {
			$order->shipOrder($id);
		} catch (Exception $e) {
			//handle error!
		}
		// response to browser 
	}

	public function completeAction($id)
	{
		$order = OrderFactory::getOrder($id);
		try {
			$order->completeOrder($id);
		} catch (Exception $e) {
			//handle error!
		}
		// response to browser 
	}

}
