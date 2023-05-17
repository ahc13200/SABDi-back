<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\report\Models;


use App\Models\BaseModel;

use Illuminate\Support\Carbon;

/**
 * Este es la clase modelo para la tabla public.cust_identification_report.
 *
 * Los siguientes son los campos de la tabla 'public.cust_identification_report':
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
 * @property string $msg_creation_datetime
 * @property boolean $send_bank
 * @property string $transaction_reference
 * @property string $state_source
 * @property boolean $reconcilied_bank
 * @property string $agency_name
 * @property string $agency_code
 * @property string $sentai_code
 * @property string $issuing_bank
 * @property string $bank_code
 * @property string $bank_name
 * @property string $currency_code
 * @property string $cust_municipality_name
 * @property string $cust_province_name
 * @property string $sender_country_name
 * @property string $state_code
 * @property string $description_es

 * Los siguientes son las relaciones de este modelo :

 **/



class Cust_identification_report extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.cust_identification_report';

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
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

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
    const MODEL = 'Cust_identification_report';
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
      'msg_creation_datetime',
      'send_bank',
      'transaction_reference',
      'state_source',
      'reconcilied_bank',
      'agency_name',
      'agency_code',
      'sentai_code',
      'issuing_bank',
      'bank_code',
      'bank_name',
      'currency_code',
      'cust_municipality_name',
      'cust_province_name',
      'sender_country_name',
      'state_code',
      'description_es'
    ];



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'id' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report',
                'transaction_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report',
                'request_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report',
                'agency_trans_id' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report',
                'bank_trans_id' =>'nullable|max:13|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_firstname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_lastname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_address' =>'nullable|max:80|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_identification' =>'nullable|max:11|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_phone_number' =>'nullable|max:20|unique:'.$this->connection.'.public.cust_identification_report',
                'account_card' =>'nullable|max:16|unique:'.$this->connection.'.public.cust_identification_report',
                'trans_amount' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report',
                'trans_fee' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_firstname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_lastname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_address' =>'nullable|max:80|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_identification' =>'nullable|max:11|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_identification_type' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_birth_country' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_birth_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_fin_inst' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_account_card' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'completed' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report',
                'msg_creation_datetime' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report',
                'send_bank' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report',
                'transaction_reference' =>'nullable|max:13|unique:'.$this->connection.'.public.cust_identification_report',
                'state_source' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report',
                'reconcilied_bank' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report',
                'agency_name' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report',
                'agency_code' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report',
                'sentai_code' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report',
                'issuing_bank' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report',
                'bank_code' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report',
                'bank_name' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report',
                'currency_code' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_municipality_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report',
                'cust_province_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report',
                'sender_country_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report',
                'state_code' =>'nullable|max:4|unique:'.$this->connection.'.public.cust_identification_report',
                'description_es' =>'nullable|max:60|unique:'.$this->connection.'.public.cust_identification_report'
            ],
            'update'=>[
                'id' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report,id,'.$this->id.',id',
                'transaction_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report,transaction_date,'.$this->id.',id',
                'request_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report,request_date,'.$this->id.',id',
                'agency_trans_id' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report,agency_trans_id,'.$this->id.',id',
                'bank_trans_id' =>'nullable|max:13|unique:'.$this->connection.'.public.cust_identification_report,bank_trans_id,'.$this->id.',id',
                'cust_firstname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,cust_firstname,'.$this->id.',id',
                'cust_lastname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,cust_lastname,'.$this->id.',id',
                'cust_address' =>'nullable|max:80|unique:'.$this->connection.'.public.cust_identification_report,cust_address,'.$this->id.',id',
                'cust_identification' =>'nullable|max:11|unique:'.$this->connection.'.public.cust_identification_report,cust_identification,'.$this->id.',id',
                'cust_phone_number' =>'nullable|max:20|unique:'.$this->connection.'.public.cust_identification_report,cust_phone_number,'.$this->id.',id',
                'account_card' =>'nullable|max:16|unique:'.$this->connection.'.public.cust_identification_report,account_card,'.$this->id.',id',
                'trans_amount' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report,trans_amount,'.$this->id.',id',
                'trans_fee' =>'nullable|unique:'.$this->connection.'.public.cust_identification_report,trans_fee,'.$this->id.',id',
                'sender_firstname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_firstname,'.$this->id.',id',
                'sender_lastname' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_lastname,'.$this->id.',id',
                'sender_address' =>'nullable|max:80|unique:'.$this->connection.'.public.cust_identification_report,sender_address,'.$this->id.',id',
                'sender_identification' =>'nullable|max:11|unique:'.$this->connection.'.public.cust_identification_report,sender_identification,'.$this->id.',id',
                'sender_identification_type' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_identification_type,'.$this->id.',id',
                'sender_birth_country' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_birth_country,'.$this->id.',id',
                'sender_birth_date' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report,sender_birth_date,'.$this->id.',id',
                'sender_fin_inst' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_fin_inst,'.$this->id.',id',
                'sender_account_card' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,sender_account_card,'.$this->id.',id',
                'completed' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report,completed,'.$this->id.',id',
                'msg_creation_datetime' =>'nullable|date|unique:'.$this->connection.'.public.cust_identification_report,msg_creation_datetime,'.$this->id.',id',
                'send_bank' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report,send_bank,'.$this->id.',id',
                'transaction_reference' =>'nullable|max:13|unique:'.$this->connection.'.public.cust_identification_report,transaction_reference,'.$this->id.',id',
                'state_source' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report,state_source,'.$this->id.',id',
                'reconcilied_bank' =>'nullable|boolean|unique:'.$this->connection.'.public.cust_identification_report,reconcilied_bank,'.$this->id.',id',
                'agency_name' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report,agency_name,'.$this->id.',id',
                'agency_code' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report,agency_code,'.$this->id.',id',
                'sentai_code' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report,sentai_code,'.$this->id.',id',
                'issuing_bank' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report,issuing_bank,'.$this->id.',id',
                'bank_code' =>'nullable|max:10|unique:'.$this->connection.'.public.cust_identification_report,bank_code,'.$this->id.',id',
                'bank_name' =>'nullable|max:40|unique:'.$this->connection.'.public.cust_identification_report,bank_name,'.$this->id.',id',
                'currency_code' =>'nullable|max:50|unique:'.$this->connection.'.public.cust_identification_report,currency_code,'.$this->id.',id',
                'cust_municipality_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report,cust_municipality_name,'.$this->id.',id',
                'cust_province_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report,cust_province_name,'.$this->id.',id',
                'sender_country_name' =>'nullable|max:100|unique:'.$this->connection.'.public.cust_identification_report,sender_country_name,'.$this->id.',id',
                'state_code' =>'nullable|max:4|unique:'.$this->connection.'.public.cust_identification_report,state_code,'.$this->id.',id',
                'description_es' =>'nullable|max:60|unique:'.$this->connection.'.public.cust_identification_report,description_es,'.$this->id.',id'
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

