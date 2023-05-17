<?php


namespace Modules\security\Services;


use App\Services\Services;

class Auth_permissionService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Auth_permission');
   }

}

