<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categories=[
              [
                  'name'=>'Celulares y tablets',
                  'slug'=>Str::slug('Celulares y tablets'),
                  'icon'=>'bi bi-phone'
              ],
              [
                'name'=>'TV, Audio y video',
                'slug'=>Str::slug('TV, Audio y video'),
                'icon'=>'bi bi-tv'
              ],
            [
                'name'=>'Consolas y video juegos',
                'slug'=>Str::slug('Consolas y video juegos'),
                'icon'=>'bi bi-controller'
            ],
            [
                'name'=>'Computacion',
                'slug'=>Str::slug('Computacion'),
                'icon'=>'bi bi-laptop'
            ],
            [
                'name'=>'Moda',
                'slug'=>Str::slug('Moda'),
                'icon'=>'bi bi-watch'
            ]
        ];

        foreach($categories as $category){
           $category=Category::factory(1)->create($category)->first();

          $brands = Brand::factory(4)->create();

          foreach ($brands as $brand ) {
             $brand->categories()->attach($category->id);
          }
        }
    }
}
