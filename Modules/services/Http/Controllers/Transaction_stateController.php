<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Transaction_stateController extends RestController
{


    /**
     *  Transaction_stateController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Transaction_state';
        $classnamespaceservice='Modules\services\Services\Transaction_stateService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

