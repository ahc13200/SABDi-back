<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\admin\Models;


use App\Models\BaseModel;

use Modules\services\Models\Payment_transaction;

/**
 * Este es la clase modelo para la tabla public.bank.
 *
 * Los siguientes son los campos de la tabla 'public.bank':
 * @property integer $id
 * @property string $bank_code
 * @property string $bank_name
 * @property string $sentai_code
 * @property boolean $self_sending
 * @property integer $fee_id
 * @property string $cta_deb

 * Los siguientes son las relaciones de este modelo :

 * @property Fee $fee
 * @property Payment_transaction[] $array_payment_transaction
 **/



class Bank extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.bank';

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

    const RELATIONS = ['fee','array_payment_transaction'];
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
    const MODEL = 'Bank';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'bank_code',
      'bank_name',
      'sentai_code',
      'self_sending',
      'fee_id',
      'cta_deb'
    ];

	 /**
     * Get the Fee
     */
	  public function fee()
		{
			return $this->belongsTo(Fee::class,'fee_id','id');
		}


	 /**
     * 
     * Get array_payment_transaction
     */
	  public function array_payment_transaction()
		{
			return $this->hasMany(Payment_transaction::class,'bank_id','id');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'bank_code' =>'required|max:10',
                'bank_name' =>'required|max:40',
                'sentai_code' =>'required|max:10',
                'self_sending' =>'required|boolean',
                'fee_id' =>'nullable|exists:'.$this->connection.'.public.fee,id',
                'cta_deb' =>'nullable|max:50'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.bank,id,'.$this->id.',id',
                'bank_code' =>'required|max:10',
                'bank_name' =>'required|max:40',
                'sentai_code' =>'required|max:10',
                'self_sending' =>'required|boolean',
                'fee_id' =>'nullable|exists:'.$this->connection.'.public.fee,id',
                'cta_deb' =>'nullable|max:50'
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

