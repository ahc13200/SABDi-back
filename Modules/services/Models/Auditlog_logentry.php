<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\services\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.auditlog_logentry.
 *
 * Los siguientes son los campos de la tabla 'public.auditlog_logentry':
 * @property integer $id
 * @property string $object_pk
 * @property integer $object_id
 * @property string $object_repr
 * @property integer $action
 * @property string $changes
 * @property string $timestamp
 * @property integer $actor_id
 * @property integer $content_type_id
 * @property string $remote_addr
 * @property string $additional_data
 * @property string $serialized_data

 * Los siguientes son las relaciones de este modelo :

 **/



class Auditlog_logentry extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.auditlog_logentry';

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

    const RELATIONS = [];
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
    const MODEL = 'Auditlog_logentry';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'object_pk',
      'object_id',
      'object_repr',
      'action',
      'changes',
      'timestamp',
      'actor_id',
      'content_type_id',
      'remote_addr',
      'additional_data',
      'serialized_data'
    ];



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'object_pk' =>'required|max:255',
                'object_id' =>'nullable',
                'object_repr' =>'required',
                'action' =>'required',
                'changes' =>'required',
                'timestamp' =>'required|date',
                'actor_id' =>'nullable',
                'content_type_id' =>'required',
                'remote_addr' =>'nullable',
                'additional_data' =>'nullable',
                'serialized_data' =>'nullable'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.auditlog_logentry,id,'.$this->id.',id',
                'object_pk' =>'required|max:255',
                'object_id' =>'nullable',
                'object_repr' =>'required',
                'action' =>'required',
                'changes' =>'required',
                'timestamp' =>'required|date',
                'actor_id' =>'nullable',
                'content_type_id' =>'required',
                'remote_addr' =>'nullable',
                'additional_data' =>'nullable',
                'serialized_data' =>'nullable'
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
