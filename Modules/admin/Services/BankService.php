<?php


namespace Modules\admin\Services;


use App\Services\Services;

class BankService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\admin\Models\Bank');
   }

}

