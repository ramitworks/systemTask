<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
	/**
	 * Category Deatails in list view.
	 */
	public function index()
	{
		$model = new CategoryModel();
		$data = $model->findAll();
		return view('category/list',compact('data'));
	}

	/**
	 * To create the new category
	 */
	public function create()
	{
		if($this->request->getMethod() == 'post'){
			$data = $this->request->getVar();
			$model = new CategoryModel();
			if($model->insert($data)){
				echo "<script>alert('Category Created Successfully')</script>" ;
			}else{
				echo "<script>alert('Something Went Wrong')</script>" ;
			}
		}
		return view('category/create');
	}
}
