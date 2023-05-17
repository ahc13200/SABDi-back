<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_userController extends RestController
{


    /**
     *  Auth_userController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_user';
        $classnamespaceservice='Modules\security\Services\Auth_userService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

