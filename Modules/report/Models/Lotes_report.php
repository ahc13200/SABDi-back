<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\report\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla public.lotes_report.
 *
 * Los siguientes son los campos de la tabla 'public.lotes_report':
 * @property integer $id
 * @property string $transaction_reference
 * @property string $agency_trans_id
 * @property string $bank_name
 * @property string $bank_trans_id
 * @property integer $trans_amount
 * @property integer $trans_fee

 * Los siguientes son las relaciones de este modelo :

 **/



class Lotes_report extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.lotes_report';

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
    const MODEL = 'Lotes_report';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'transaction_reference',
      'agency_trans_id',
      'bank_name',
      'bank_trans_id',
      'trans_amount',
      'trans_fee'
    ];



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'id' =>'nullable|unique:'.$this->connection.'.public.lotes_report',
                'transaction_reference' =>'nullable|max:13|unique:'.$this->connection.'.public.lotes_report',
                'agency_trans_id' =>'nullable|max:40|unique:'.$this->connection.'.public.lotes_report',
                'bank_name' =>'nullable|max:40|unique:'.$this->connection.'.public.lotes_report',
                'bank_trans_id' =>'nullable|max:13|unique:'.$this->connection.'.public.lotes_report',
                'trans_amount' =>'nullable|unique:'.$this->connection.'.public.lotes_report',
                'trans_fee' =>'nullable|unique:'.$this->connection.'.public.lotes_report'
            ],
            'update'=>[
                'id' =>'nullable|unique:'.$this->connection.'.public.lotes_report,id,'.$this->id.',id',
                'transaction_reference' =>'nullable|max:13|unique:'.$this->connection.'.public.lotes_report,transaction_reference,'.$this->id.',id',
                'agency_trans_id' =>'nullable|max:40|unique:'.$this->connection.'.public.lotes_report,agency_trans_id,'.$this->id.',id',
                'bank_name' =>'nullable|max:40|unique:'.$this->connection.'.public.lotes_report,bank_name,'.$this->id.',id',
                'bank_trans_id' =>'nullable|max:13|unique:'.$this->connection.'.public.lotes_report,bank_trans_id,'.$this->id.',id',
                'trans_amount' =>'nullable|unique:'.$this->connection.'.public.lotes_report,trans_amount,'.$this->id.',id',
                'trans_fee' =>'nullable|unique:'.$this->connection.'.public.lotes_report,trans_fee,'.$this->id.',id'
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

