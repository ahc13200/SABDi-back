<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class CountryController extends RestController
{


    /**
     *  CountryController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Country';
        $classnamespaceservice='Modules\services\Services\CountryService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

