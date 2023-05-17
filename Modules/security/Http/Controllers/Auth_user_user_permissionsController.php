<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_user_user_permissionsController extends RestController
{


    /**
     *  Auth_user_user_permissionsController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_user_user_permissions';
        $classnamespaceservice='Modules\security\Services\Auth_user_user_permissionsService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

