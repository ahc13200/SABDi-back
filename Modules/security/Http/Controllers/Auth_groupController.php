<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Auth_groupController extends RestController
{


    /**
     *  Auth_groupController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Auth_group';
        $classnamespaceservice='Modules\security\Services\Auth_groupService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

