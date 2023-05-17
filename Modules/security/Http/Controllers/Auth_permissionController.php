<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_permissionController extends RestController
{


    /**
     *  Auth_permissionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_permission';
        $classnamespaceservice='Modules\security\Services\Auth_permissionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

