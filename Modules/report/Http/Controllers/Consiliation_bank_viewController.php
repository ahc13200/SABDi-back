<?php

namespace Modules\report\Http\Controllers;

use App\Http\Controllers\RestController;

class Consiliation_bank_viewController extends RestController
{


    /**
     *  Consiliation_bank_viewController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\report\Models\Consiliation_bank_view';
        $classnamespaceservice='Modules\report\Services\Consiliation_bank_viewService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

