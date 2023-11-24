<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Drink;
use App\Models\Dish;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Dish::factory()->create([
            'nama_makanan' => 'Smashed Avo',
            'harga_makanan' => '50000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Dish::factory()->create([
            'nama_makanan' => 'Yin Yang Bowl',
            'harga_makanan' => '40000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Dish::factory()->create([
            'nama_makanan' => 'Pancakes',
            'harga_makanan' => '20000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Dish::factory()->create([
            'nama_makanan' => 'Huevos Rancheros',
            'harga_makanan' => '60000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Dish::factory()->create([
            'nama_makanan' => 'SBreankiie Roll',
            'harga_makanan' => '90000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Dish::factory()->create([
            'nama_makanan' => 'Burrito',
            'harga_makanan' => '100000',
            'gambar_makanan' => 'smashed-avo.jpg',
            'deskripsi_makanan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Espresso',
            'harga_minuman' => '20000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Cappucino',
            'harga_minuman' => '30000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Latte',
            'harga_minuman' => '40000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Mocha',
            'harga_minuman' => '50000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Flat White',
            'harga_minuman' => '60000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Long Black',
            'harga_minuman' => '70000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);

        Drink::factory()->create([
            'nama_minuman' => 'Hot Chocolate',
            'harga_minuman' => '80000',
            'gambar_minuman' => 'smashed-avo.jpg',
            'deskripsi_minuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
    }
}
