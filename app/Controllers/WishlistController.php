<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WishlistModel;

use function PHPUnit\Framework\isEmpty;

class WishlistController extends BaseController
{
    public function __construct()
    {
        $this->wishlistModel = new WishlistModel();
        $this->faker = \Faker\Factory::create('id_ID');
    }

    public function check_is_wished($id_kosan, $id_user)
    {
        $query = $this->wishlistModel->where('id_kosan', $id_kosan)->where('id_user', $id_user)->first();

        if ($query != null) {
            return redirect()->to('/unwish/' . $id_kosan . '/' . $query['id_wishlist']);
        } else {
            return redirect()->to('/wish/' . $id_kosan . '/' . $id_user);
        }
    }

    public function wish($id_kosan, $id_user)
    {
        $data = [
            'id_wishlist' => $this->faker->unique()->uuid,
            'id_kosan' => $id_kosan,
            'id_user' => $id_user
        ];

        $this->wishlistModel->insert($data);

        return redirect()->to('/');
    }

    public function unwish($id_kosan, $id_wishlist)
    {
        $this->wishlistModel->delete(['id_wishlist', $id_wishlist]);

        return redirect()->to('/');
    }
}
