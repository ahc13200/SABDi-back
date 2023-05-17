<?php


namespace Modules\services\Services;


use App\Services\Services;

class Payment_transaction_errorService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\services\Models\Payment_transaction_error');
   }

}

