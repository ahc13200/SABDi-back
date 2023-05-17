<?php


namespace Modules\services\Services;


use App\Services\Services;

class MunicipalityService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\services\Models\Municipality');
   }

}

