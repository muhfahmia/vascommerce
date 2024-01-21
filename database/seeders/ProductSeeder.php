<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://dummyjson.com/products');
        if ($response->ok()) {
            $products = $response['products'];
            $numActive = 0;
            for ($i=0; $i < count($products); $i++) { 
                $numActive++;
                $status = ($numActive <= 15) ? 'Active' : 'Not Actve' ;
                $product = $products[$i];
                $createProduct = Product::create([
                    'name'      => $product['title'],
                    'price'     => $product['price'] * 15619,
                    'imagePath' => $product['thumbnail'],
                    'type'      => ucwords($product['category']),
                    'status'    => $status
                ]);
            }
        }
        
    }
}
