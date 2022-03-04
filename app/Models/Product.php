<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Product extends Model
{
    use HasFactory;

    const BORRADOR=1;
    const PUBLICADO=2;

    protected $guarded=['id','create_at','updated_at'];

    /* relacion uno a muchos */

    public Function sizes(){
        return $this->hasMany(Size::class);
    }

    /*relacion uno a muchos inversa  */

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    /* relacion muchos a muchos */

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    /* relacion uno a juchos polimoprficA */

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }


    
}
