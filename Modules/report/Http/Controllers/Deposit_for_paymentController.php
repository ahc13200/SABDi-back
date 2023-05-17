<?php

namespace Modules\report\Http\Controllers;

use App\Http\Controllers\RestController;

class Deposit_for_paymentController extends RestController
{


    /**
     *  Deposit_for_paymentController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\report\Models\Deposit_for_payment';
        $classnamespaceservice='Modules\report\Services\Deposit_for_paymentService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

