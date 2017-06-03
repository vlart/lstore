<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagePath' => 'images/prod/Antique-Syrian-Inlaid-Card-Games-Table.jpg',
            'title' => 'Antique Syrian table',
            'price' => 120,
            'like_count' => 22
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/desklamp.jpg',
            'title' => 'Steampunk desklamp',
            'price' => 55,
            'like_count' => 24
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/Garden-Furniture-Patio-Set-table.jpg',
            'title' => 'Garden set',
            'price' => 200,
            'like_count' => 17
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/Leather-Journal-Handmade.jpg',
            'title' => 'Leather journal',
            'price' => 43,
            'like_count' => 11
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/wooden-rack.jpg',
            'title' => 'Wooden rack',
            'price' => 17,
            'like_count' => 78
        ]);
        $product->save();


        $product = new Product([
            'imagePath' => 'images/prod/jewelery1.jpg',
            'title' => 'Crearstone jewelery',
            'price' => 29,
            'like_count' => 26
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/leatherstrap.jpg',
            'title' => 'Leather watch strap',
            'price' => 14,
            'like_count' => 90
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/jewelery3.jpg',
            'title' => 'Perl earings',
            'price' => 20,
            'like_count' => 33
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/towel-template-large.jpg',
            'title' => 'Shower carpet large',
            'price' => 23,
            'like_count' => 82
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/circlelamp1.jpg',
            'title' => 'Circle metal lamp',
            'price' => 27,
            'like_count' => 19
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/greenstone-earings.jpg',
            'title' => 'Greenstone earings',
            'price' => 13,
            'like_count' => 108
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/handmade-bag.jpg',
            'title' => 'Mesh bag',
            'price' => 18,
            'like_count' => 46
        ]);
        $product->save();

    }
}
