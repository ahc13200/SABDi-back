<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\services\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.sentai_batch_details.
 *
 * Los siguientes son los campos de la tabla 'public.sentai_batch_details':
 * @property integer $id
 * @property string $state
 * @property integer $batch_id
 * @property integer $transaction_id

 * Los siguientes son las relaciones de este modelo :

 * @property Payment_transaction $transaction
 **/



class Sentai_batch_details extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.sentai_batch_details';

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

    const RELATIONS = ['transaction'];
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
    const MODEL = 'Sentai_batch_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'state',
      'batch_id',
      'transaction_id'
    ];

	 /**
     * Get the Payment_transaction
     */
	  public function transaction()
		{
			return $this->belongsTo(Payment_transaction::class,'transaction_id','id');
		}



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'state' =>'required|max:2',
                'batch_id' =>'required',
                'transaction_id' =>'required|exists:'.$this->connection.'.public.payment_transaction,id'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.sentai_batch_details,id,'.$this->id.',id',
                'state' =>'required|max:2',
                'batch_id' =>'required',
                'transaction_id' =>'required|exists:'.$this->connection.'.public.payment_transaction,id'
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

