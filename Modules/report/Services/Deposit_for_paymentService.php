<?php


namespace Modules\report\Services;


use App\Services\Services;

class Deposit_for_paymentService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\report\Models\Deposit_for_payment');
   }

}

