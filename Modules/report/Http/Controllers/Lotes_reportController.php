<?php

namespace Modules\report\Http\Controllers;

use App\Http\Controllers\RestController;

class Lotes_reportController extends RestController
{


    /**
     *  Lotes_reportController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\report\Models\Lotes_report';
        $classnamespaceservice='Modules\report\Services\Lotes_reportService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

