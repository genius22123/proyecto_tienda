<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 'Celulares y tablets', */
        $subcategories=[
        [
                'category_id'=>1,
                'name'=>'celulares y smarphones',
                'slug'=>Str::slug('celulares y smarphones'),
                'color'=>true
        ],

        /* */
        [
            'category_id'=>1,
            'name'=>'Accesotios para celulares',
            'slug'=>Str::slug('Accesotios para celulares'),
          
    ],
    [
        'category_id'=>1,
        'name'=>'Smartwachs',
        'slug'=>Str::slug('Smartwachs'),
      
    ],

       /* 'Celulares y tablets', */

    [
        'category_id'=>2,
        'name'=>'TV Y AUDIO',
        'slug'=>Str::slug('TV Y AUDIO'),
      
    ],

    [
        'category_id'=>2,
        'name'=>'aUDIOS',
        'slug'=>Str::slug('aUDIOS'),
      
    ],

    
    [
        'category_id'=>2,
        'name'=>'aUDIOS PARA AUTOS',
        'slug'=>Str::slug('aUDIOS PARA AUTOS'),
      
    ],

    /* Consolas y video juegos */

    [
        'category_id'=>3,
        'name'=>'XBOX',
        'slug'=>Str::slug('XBOX'),
      
    ],

    [
        'category_id'=>3,
        'name'=>'PLAY STATION',
        'slug'=>Str::slug('PLAY STATION'),
      
    ],
    [
        'category_id'=>3,
        'name'=>'Video jugos para pc',
        'slug'=>Str::slug('Video jugos para pc'),
      
    ],
    [
        'category_id'=>3,
        'name'=>'mintendo',
        'slug'=>Str::slug('mintendo'),
      
    ],

    /* Computacion */
    [
        'category_id'=>4,
        'name'=>'portatiles',
        'slug'=>Str::slug('portatiles'),
      
    ],
    [
        'category_id'=>4,
        'name'=>'pc de escritorio',
        'slug'=>Str::slug('pc de escritorio'),
      
    ],
    [
        'category_id'=>4,
        'name'=>'Almacenamiento',
        'slug'=>Str::slug('Almacenamiento'),
      
    ],
    [
        'category_id'=>4,
        'name'=>'accesorios pc',
        'slug'=>Str::slug('accesorios pc'),
      
    ],

    /* moda */
    [
        'category_id'=>5,
        'name'=>'Mujeres',
        'slug'=>Str::slug('accesorios pc'),
        'color'=>true,
        'size'=>true
      
    ],
    [
        'category_id'=>5,
        'name'=>'Hombres',
        'slug'=>Str::slug('accesorios pc'),
        'color'=>true,
        'size'=>true
      
    ],
    [
        'category_id'=>5,
        'name'=>'Lentes',
        'slug'=>Str::slug('accesorios pc'),
      
    ],
    [
        'category_id'=>5,
        'name'=>'relojes',
        'slug'=>Str::slug('accesorios pc'),
      
    ],


        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }



    }
}
