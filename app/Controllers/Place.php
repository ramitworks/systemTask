<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Place extends BaseController
{
	/**
	 * List of Orders are Placed.
	 */
	public function index()
	{
		$model = new OrderModel();
		$data = $model->findAll();
		return view('order/list',compact('data'));
	}
}
