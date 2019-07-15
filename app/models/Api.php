<?php
session_start();
class Api
{
    private $authfile = AUTH;
    private $url = BASEURL;
    private $scope = [
        'https://www.googleapis.com/auth/userinfo.email',
        'https://www.googleapis.com/auth/userinfo.profile',
        'https://www.googleapis.com/auth/plus.me'
    ];

    private $fire;

    public function __construct()
    {
        $this->fire = new Google_Client();
        $this->fire->setAuthConfigFile($this->authfile);
        $this->fire->setRedirectUri($this->url . '/login');
        $this->fire->setScopes($this->scope);
    }

    public function masuk()
    {
        if (!isset($_GET['code'])) {
            $auth_url = $this->fire->createAuthUrl();
            header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
        } else {
            $this->fire->authenticate($_GET['code']);
            $_SESSION['access_token'] = $this->fire->getAccessToken();

            try {
                $plus = new Google_Service_Plus($this->fire);
                $_SESSION['access_profile'] = $plus->people->get('me');
            } catch (\Exception $e) {
                echo $e->__toString();

                $_SESSION['access_token'] = '';
                die;
            }
        }
    }

    public function keluar()
    {
        $_SESSION['access_token'] = '';
        $_SESSION['access_profile'] = '';
        header('Location: ' . BASEURL );
     }
}
