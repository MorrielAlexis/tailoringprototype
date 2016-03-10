<?php

class OrderNowController extends BaseController{
	
	public function order()
	{
		return View::make('ordernow');
	}

	public function out()
	{
		return View::make('checkout');
	}
	
}