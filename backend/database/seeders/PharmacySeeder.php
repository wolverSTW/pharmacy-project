<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharmacySeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Categories First
        $categories = [
            ['name' => 'Painkillers', 'slug' => 'painkillers'],
            ['name' => 'Antibiotics', 'slug' => 'antibiotics'],
            ['name' => 'Vitamins', 'slug' => 'vitamins'],
            ['name' => 'Antacids', 'slug' => 'antacids'],
            ['name' => 'Cough & Cold', 'slug' => 'cough-cold'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        // 2. Fetch Category IDs to link with Medicines
        $painkillersId = Category::where('slug', 'painkillers')->first()->id;
        $antibioticsId = Category::where('slug', 'antibiotics')->first()->id;
        $vitaminsId = Category::where('slug', 'vitamins')->first()->id;
        $antacidsId = Category::where('slug', 'antacids')->first()->id;

        // 3. Create Medicines linked to those Categories
        $medicines = [
            [
                'category_id' => $painkillersId,
                'name' => 'Biogesic',
                'generic_name' => 'Paracetamol',
                'sku' => 'MED-001',
                'buying_price' => 1200,
                'price' => 1500,
                'stock_quantity' => 50,
                'expiry_date' => '2027-12-31',
            ],
            [
                'category_id' => $antibioticsId,
                'name' => 'Amoxicillin',
                'generic_name' => 'Amoxicillin',
                'sku' => 'MED-002',
                'buying_price' => 3500,
                'price' => 4500,
                'stock_quantity' => 20,
                'expiry_date' => '2026-06-15',
            ],
            [
                'category_id' => $vitaminsId,
                'name' => 'Enervon-C',
                'generic_name' => 'Multivitamins',
                'sku' => 'MED-003',
                'buying_price' => 4000,
                'price' => 5000,
                'stock_quantity' => 15,
                'expiry_date' => '2028-01-10',
            ],
            [
                'category_id' => $antacidsId,
                'name' => 'Gaviscon',
                'generic_name' => 'Sodium Alginate',
                'sku' => 'MED-004',
                'buying_price' => 7000,
                'price' => 8500,
                'stock_quantity' => 30,
                'expiry_date' => '2027-05-20',
            ],
        ];

        foreach ($medicines as $med) {
            Medicine::updateOrCreate(['sku' => $med['sku']], $med);
        }
    }
}