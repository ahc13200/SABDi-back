<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Beneficiary_control_amountController extends RestController
{


    /**
     *  Beneficiary_control_amountController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Beneficiary_control_amount';
        $classnamespaceservice='Modules\services\Services\Beneficiary_control_amountService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

