<?php

class OrderTrackingController extends BaseController{
	
	public function order()
	{
		return View::make('orderTracking');
	}
}