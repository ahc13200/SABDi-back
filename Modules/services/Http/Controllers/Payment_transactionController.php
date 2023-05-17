<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Payment_transactionController extends RestController
{


    /**
     *  Payment_transactionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Payment_transaction';
        $classnamespaceservice='Modules\services\Services\Payment_transactionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

