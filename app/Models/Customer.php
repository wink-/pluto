<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customer';

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
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CUSTCODE', 'CUSTNAME', 'ADDRESS1', 'ADDRESS2', 'ADDRESS3',
    'CITY', 'STATE', 'ZIP', 'SHIPTO', 'destination_id', 'SHIPVIA', 'carrier_id',
    'DEFFREIGHT', 'CONTACT1', 'PHONE1', 'EXTENSION1', 'CONTACT2', 'PHONE2',
    'EXTENSION2', 'FAX', 'EMAIL', 'COD', 'TAXIDEN', 'REMARKS'];

/**
 *  Relationships
 */

/**
 * A customer can have many parts
 * Get the parts for the customer
 *
 * @return \Illuminate\Dataase\Eloquent\Relations\HasMany
 */
    public function parts()
    {
        // The foreign key `part.CUSTCODE` has to map to local key `customer.CUSTCODE`
        return $this->hasMany('App\Models\Part', 'CUSTCODE', 'CUSTCODE');
    }    

/**
 * A customer can have many contacts
 * Get the contacts for the customer
 * 
 * @return \Illuminate\Dataase\Eloquent\Relations\HasMany
 */
    public function contacts()
    {
        // The foreign key `contact.customer_id` has to map to local key `customer.CUSTCODE`
        return $this->hasMany('App\Models\Contact', 'customer_id', 'CUSTCODE');
    } 

}
