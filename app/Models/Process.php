<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'process';

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
    protected $fillable = ['PROCNAME', 'DESCRIPT', 'MINCOST', 'RoHS', 'REACH', 'TimeStamp'];

}
