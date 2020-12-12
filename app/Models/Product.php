<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * @var string
     */
    protected $table='products';
    protected $fillable=['name','price','photo','description','created_by','category_id'];



    public function user(){
        return $this->hasMany('App\Models\User','id','created_by');
    }

}
