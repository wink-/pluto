<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscrepantMaterialReport extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dmr';

    /**
     * The database field that is the primary key.
     *
     * @var string
     */
     protected $primaryKey = 'id';

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
    protected $dates = ['created_at', 'updated_at', 'date_of_discrepancy', 'corrective_action_due_date']; 

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['workorder', 'date_of_discrepancy', 'description', 'corrective_action_due_date',
     'rejection_type', 'internal_comments', 'customer', 'process', 'part_number', 'report_path', 'report_filename', 'report_mime',
     'image_path', 'image_filename', 'image_mime'];

    

}
