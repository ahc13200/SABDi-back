<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_group_permissionsController extends RestController
{


    /**
     *  Auth_group_permissionsController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_group_permissions';
        $classnamespaceservice='Modules\security\Services\Auth_group_permissionsService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

