<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create(['name' => 'Arroz', 'description' => 'Arroz de grão longo']);
        Product::create(['name' => 'Feijão', 'description' => 'Feijão preto']);
    }
}
