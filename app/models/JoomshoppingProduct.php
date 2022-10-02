<?php

namespace Wegas\Models;
use Illuminate\Database\Eloquent\Model;

class JoomshoppingProduct extends Model
{

    protected $table = 'jshopping_products';
    protected $primaryKey = 'product_id';
	public $timestamps = false;

    public static $extraFields;

    const CREATED_AT = 'product_date_added';
    const UPDATED_AT = 'date_modify';

}
