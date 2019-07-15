<?php
class Login extends Controller {

    public function index()
    {
            $data['judul'] = 'Home';
            $data['nama'] = $this->model('User_model')->getUser();
            $this->view('templates/css', $data);
            $this->view('login/index', $data);
            $this->view('templates/script');
        
    }

    public function cek()
    {
        // if( $this->model('Login_model')->cekLogin($_POST) > 0 ) {
        //     $_SESSION['user'] = $_POST['name'];
        //     header('Location: '. BASEURL);
        // } else {
        //     echo '<script>alert("username or password is wrong!");</script>';
        //     header('Location: '. BASEURL .'/login');
        //     exit;
        // }

        $dataus = $this->model('Login_model')->getUserByLogin($_POST['name'],$_POST['password']);

        if($dataus){
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
        header('Location:'. BASEURL . '/login');
    }

    public function api()
    {
        $this->model('Api')->masuk();
    }

    public function out()
    {
        
    }
}

?>