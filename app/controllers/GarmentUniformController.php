<?php

class GarmentUniformController extends BaseController{
	
	public function male()
	{
		return View::make('garmentUniformMale');
	}

	public function female()
	{
		return View::make('garmentUniformFemale');
	}
}