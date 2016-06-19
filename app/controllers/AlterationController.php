<?php

class AlterationController extends BaseController{
	
	public function serv()
	{
		return View::make('alterationservices');
	}

		public function transac()
	{
		return View::make('alterationtransaction');
	}
}