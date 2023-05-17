<?php

namespace Modules\admin\Http\Controllers;

use App\Http\Controllers\RestController;

class Fee_detailsController extends RestController
{


    /**
     *  Fee_detailsController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\admin\Models\Fee_details';
        $classnamespaceservice='Modules\admin\Services\Fee_detailsService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

