<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_user_groupsController extends RestController
{


    /**
     *  Auth_user_groupsController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_user_groups';
        $classnamespaceservice='Modules\security\Services\Auth_user_groupsService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

