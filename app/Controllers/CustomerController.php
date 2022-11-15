<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WishlistModel;

class CustomerController extends BaseController
{
    public function __construct()
    {
        $this->wishlistModel = new WishlistModel();
    }

    public function index()
    {
        return view('auth/admin/data_customer_page');
    }



    public function mywish()
    {
        $data = [
            'title' => 'Favorit Saya',
            'wishlist' => $this->wishlistModel->getWishlist(),
            'data_wish' => $this->wishlistModel->where('id_user', user_id())->find(),
        ];

        return view('auth/customer/mywish', $data);
    }
    
}
