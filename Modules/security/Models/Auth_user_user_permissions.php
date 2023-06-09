<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\security\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.auth_user_user_permissions.
 *
 * Los siguientes son los campos de la tabla 'public.auth_user_user_permissions':
 * @property integer $id
 * @property integer $user_id
 * @property integer $permission_id

 * Los siguientes son las relaciones de este modelo :

 * @property Auth_permission $permission
 * @property Auth_user $user
 **/



class Auth_user_user_permissions extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.auth_user_user_permissions';

   /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'bd';

    /**
     * The primarykey associated with the table-model.
     *
     * @var integer
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;


    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    const RELATIONS = ['permission','user'];
/**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    protected $appends = [];

    /**
     * Model Class Name
     *
     * @var string
     */
    const MODEL = 'Auth_user_user_permissions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'user_id',
      'permission_id'
    ];

	 /**
     * Get the Auth_permission
     */
	  public function permission()
		{
			return $this->belongsTo(Auth_permission::class,'permission_id','id');
		}

	 /**
     * Get the Auth_user
     */
	  public function user()
		{
			return $this->belongsTo(Auth_user::class,'user_id','id');
		}



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'user_id' =>'required|exists:'.$this->connection.'.public.auth_user,id',
                'permission_id' =>'required|exists:'.$this->connection.'.public.auth_permission,id'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.auth_user_user_permissions,id,'.$this->id.',id',
                'user_id' =>'required|exists:'.$this->connection.'.public.auth_user,id',
                'permission_id' =>'required|exists:'.$this->connection.'.public.auth_permission,id'
            ]
        ];
        if(!isset($rules[$scenario]))
            throw new \Exception('Scenario '.$scenario.' not exist');
        return $rules[$scenario];
    }

 protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

    }

}

