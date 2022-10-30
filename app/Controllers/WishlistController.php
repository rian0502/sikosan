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
    }

    public function check_is_wished($id_kosan, $id_user)
    {
        $query = $this->wishlistModel->where('id_kosan', $id_kosan)->where('id_user', $id_user)->first();

        if ($query != null) {
            return redirect()->to('/unwish/' . $query['id_wishlist']);
        } else {
            return redirect()->to('/wish/' . $id_kosan . '/' . $id_user);
        }
    }

    public function wish($id_kosan, $id_user)
    {
        $data = [
            'id_kosan' => $id_kosan,
            'id_user' => $id_user
        ];

        $this->wishlistModel->insert($data);

        return redirect()->to('/');
    }

    public function unwish($id_wishlist)
    {
        $this->wishlistModel->delete(['id_wishlist', $id_wishlist]);

        return redirect()->to('/');
    }
}
