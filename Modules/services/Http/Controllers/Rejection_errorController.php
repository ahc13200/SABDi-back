<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Rejection_errorController extends RestController
{


    /**
     *  Rejection_errorController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Rejection_error';
        $classnamespaceservice='Modules\services\Services\Rejection_errorService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

