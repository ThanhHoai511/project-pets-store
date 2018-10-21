<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DogCategory;
use Illuminate\Support\Facades\DB;

class Dog extends Model
{
	protected $table = 'dogs';
    protected $guarded = ['id'];

    protected $fillable = [
        'name','id_dog_cate','price','birthday','height','weight', 'description','photos','created_at', 'updated_at'
    ];
    public function dogcategory()
    {
    	return $this->belongsTo('App\Models\DogCategory', 'id_dog_cate','id');
    }

    public function getAllDogs($name=null, $category_id=null,$price=null, $begin_date=null, $end_date=null)
    {
        $dogs = Dog::query();
        if($name != null){
            $dogs = $dogs->where('name','like',"%$name%");
        }
        if($category_id != null){
            $dogs = $dogs->where('id_dog_cate',$category_id);
        }
        if($price != null){
            $dogs = $dogs->where('price',$price);
        }
        
        if($begin_date != null){
            $dogs = $dogs->whereDate('created_at',date('Y-m-d', strtotime($begin_date)));
        }
        if($begin_date != null && $end_date != null){
            $dogs = $dogs->whereBetween(DB::raw('DATE(created_at)'), array(date('Y-m-d', strtotime($begin_date)), date('Y-m-d', strtotime($end_date))));
        }
    	return $dogs;
    }

    public function getImage($id)
    {
        $dog = Dog::find($id);
        $images = $dog->photos;
        $imgs = json_decode($images);
        
        return $imgs;
    }
}
