<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function index2()
	{
		return view('demo');
	}

	public function calcNumbers($param1 = null, $param2 = null)
	{
		$result['data'] = $param1 + $param2;
		return view('calculator', $result);
	}

	//--------------------------------------------------------------------

}
