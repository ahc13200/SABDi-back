<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Log_programerController extends RestController
{


    /**
     *  Log_programerController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Log_programer';
        $classnamespaceservice='Modules\services\Services\Log_programerService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

