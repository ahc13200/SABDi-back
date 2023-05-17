<?php


namespace Modules\admin\Services;


use App\Services\Services;

class FeeService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\admin\Models\Fee');
   }

}

