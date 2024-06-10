<?php 

namespace Ductong\FpolyBaseWeb3014\Controllers\Client;

use Ductong\FpolyBaseWeb3014\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        
        $this->renderViewClient('home');
        
    }

   public function login(){
    $this->renderViewClient('Auth.login');
   }
}