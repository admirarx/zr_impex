<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            // Machine Categories
            [
                'name' => '1325 CNC Routers',
                'slug' => '1325-cnc-routers',
                'type' => 'machine',
                'description' => 'Standard industrial 4x8 ft bed CNC router machines designed for heavy-duty woodworking, MDF, acrylic, and non-ferrous metal cutting.',
                'image_path' => 'images/categories/cnc-router.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Multi-Head 3D Carving CNC',
                'slug' => 'multi-head-3d-carving-cnc',
                'type' => 'machine',
                'description' => 'Multi-spindle synchronous CNC router machines for mass-production furniture carving, 3D relief work, and cylindrical rotary turning.',
                'image_path' => 'images/categories/multi-head.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Heavy Stone & Granite CNC',
                'slug' => 'heavy-stone-granite-cnc',
                'type' => 'machine',
                'description' => 'Reinforced bed CNC routers with stainless steel water sink, specialized for granite, marble, tombstone, and ceramic tile carving.',
                'image_path' => 'images/categories/stone-cnc.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Fiber Laser Sheet Cutting',
                'slug' => 'fiber-laser-sheet-cutting',
                'type' => 'machine',
                'description' => 'High-precision industrial fiber laser machines for clean cutting of stainless steel, carbon steel, aluminum, and brass sheets.',
                'image_path' => 'images/categories/fiber-laser.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'CO2 Laser Engraving & Cutting',
                'slug' => 'co2-laser-engraving-cutting',
                'type' => 'machine',
                'description' => 'Precision CO2 laser systems for intricate acrylic cutting, fabric design, leather crafts, and wood engraving.',
                'image_path' => 'images/categories/co2-laser.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Fiber Laser Metal Marking',
                'slug' => 'fiber-laser-metal-marking',
                'type' => 'machine',
                'description' => 'High-speed desktop and integrated MOPA fiber laser marking machines for metals, tool steel, jewelry, and barcodes.',
                'image_path' => 'images/categories/fiber-laser.jpg',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Multi-Axis Machining Centers',
                'slug' => 'multi-axis-machining-centers',
                'type' => 'machine',
                'description' => '4-Axis and 5-Axis simultaneous CNC gantry centers for aerospace tooling, automotive styling, and complex composite molds.',
                'image_path' => 'images/categories/multi-head.jpg',
                'sort_order' => 7,
                'is_active' => true,
            ],

            // Spare Part Categories
            [
                'name' => 'Spindles & Motors',
                'slug' => 'spindles-and-motors',
                'type' => 'spare_part',
                'description' => 'High-speed air-cooled and water-cooled electric spindles from top brands (HQD, GDZ, HSD) with ER collet holders.',
                'image_path' => 'images/categories/spindles.jpg',
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Drivers & Stepper Motors',
                'slug' => 'drivers-and-steppers',
                'type' => 'spare_part',
                'description' => 'Leadshine digital stepper drivers, hybrid easy-servo systems, and AC servo motors with matched cables.',
                'image_path' => 'images/categories/drivers.jpg',
                'sort_order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Frequency Inverters (VFD)',
                'slug' => 'frequency-inverters-vfd',
                'type' => 'spare_part',
                'description' => 'Heavy-duty vector frequency inverters from Fuling, Delta, and Best for smooth spindle torque control.',
                'image_path' => 'images/categories/inverters.jpg',
                'sort_order' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Linear Guide Rails & Blocks',
                'slug' => 'linear-guide-rails-and-blocks',
                'type' => 'spare_part',
                'description' => 'Genuine Hiwin, PMI, and TBI motion rails, linear bearing runner blocks, and helical rack-and-pinion gears.',
                'image_path' => 'images/categories/rails.jpg',
                'sort_order' => 13,
                'is_active' => true,
            ],
            [
                'name' => 'CNC Bits & Carbide Tooling',
                'slug' => 'cnc-bits-and-carbide-tooling',
                'type' => 'spare_part',
                'description' => 'Micro-grain solid carbide spiral upcut/downcut bits, ball nose cutters, V-groove bits, and diamond PCD tools.',
                'image_path' => 'images/categories/tooling.jpg',
                'sort_order' => 14,
                'is_active' => true,
            ],
            [
                'name' => 'DSP Controllers & Electronics',
                'slug' => 'dsp-controllers-and-electronics',
                'type' => 'spare_part',
                'description' => 'RichAuto DSP handheld controllers (A11, A18), NcStudio breakout boards, proximity sensors, and power supplies.',
                'image_path' => 'images/categories/controllers.jpg',
                'sort_order' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Laser Optics & Nozzles',
                'slug' => 'laser-optics-and-nozzles',
                'type' => 'spare_part',
                'description' => 'Certified OEM Raytools laser cutting nozzles, F-Theta scan lenses, and high-damage threshold quartz protective windows.',
                'image_path' => 'images/categories/optics.jpg',
                'sort_order' => 16,
                'is_active' => true,
            ],
            [
                'name' => 'Industrial Water Chillers',
                'slug' => 'industrial-water-chillers',
                'type' => 'spare_part',
                'description' => 'Genuine S&A Teyu dual-temperature refrigeration water chillers for fiber laser sources, cutting heads, and CNC spindles.',
                'image_path' => 'images/categories/chillers.jpg',
                'sort_order' => 17,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $data) {
            Category::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
