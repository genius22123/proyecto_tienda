<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    /* realcion uno a uchos */

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /* relacion muchos a  uchos */
    public function categories()
    {
        return $this->belongsToMany(Category::class);

    }
}
