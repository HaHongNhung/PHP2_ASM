<?php 

namespace Ductong\FpolyBaseWeb3014\Controllers\Client;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Models\User;

class AuthController extends Controller
{
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleLogin();
        } else {
            if(!empty($_SESSION['user'])){
                header("Location: /");  
            }
            $this->renderViewClient('Auth.login');
        }
    }

    //Hàm sử lý dữ liệu login
    public function handleLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $error = '';
    
        if(empty($email) || empty($password)){
            $error = "Invalid!";
            // Redirect back to login page with error message
            header("Location: /login");    
            exit;
        }
        else{
            $user = new User();
            $userData = $user->checkUser($email, $password);
            if($userData){
                $_SESSION['user'] = $userData;
                if($userData['roles_id'] == 1){
                    header("Location: /admin");
                    exit;
                }
                else{
                    header("Location: /");
                    exit;
                }
                
            } else {
                // Invalid login credentials
                $error = "Invalid email or password.";
                header("Location: /login");
                exit;
            }
        }
    }

    public function logout(){
        session_destroy();
        header("Location: /");
    }
    

}