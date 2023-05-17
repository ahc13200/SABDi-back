<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class MunicipalityController extends RestController
{


    /**
     *  MunicipalityController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Municipality';
        $classnamespaceservice='Modules\services\Services\MunicipalityService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

