<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

        protected $fillable=['name','product_id'];
    /* relacion uno a muchos iunversa */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }    

    /* relacion muchos a m,uchos */
    
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
