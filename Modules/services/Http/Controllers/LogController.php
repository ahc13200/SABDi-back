<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class LogController extends RestController
{


    /**
     *  LogController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Log';
        $classnamespaceservice='Modules\services\Services\LogService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

