<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The database field that is the primary key.
     *
     * @var string
     */
    // protected $primaryKey = '';

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
    protected $dates = ['created_at', 'updated_at']; 

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'customer_id', 'email', 'phone', 'extension', 'cell', 'department', 'active'];

/**
 *  Relationships 
 */

/**
 * Each contact belongs to a customer
 * Get the customer that owns the contact
 *
 * @return \Illuminate\Dataase\Eloquent\Relations\BelongsTo
 */
    public function customer()
    {
        // The foreign key `customer.CUSTCODE` will map to our local key `contact.customer_id`
        return $this->belongsTo('App\Models\Customer', 'CUSTCODE', 'customer_id');
    } 

}
