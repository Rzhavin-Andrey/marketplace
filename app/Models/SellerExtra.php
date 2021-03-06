<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerExtra extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seller_extras';

    //protected $fillable = ['id', 'seller_id'];

    public function seller()
    {
        return $this->belongsTo('App\Models\Seller', 'seller_id')->select(array('id', 'name', 'company_name', 'email', 'prefix', 'use_prefix', 'balance'));
    }

    public $timestamps = false;

}
