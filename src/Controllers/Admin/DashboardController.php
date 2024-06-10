<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if($_SESSION['user']['roles_id']!=1){
            header('Location: /');
        }
        $this->renderViewAdmin('dashboard');
    }
}
