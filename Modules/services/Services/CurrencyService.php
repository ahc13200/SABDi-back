<?php


namespace Modules\services\Services;


use App\Services\Services;

class CurrencyService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\services\Models\Currency');
   }

}

