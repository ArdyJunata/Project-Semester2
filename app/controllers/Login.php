<?php
class Login extends Controller
{

    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['judul'] = 'Home';
            $data['nama'] = $this->model('User_model')->getUser();
            $this->view('templates/css', $data);
            $this->view('login/index', $data);
            $this->view('templates/script');
        }
    }

    public function cek()
    {
        $dataus = $this->model('Login_model')->getUserByLogin($_POST['name'], $_POST['password']);

        if ($dataus) {
            $_SESSION['user'] = $dataus['UserEmail'];
            $_SESSION['id'] = $dataus['UserID'];
            header('Location: ' . BASEURL);
        } else {
            header('Location: ' . BASEURL . '/login');
        }
    }

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('Location:' . BASEURL . '/login');
    }

    public function api()
    {
        $this->model('Api')->masuk();
    }

    public function out()
    { }
}
