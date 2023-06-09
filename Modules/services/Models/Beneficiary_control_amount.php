<?php
/**Generate by ASGENS
*@author Amanda  
*@date Sun May 14 14:30:00 GMT-04:00 2023  
*@time Sun May 14 14:30:00 GMT-04:00 2023  
*/
namespace Modules\services\Models;


use App\Models\BaseModel;

use Modules\admin\Models\Agency;

/**
 * Este es la clase modelo para la tabla public.beneficiary_control_amount.
 *
 * Los siguientes son los campos de la tabla 'public.beneficiary_control_amount':
 * @property integer $id
 * @property string $cust_identification
 * @property integer $monthly_received_amount
 * @property integer $agency_id

 * Los siguientes son las relaciones de este modelo :

 * @property Agency $agency
 **/



class Beneficiary_control_amount extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public.beneficiary_control_amount';

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

    const RELATIONS = ['agency'];
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
    const MODEL = 'Beneficiary_control_amount';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'cust_identification',
      'monthly_received_amount',
      'agency_id'
    ];

	 /**
     * Get the Agency
     */
	  public function agency()
		{
			return $this->belongsTo(Agency::class,'agency_id','id');
		}



    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'cust_identification' =>'required|max:11',
                'monthly_received_amount' =>'required',
                'agency_id' =>'required|exists:'.$this->connection.'.public.agency,id'
            ],
            'update'=>[
                'id' =>'required|unique:'.$this->connection.'.public.beneficiary_control_amount,id,'.$this->id.',id',
                'cust_identification' =>'required|max:11',
                'monthly_received_amount' =>'required',
                'agency_id' =>'required|exists:'.$this->connection.'.public.agency,id'
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

