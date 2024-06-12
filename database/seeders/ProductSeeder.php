<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Product;
use app\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            'Eletrônicos' => [
                ['name' => 'Smartphone', 'description' => 'Celular com câmera de alta resolução', 'price' => 1200.00, 'quantity' => 10],
                ['name' => 'Notebook', 'description' => 'Notebook leve e potente', 'price' => 3500.00, 'quantity' => 5],
            ],
            'Moda e Acessórios' => [
                ['name' => 'Camiseta', 'description' => 'Camiseta de algodão confortável', 'price' => 50.00, 'quantity' => 20],
                ['name' => 'Relógio', 'description' => 'Relógio elegante e moderno', 'price' => 200.00, 'quantity' => 15],
            ],
            'Casa e Decoração' => [
                ['name' => 'Almofada', 'description' => 'Almofada macia e confortável', 'price' => 30.00, 'quantity' => 30],
                ['name' => 'Luminária', 'description' => 'Luminária de design moderno', 'price' => 80.00, 'quantity' => 10],
            ],
            // ... adicione produtos para as outras categorias ...
        ];

        foreach ($categorias as $categoriaNome => $produtos) {
            $categoria = Category::firstOrCreate(['name' => $categoriaNome]);

            foreach ($produtos as $produto) {
                $categoria->products()->create($produto);
            }
        }
    }
}
