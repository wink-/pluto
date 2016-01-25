<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'part';

    /**
     * The database field that is the primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

   /**
     * The database connection used by the model.
     *
     * @var string
     */
    //protected $connection = '';
    
   /**
     * Convert dates into Carbon objects
     *
     * @var array
     */    
    protected $dates = ['created_at', 'updated_at', 'TimeStamp'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['PARTNUM', 'PROCNAME', 'CUSTCODE', 'PRICE', 'PRICECODE', 'PARTNAME', 
    'PROCNUM', 'METHOD', 'CERTREQ', 'STRESSRLF', 'SPEC', 'MATERIAL', 'PLTHICKMIN', 'PLTHICKMAX',
    'SPLREQR', 'SQRAREAPT', 'CUSTWTPC', 'FINISHWTPC', 'COATINGWT', 'HTRTCND', 'NORMLOTSIZ',
    'X', 'Y', 'Z', 'MATHICKNSS', 'QUAL1', 'QUAL2', 'QUAL3', 'QUAL4', 'QUAL5', 'QUAL6', 'NOTES',
    'OpNotes', 'ImageID'];
    /**, 'pre_bake_temperature', 'pre_bake_time',
    'embrittlement_bake_temperature', 'embrittlement_bake_time',
    'adhesion_bake_temperature', 'adhesion_bake_time'];**/

/**
 *  Relationships 
 */

/**
 * Each part belongs to a customer
 * Get the customer that owns the part
 *
 * @return \Illuminate\Dataase\Eloquent\Relations\BelongsTo
 */
    public function customer()
    {
        // The foreign key `customer.CUSTCODE` will map to our local key `part.CUSTCODE`
        return $this->belongsTo('App\Models\Customer', 'CUSTCODE', 'CUSTCODE');
    }

}
