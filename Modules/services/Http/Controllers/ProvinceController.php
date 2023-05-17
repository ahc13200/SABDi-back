<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class ProvinceController extends RestController
{


    /**
     *  ProvinceController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Province';
        $classnamespaceservice='Modules\services\Services\ProvinceService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

