<?php


namespace Modules\security\Services;


use App\Services\Services;

class Auth_group_permissionsService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Auth_group_permissions');
   }

}

