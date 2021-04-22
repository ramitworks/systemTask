<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use App\Models\CategoryModel;

class Products extends BaseController
{
	/**
	 * Home Page for the user and Products list view.
	 */
	public function index()
	{
		$model = new ProductsModel();
		$data = $model->findAll();
		return view('products/list',compact('data'));
	}

	/**
	 * To add the Product to the Cart.
	 * @var string
	 */
	public function add($product = null)
	{
		$model = new ProductsModel();
		$cart =[
		'cart' => 1
		];
		if($model->update($product, $cart)){
			echo "<script>alert('Product added to cart')</script>" ;
		}else{
			echo "<script>alert('Something went wrong')</script>" ;
		}
		return $this->index();
	}

	/**
	 * To create  the Product and add the details in to the database.
	 */
	public function create()
	{
		if($this->request->getMethod() == 'post'){
			$data = $this->request->getVar();
			$allowed_extensions = ["image/jpg", "image/png", "image/jpeg"];
			$image_files = 0;
			$data['images'] = array();
			if ($this->request->getFileMultiple('image')) {
				foreach ($this->request->getFileMultiple('image') as $file) {
					//To check the image is valid format or not
					if(in_array($file->getClientMimeType(), $allowed_extensions)){
						$file->move('uploads');
						array_push($data['images'],$file->getClientName());
						$image_files++;
					}else{
						echo "<script>alert('Please select allowed image type')</script>" ;
						return $this->index();
					}
				}
				$data['images'] = serialize($data['images']);
			}
			$model = new ProductsModel();
			if($model->insert($data)){
				echo "<script>alert('Product Created Successfully')</script>" ;
			}else{
				echo "<script>alert('Something Went Wrong')</script>" ;
			}
		} 
		//To show the category details for new product creation in  category field
		$model = new CategoryModel();
		$data = $model->findAll();
		return view('products/create',compact('data'));
	}
}
