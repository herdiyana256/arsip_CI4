<?php



namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login berhasil, set session user
            $this->setUserSession($user);
            return redirect()->to('/dokumen'); // Ganti '/dokumen' dengan halaman yang ingin dituju setelah login berhasil
        } else {
            // Login gagal, redirect kembali ke halaman login dengan pesan error
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        // Hapus session dan redirect ke halaman login
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
