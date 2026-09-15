<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 3 Categories
        $machineCat = Category::create([
            'name' => 'CNC Routers',
            'slug' => 'cnc-routers',
            'type' => 'machine',
            'description' => 'High precision CNC routing machines.',
            'is_active' => true,
        ]);

        $laserCat = Category::create([
            'name' => 'Laser Cutters',
            'slug' => 'laser-cutters',
            'type' => 'machine',
            'description' => 'Advanced laser cutting machines.',
            'is_active' => true,
        ]);

        $spareCat = Category::create([
            'name' => 'Spindle Motors',
            'slug' => 'spindle-motors',
            'type' => 'spare_part',
            'description' => 'High speed spindle motors for CNC.',
            'is_active' => true,
        ]);

        // Create 3 Machines
        Product::create([
            'category_id' => $machineCat->id,
            'type' => 'machine',
            'name' => 'ZR Pro Router 3000',
            'model_number' => 'ZR-PR-3000',
            'slug' => 'zr-pro-router-3000',
            'short_description' => 'Professional 3-axis CNC router for woodworking.',
            'description' => 'The ZR Pro Router 3000 is our flagship CNC routing machine designed for high volume woodworking shops.',
            'key_features' => ['High speed spindle', 'Vacuum table', 'Auto tool changer'],
            'is_featured' => true,
            'is_published' => true,
        ]);

        Product::create([
            'category_id' => $machineCat->id,
            'type' => 'machine',
            'name' => 'ZR Mini Router',
            'model_number' => 'ZR-MR-1000',
            'slug' => 'zr-mini-router',
            'short_description' => 'Compact desktop CNC router.',
            'description' => 'Perfect for hobbyists and small shops needing precise cuts in a small form factor.',
            'key_features' => ['Compact size', 'Easy to use', 'Affordable'],
            'is_featured' => true,
            'is_published' => true,
        ]);

        Product::create([
            'category_id' => $laserCat->id,
            'type' => 'machine',
            'name' => 'ZR Laser Max',
            'model_number' => 'ZR-LM-5000',
            'slug' => 'zr-laser-max',
            'short_description' => 'High power fiber laser for metal cutting.',
            'description' => 'Cut through thick steel and aluminum with ease using our 5kW fiber laser.',
            'key_features' => ['5kW power', 'Fast cutting speed', 'Precision optics'],
            'is_featured' => true,
            'is_published' => true,
        ]);

        // Create 3 Spare Parts
        Product::create([
            'category_id' => $spareCat->id,
            'type' => 'spare_part',
            'name' => '3kW Air Cooled Spindle',
            'model_number' => 'SP-3KW-AC',
            'slug' => '3kw-air-cooled-spindle',
            'short_description' => 'Reliable 3kW air cooled spindle motor.',
            'description' => 'Replacement spindle motor compatible with most standard CNC routers.',
            'key_features' => ['3kW power', 'Air cooled', '24000 RPM max'],
            'is_featured' => true,
            'is_published' => true,
        ]);

        Product::create([
            'category_id' => $spareCat->id,
            'type' => 'spare_part',
            'name' => '4.5kW Water Cooled Spindle',
            'model_number' => 'SP-45KW-WC',
            'slug' => '4-5kw-water-cooled-spindle',
            'short_description' => 'High power water cooled spindle.',
            'description' => 'Designed for heavy duty cutting operations requiring continuous operation.',
            'key_features' => ['4.5kW power', 'Water cooled', 'Quiet operation'],
            'is_featured' => true,
            'is_published' => true,
        ]);

        Product::create([
            'category_id' => $spareCat->id,
            'type' => 'spare_part',
            'name' => 'ER20 Collet Set',
            'model_number' => 'COL-ER20-SET',
            'slug' => 'er20-collet-set',
            'short_description' => 'Complete set of ER20 collets (1mm to 13mm).',
            'description' => 'High precision spring collets for securing end mills in your spindle.',
            'key_features' => ['13 pieces', 'High precision', 'Durable steel'],
            'is_featured' => true,
            'is_published' => true,
        ]);
    }
}
