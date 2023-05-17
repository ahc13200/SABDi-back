<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Sentai_batch_detailsController extends RestController
{


    /**
     *  Sentai_batch_detailsController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Sentai_batch_details';
        $classnamespaceservice='Modules\services\Services\Sentai_batch_detailsService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

