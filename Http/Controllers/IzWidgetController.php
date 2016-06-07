<?php namespace Modules\Izwidget\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class IzWidgetController extends Controller {
	
	public function index()
	{
		return view('izwidget::index');
	}
	
}