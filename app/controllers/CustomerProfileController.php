<?php

class CustomerProfileController extends BaseController{
	
	public function indiv()
	{
		return View::make('customerprofile-individual');
	}

	public function comp()
	{
		return View::make('customerprofile-company');
	}
}