<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\security\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.auth_group_permissions.
 *
 * Los siguientes son los campos de la tabla 'public.auth_group_permissions':
 * @property integer $id
 * @property integer $group_id
 * @property integer $permission_id

 * Los siguientes son las relaciones de este modelo :

 * @property Auth_group $group
 * @property Auth_permission $permission
 **/



class Auth_group_permissions extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.auth_group_permissions';

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

    const RELATIONS = ['group','permission'];
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
    const MODEL = 'Auth_group_permissions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'group_id',
      'permission_id'
    ];

	 /**
     * Get the Auth_group
     */
	  public function group()
		{
			return $this->belongsTo(Auth_group::class,'group_id','id');
		}

	 /**
     * Get the Auth_permission
     */
	  public function permission()
		{
			return $this->belongsTo(Auth_permission::class,'permission_id','id');
		}



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'group_id' =>'required|exists:'.$this->connection.'.public.auth_group,id',
                'permission_id' =>'required|exists:'.$this->connection.'.public.auth_permission,id'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.auth_group_permissions,id,'.$this->id.',id',
                'group_id' =>'required|exists:'.$this->connection.'.public.auth_group,id',
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
