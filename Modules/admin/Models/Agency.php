<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\admin\Models;


use App\Models\BaseModel;

use Modules\services\Models\Beneficiary_control_amount;
use Modules\services\Models\Payment_transaction;
use Modules\services\Models\Sentai_batch;

/**
 * Este es la clase modelo para la tabla public.agency.
 *
 * Los siguientes son los campos de la tabla 'public.agency':
 * @property integer $id
 * @property string $agency_name
 * @property string $language
 * @property integer $low_funds_warning
 * @property string $sentai_code
 * @property integer $funds_balance
 * @property integer $funds_work
 * @property boolean $state
 * @property boolean $accept_reject
 * @property boolean $self_sending
 * @property integer $fee_percent
 * @property integer $fee_id
 * @property string $agency_code
 * @property boolean $in_accounting
 * @property string $issuing_bank

 * Los siguientes son las relaciones de este modelo :

 * @property Fee $fee
 * @property Beneficiary_control_amount[] $array_beneficiary_control_amount
 * @property Payment_transaction[] $array_payment_transaction
 * @property Sentai_batch[] $array_sentai_batch
 **/



class Agency extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.agency';

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

    const RELATIONS = ['fee','array_beneficiary_control_amount','array_payment_transaction','array_sentai_batch'];
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
    const MODEL = 'Agency';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'agency_name',
      'language',
      'low_funds_warning',
      'sentai_code',
      'funds_balance',
      'funds_work',
      'state',
      'accept_reject',
      'self_sending',
      'fee_percent',
      'fee_id',
      'agency_code',
      'in_accounting',
      'issuing_bank'
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
     * Get array_beneficiary_control_amount
     */
	  public function array_beneficiary_control_amount()
		{
			return $this->hasMany(Beneficiary_control_amount::class,'agency_id','id');
		}

	 /**
     * 
     * Get array_payment_transaction
     */
	  public function array_payment_transaction()
		{
			return $this->hasMany(Payment_transaction::class,'agency_id','id');
		}

	 /**
     * 
     * Get array_sentai_batch
     */
	  public function array_sentai_batch()
		{
			return $this->hasMany(Sentai_batch::class,'agency_id','id');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'agency_name' =>'nullable|max:40',
                'language' =>'required|max:2',
                'low_funds_warning' =>'required',
                'sentai_code' =>'required|max:10',
                'funds_balance' =>'required',
                'funds_work' =>'required',
                'state' =>'required|boolean',
                'accept_reject' =>'required|boolean',
                'self_sending' =>'required|boolean',
                'fee_percent' =>'nullable',
                'fee_id' =>'nullable|exists:'.$this->connection.'.public.fee,id',
                'agency_code' =>'required|max:100',
                'in_accounting' =>'required|boolean',
                'issuing_bank' =>'nullable|max:40'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.agency,id,'.$this->id.',id',
                'agency_name' =>'nullable|max:40',
                'language' =>'required|max:2',
                'low_funds_warning' =>'required',
                'sentai_code' =>'required|max:10',
                'funds_balance' =>'required',
                'funds_work' =>'required',
                'state' =>'required|boolean',
                'accept_reject' =>'required|boolean',
                'self_sending' =>'required|boolean',
                'fee_percent' =>'nullable',
                'fee_id' =>'nullable|exists:'.$this->connection.'.public.fee,id',
                'agency_code' =>'required|max:100',
                'in_accounting' =>'required|boolean',
                'issuing_bank' =>'nullable|max:40'
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

