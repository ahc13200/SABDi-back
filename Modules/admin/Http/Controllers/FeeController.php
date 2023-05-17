<?php

namespace Modules\admin\Http\Controllers;

use App\Http\Controllers\RestController;

class FeeController extends RestController
{


    /**
     *  FeeController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\admin\Models\Fee';
        $classnamespaceservice='Modules\admin\Services\FeeService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

