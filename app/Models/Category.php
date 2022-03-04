<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable=['name','slug','image','icon'];

    /* realcion uno a muchos */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    /* relacion muchos a muchpos */
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    /*  */
    public function products()
    {
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }

    /* url amigabke */
    public function getRouteKeyName ()
    {
        return 'slug';
    }
}
