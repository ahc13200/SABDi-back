<?php

namespace Modules\admin\Http\Controllers;

use App\Http\Controllers\RestController;

class AgencyController extends RestController
{


    /**
     *  AgencyController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\admin\Models\Agency';
        $classnamespaceservice='Modules\admin\Services\AgencyService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

