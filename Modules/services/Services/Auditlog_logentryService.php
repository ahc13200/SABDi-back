<?php


namespace Modules\services\Services;


use App\Services\Services;

class Auditlog_logentryService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\services\Models\Auditlog_logentry');
   }

}

