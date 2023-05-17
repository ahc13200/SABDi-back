<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class CurrencyController extends RestController
{


    /**
     *  CurrencyController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Currency';
        $classnamespaceservice='Modules\services\Services\CurrencyService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

