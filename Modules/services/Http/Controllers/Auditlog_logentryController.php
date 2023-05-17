<?php

namespace Modules\services\Http\Controllers;

use App\Http\Controllers\RestController;

class Auditlog_logentryController extends RestController
{


    /**
     *  Auditlog_logentryController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\services\Models\Auditlog_logentry';
        $classnamespaceservice='Modules\services\Services\Auditlog_logentryService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

