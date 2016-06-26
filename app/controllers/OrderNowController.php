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
	
	public function custom()
	{
		return View::make('customizeorder');
	}

	public function meas()
	{
		return View::make('measurements');
	}


	
}