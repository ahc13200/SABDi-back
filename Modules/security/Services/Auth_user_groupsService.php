<?php


namespace Modules\security\Services;


use App\Services\Services;

class Auth_user_groupsService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Auth_user_groups');
   }

}

