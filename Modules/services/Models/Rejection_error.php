<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\services\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.rejection_error.
 *
 * Los siguientes son los campos de la tabla 'public.rejection_error':
 * @property integer $id
 * @property string $error_code
 * @property string $error_source
 * @property string $description_es
 * @property string $description_en

 * Los siguientes son las relaciones de este modelo :

 * @property Payment_transaction_error[] $array_payment_transaction_error
 **/



class Rejection_error extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.rejection_error';

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

    const RELATIONS = ['array_payment_transaction_error'];
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
    const MODEL = 'Rejection_error';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'error_code',
      'error_source',
      'description_es',
      'description_en'
    ];


	 /**
     * 
     * Get array_payment_transaction_error
     */
	  public function array_payment_transaction_error()
		{
			return $this->hasMany(Payment_transaction_error::class,'error_id','id');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'error_code' =>'required|max:30',
                'error_source' =>'required|max:2',
                'description_es' =>'required|max:60',
                'description_en' =>'required|max:60'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.rejection_error,id,'.$this->id.',id',
                'error_code' =>'required|max:30',
                'error_source' =>'required|max:2',
                'description_es' =>'required|max:60',
                'description_en' =>'required|max:60'
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

