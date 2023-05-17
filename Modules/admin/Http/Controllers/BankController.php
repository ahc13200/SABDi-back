<?php

namespace Modules\admin\Http\Controllers;

use App\Http\Controllers\RestController;

class BankController extends RestController
{


    /**
     *  BankController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\admin\Models\Bank';
        $classnamespaceservice='Modules\admin\Services\BankService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

