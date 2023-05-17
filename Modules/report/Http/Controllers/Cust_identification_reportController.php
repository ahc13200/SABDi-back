<?php

namespace Modules\report\Http\Controllers;

use App\Http\Controllers\RestController;

class Cust_identification_reportController extends RestController
{


    /**
     *  Cust_identification_reportController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\report\Models\Cust_identification_report';
        $classnamespaceservice='Modules\report\Services\Cust_identification_reportService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

