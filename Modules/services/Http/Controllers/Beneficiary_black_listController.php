<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Beneficiary_black_listController extends RestController
{


    /**
     *  Beneficiary_black_listController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Beneficiary_black_list';
        $classnamespaceservice='Modules\services\Services\Beneficiary_black_listService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

