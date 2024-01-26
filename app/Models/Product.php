<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categorie_id',
        'summary',
        'description',
        'photo',
        'condition',
        'status',
        'price',
        'discount'

    ];


    public function cat_info(){
        return $this->hasOne('App\Models\Categorie','id','categorie_id');
    }
    public static function getAllProduct(){
        return Product::with(['cat_info'])->orderBy('id','desc')->paginate(10);
    }

    public function cat_infoget(){
        return $this->hasOne('App\Models\Categorie','id','categorie_id');
    }
    public static function getAllProduct1($id){
        // return Product::with(['cat_infoget'])->orderBy($id,'desc')->paginate(10);
        return Product::where('categorie_id',$id)->get();
    }
}
