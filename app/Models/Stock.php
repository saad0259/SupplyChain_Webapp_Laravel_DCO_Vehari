<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable=[   ///// Use this to allow mass assignment
        'subitem_id',
        'dealer_id',
        'available_stock',
        'receive_quantity',
        'receive_at',
        'sold_quantity',
        'sold_at',
        'gov_price',
        'unit_id',
        'date'
    ];


    public function getAvailablestockAttribute($val){

        return round($val);

    }
    

    public function getReceivequantityAttribute($val){

        return round($val);

    }
    
    public function getReceiveatAttribute($val){

        return round($val);

    }

    public function getSoldquantityAttribute($val){

        return round($val);

    }

    public function getSoldatAttribute($val){

        return round($val);

    }

    public function getGovpriceAttribute($val){

        return round($val);

    }



    public function dealer(){

        return $this->belongsTo('App\Models\Dealer');
        
    }

    public function subitem(){

        return $this->belongsTo('App\Models\Subitem');
        
    }
    public function Unit(){

        return $this->belongsTo('App\Models\Unit');
        
    }

}
