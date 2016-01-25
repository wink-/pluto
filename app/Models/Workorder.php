<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'workorder';

    /**
     * The database field that is the primary key.
     *
     * @var string
     */
     protected $primaryKey = 'WORKORDR';

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
    protected $dates = ['created_at', 'updated_at', 'DATERECV', 'DATEREQD', 'DATEINV', 'DATESHIP', 'TimeStamp']; 

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['PartID', 'WORKORDR', 'CUSTCODE', 'PARTNUM', 'PROCNAME', 'PRICE', 'PRICECODE', 'REWORK',
    'DATERECV', 'DATEREQD', 'SHIPPED', 'CUSTPO', 'CUSTPL', 'QTY', 'QTYTYPE', 'QTYSHIP', 'QTYNOTSHIP', 'SFTPL',
    'SHIPTO', 'SHIPVIA', 'FREIGHT', 'COD', 'STARTED', 'COMPLETE', 'DATESHIP', 'INVOICED', 'INVNUMBER',
    'DATEINV', 'COST', 'WONOTE', 'STEPNAME1', 'TMANHRS1', 'TOTHOURS1', 'STEPNAME2', 'TMANHRS2',
    'TOTHOURS2', 'STEPNAME3', 'TMANHRS3', 'TOTHOURS3', 'ImageID', 'LastEdit', 'HOT', 'Priority', 'CustID'];

}
