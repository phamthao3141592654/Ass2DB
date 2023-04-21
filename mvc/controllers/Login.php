<?php
class Login extends Controller
{
    public function show()
    {
        $this->view("content_layout", [
            "page" => "login"
        ]);
    }
    public function login()
    {
        $username = $password = NULL;
        if (!empty($_POST['login'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo "<script>alert('Usename and Password cannot be blank')</script>";
                return;
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
            }
            $loginModel = $this->model("LoginModel");
            $result = $loginModel->login($username, $password);
            if ($result) {
                $this->view("content_layout", [
                    "page" => "admin",
                ]);
            } else {
                $this->view("content_layout", [
                    "page" => "about",
                ]);
            }
        } else {
            $this->view("content_layout", [
                "page" => "login"
            ]);
        }
    }
}

?>