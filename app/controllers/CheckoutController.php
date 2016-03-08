<?php

class CheckoutController extends BaseController{

	public function log()
	{
		return View::make('login');
	}

	public function ship()
	{
		return View::make('shipping');
	}

	public function pay()
	{
		return View::make('payment');
	}
}