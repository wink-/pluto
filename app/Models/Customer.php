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
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CUSTCODE', 'CUSTNAME', 'ADDRESS1', 'ADDRESS2', 'ADDRESS3',
    'CITY', 'STATE', 'ZIP', 'SHIPTO', 'destination_id', 'SHIPVIA', 'carrier_id',
    'DEFFREIGHT', 'CONTACT1', 'PHONE1', 'EXTENSION1', 'CONTACT2', 'PHONE2',
    'EXTENSION2', 'FAX', 'EMAIL', 'COD', 'TAXIDEN', 'REMARKS'];

}
