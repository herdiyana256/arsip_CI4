<?php


namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->getUser();
        return view('user/index', $data);
    }

    public function tambah()
    {
        return view('user/tambah');
    }

    public function save()
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => $this->request->getPost('role'),
        ];
        $model->save($data);
        return redirect()->to('/user');
    }
}
