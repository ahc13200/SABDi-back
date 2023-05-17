<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\services\Models;


use App\Models\BaseModel;

use Modules\admin\Models\Agency;
use Modules\admin\Models\Bank;
use Illuminate\Support\Carbon;

/**
 * Este es la clase modelo para la tabla public.payment_transaction.
 *
 * Los siguientes son los campos de la tabla 'public.payment_transaction':
 * @property integer $id
 * @property string $transaction_date
 * @property string $request_date
 * @property string $agency_trans_id
 * @property string $bank_trans_id
 * @property string $cust_firstname
 * @property string $cust_lastname
 * @property string $cust_address
 * @property string $cust_identification
 * @property string $cust_phone_number
 * @property string $account_card
 * @property integer $trans_amount
 * @property integer $trans_fee
 * @property string $sender_firstname
 * @property string $sender_lastname
 * @property string $sender_address
 * @property string $sender_identification
 * @property string $sender_identification_type
 * @property string $sender_birth_country
 * @property Carbon $sender_birth_date
 * @property string $sender_fin_inst
 * @property string $sender_account_card
 * @property boolean $completed
 * @property string $msg_id
 * @property string $msg_creation_datetime
 * @property boolean $send_bank
 * @property integer $agency_id
 * @property integer $bank_id
 * @property integer $currency_id
 * @property integer $cust_municip_id
 * @property integer $cust_prov_id
 * @property integer $sender_city_id
 * @property integer $sender_country_id
 * @property integer $transaction_state_id
 * @property string $state_source
 * @property boolean $reconcilied_bank
 * @property string $transaction_reference
 * @property integer $bank_fee

 * Los siguientes son las relaciones de este modelo :

 * @property Agency $agency
 * @property Bank $bank
 * @property Country $sender_country
 * @property Currency $currency
 * @property Municipality $cust_municip
 * @property Province $cust_prov
 * @property Transaction_state $transaction_state
 * @property Payment_transaction_error[] $array_payment_transaction_error
 * @property Sentai_batch_details[] $array_sentai_batch_details
 **/



class Payment_transaction extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.payment_transaction';

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

    const RELATIONS = ['agency','bank','sender_country','currency','cust_municip','cust_prov','transaction_state','array_payment_transaction_error','array_sentai_batch_details'];
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
    const MODEL = 'Payment_transaction';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'transaction_date',
      'request_date',
      'agency_trans_id',
      'bank_trans_id',
      'cust_firstname',
      'cust_lastname',
      'cust_address',
      'cust_identification',
      'cust_phone_number',
      'account_card',
      'trans_amount',
      'trans_fee',
      'sender_firstname',
      'sender_lastname',
      'sender_address',
      'sender_identification',
      'sender_identification_type',
      'sender_birth_country',
      'sender_birth_date',
      'sender_fin_inst',
      'sender_account_card',
      'completed',
      'msg_id',
      'msg_creation_datetime',
      'send_bank',
      'agency_id',
      'bank_id',
      'currency_id',
      'cust_municip_id',
      'cust_prov_id',
      'sender_city_id',
      'sender_country_id',
      'transaction_state_id',
      'state_source',
      'reconcilied_bank',
      'transaction_reference',
      'bank_fee'
    ];

	 /**
     * Get the Agency
     */
	  public function agency()
		{
			return $this->belongsTo(Agency::class,'agency_id','id');
		}

	 /**
     * Get the Bank
     */
	  public function bank()
		{
			return $this->belongsTo(Bank::class,'bank_id','id');
		}

	 /**
     * Get the Country
     */
	  public function sender_country()
		{
			return $this->belongsTo(Country::class,'sender_country_id','id');
		}

	 /**
     * Get the Currency
     */
	  public function currency()
		{
			return $this->belongsTo(Currency::class,'currency_id','id');
		}

	 /**
     * Get the Municipality
     */
	  public function cust_municip()
		{
			return $this->belongsTo(Municipality::class,'cust_municip_id','id');
		}

	 /**
     * Get the Province
     */
	  public function cust_prov()
		{
			return $this->belongsTo(Province::class,'cust_prov_id','id');
		}

	 /**
     * Get the Transaction_state
     */
	  public function transaction_state()
		{
			return $this->belongsTo(Transaction_state::class,'transaction_state_id','id');
		}


	 /**
     * 
     * Get array_payment_transaction_error
     */
	  public function array_payment_transaction_error()
		{
			return $this->hasMany(Payment_transaction_error::class,'transaction_id','id');
		}

	 /**
     * 
     * Get array_sentai_batch_details
     */
	  public function array_sentai_batch_details()
		{
			return $this->hasMany(Sentai_batch_details::class,'transaction_id','id');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'transaction_date' =>'required|date',
                'request_date' =>'required|date',
                'agency_trans_id' =>'required|max:40',
                'bank_trans_id' =>'required|max:13',
                'cust_firstname' =>'required|max:50',
                'cust_lastname' =>'required|max:50',
                'cust_address' =>'required|max:80',
                'cust_identification' =>'required|max:11',
                'cust_phone_number' =>'required|max:20',
                'account_card' =>'required|max:16',
                'trans_amount' =>'required',
                'trans_fee' =>'required',
                'sender_firstname' =>'required|max:50',
                'sender_lastname' =>'required|max:50',
                'sender_address' =>'required|max:80',
                'sender_identification' =>'required|max:11',
                'sender_identification_type' =>'nullable|max:50',
                'sender_birth_country' =>'nullable|max:50',
                'sender_birth_date' =>'nullable|date',
                'sender_fin_inst' =>'nullable|max:50',
                'sender_account_card' =>'nullable|max:50',
                'completed' =>'required|boolean',
                'msg_id' =>'required|max:36',
                'msg_creation_datetime' =>'nullable|date',
                'send_bank' =>'required|boolean',
                'agency_id' =>'required|exists:'.$this->connection.'.public.agency,id',
                'bank_id' =>'required|exists:'.$this->connection.'.public.bank,id',
                'currency_id' =>'nullable|exists:'.$this->connection.'.public.currency,id',
                'cust_municip_id' =>'nullable|exists:'.$this->connection.'.public.municipality,id',
                'cust_prov_id' =>'nullable|exists:'.$this->connection.'.public.province,id',
                'sender_city_id' =>'nullable',
                'sender_country_id' =>'nullable|exists:'.$this->connection.'.public.country,id',
                'transaction_state_id' =>'required|exists:'.$this->connection.'.public.transaction_state,id',
                'state_source' =>'required|max:10',
                'reconcilied_bank' =>'required|boolean',
                'transaction_reference' =>'required|max:13',
                'bank_fee' =>'nullable'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.payment_transaction,id,'.$this->id.',id',
                'transaction_date' =>'required|date',
                'request_date' =>'required|date',
                'agency_trans_id' =>'required|max:40',
                'bank_trans_id' =>'required|max:13',
                'cust_firstname' =>'required|max:50',
                'cust_lastname' =>'required|max:50',
                'cust_address' =>'required|max:80',
                'cust_identification' =>'required|max:11',
                'cust_phone_number' =>'required|max:20',
                'account_card' =>'required|max:16',
                'trans_amount' =>'required',
                'trans_fee' =>'required',
                'sender_firstname' =>'required|max:50',
                'sender_lastname' =>'required|max:50',
                'sender_address' =>'required|max:80',
                'sender_identification' =>'required|max:11',
                'sender_identification_type' =>'nullable|max:50',
                'sender_birth_country' =>'nullable|max:50',
                'sender_birth_date' =>'nullable|date',
                'sender_fin_inst' =>'nullable|max:50',
                'sender_account_card' =>'nullable|max:50',
                'completed' =>'required|boolean',
                'msg_id' =>'required|max:36',
                'msg_creation_datetime' =>'nullable|date',
                'send_bank' =>'required|boolean',
                'agency_id' =>'required|exists:'.$this->connection.'.public.agency,id',
                'bank_id' =>'required|exists:'.$this->connection.'.public.bank,id',
                'currency_id' =>'nullable|exists:'.$this->connection.'.public.currency,id',
                'cust_municip_id' =>'nullable|exists:'.$this->connection.'.public.municipality,id',
                'cust_prov_id' =>'nullable|exists:'.$this->connection.'.public.province,id',
                'sender_city_id' =>'nullable',
                'sender_country_id' =>'nullable|exists:'.$this->connection.'.public.country,id',
                'transaction_state_id' =>'required|exists:'.$this->connection.'.public.transaction_state,id',
                'state_source' =>'required|max:10',
                'reconcilied_bank' =>'required|boolean',
                'transaction_reference' =>'required|max:13',
                'bank_fee' =>'nullable'
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

