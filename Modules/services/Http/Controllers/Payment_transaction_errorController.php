<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Payment_transaction_errorController extends RestController
{


    /**
     *  Payment_transaction_errorController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Payment_transaction_error';
        $classnamespaceservice='Modules\services\Services\Payment_transaction_errorService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

