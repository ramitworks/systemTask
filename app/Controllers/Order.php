<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ProductsModel;

class Order extends BaseController
{	
	/**
	 * Cart Deatails in list view.
	 */
	public function index()
	{
		$model = new ProductsModel();
		$data = $model->where('cart', 1)->findAll();
		return view('order/cart',compact('data'));
	}

	/**
	 * To Place the order in Checkout Page
	 */
	public function add()
	{
		if($this->request->getMethod() == 'post'){
			$data = $this->request->getVar();
			$model = new OrderModel();
			if($model->insert($data)){
				$place =[
				'cart' => '1',
				'place' => '1'
				];
				$productsModel = new ProductsModel();
				if($productsModel->update($data['product_id'],$place)){
					echo "<script>alert('Order Placed Successfully')</script>" ;
				}
			}else{
				echo "<script>alert('Something Went Wrong')</script>" ;
			}
			return $this->index();
		}
	}

	/**
	 * To add the remove the Product from the Cart.
	 * @var string $product
	 */
	public function remove($product = null)
	{
		$model = new ProductsModel();
		$cart =[
		'cart' => 0
		];
		if($model->update($product, $cart)){
			echo "<script>alert('Product removed from cart')</script>" ;
		}else{
			echo "<script>alert('Something went wrong')</script>" ;
		}
		return $this->index();
	}

	/**
	 * To show the product details in Checkout Page for reviewing the product
	 * @var string $product
	 */
	public function create($product = null)
	{
		$model = new ProductsModel();
		$data = $model->find($product);
		return view('order/create',compact('data'));
	}
}
