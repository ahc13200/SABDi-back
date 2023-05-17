<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Sentai_batchController extends RestController
{


    /**
     *  Sentai_batchController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Sentai_batch';
        $classnamespaceservice='Modules\services\Services\Sentai_batchService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

