<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $cat1325 = Category::where('slug', '1325-cnc-routers')->first();
        $catMultiHead = Category::where('slug', 'multi-head-3d-carving-cnc')->first();
        $catStone = Category::where('slug', 'heavy-stone-granite-cnc')->first();
        $catFiber = Category::where('slug', 'fiber-laser-sheet-cutting')->first();
        $catCo2 = Category::where('slug', 'co2-laser-engraving-cutting')->first();
        $catMarking = Category::where('slug', 'fiber-laser-metal-marking')->first();
        $catMultiAxis = Category::where('slug', 'multi-axis-machining-centers')->first();

        $catSpindles = Category::where('slug', 'spindles-and-motors')->first();
        $catDrivers = Category::where('slug', 'drivers-and-steppers')->first();
        $catInverters = Category::where('slug', 'frequency-inverters-vfd')->first();
        $catRails = Category::where('slug', 'linear-guide-rails-and-blocks')->first();
        $catTooling = Category::where('slug', 'cnc-bits-and-carbide-tooling')->first();
        $catControllers = Category::where('slug', 'dsp-controllers-and-electronics')->first();

        // 1. MACHINES
        $machines = [
            [
                'category_id' => $cat1325?->id,
                'type' => 'machine',
                'name' => 'Industrial Heavy-Duty 1325 CNC Wood Router Machine',
                'model_number' => 'ZR-1325-PRO',
                'slug' => 'zr-1325-industrial-cnc-wood-router',
                'short_description' => 'Flagship 4x8 ft heavy-bed CNC router engineered for high-speed cutting, 2D/3D carving in solid wood, MDF, acrylic, aluminum composite panel (ACP), and PVC boards.',
                'description' => '<h3>Engineered for Continuous Industrial Fabrication</h3><p>The ZR-1325-PRO represents our gold-standard 3-axis CNC router built upon a stress-relieved heavy structural steel tube bed. Vibration-free operation is guaranteed even under high-feed cutting regimes. Fitted with an authentic 3.5 kW / 4.5 kW HQD air-cooled spindle and genuine Hiwin 20mm square linear guide rails, it delivers ultra-smooth surface finishes on complex furniture components and signage panels.</p><h4>Key Features & Engineering Highlights:</h4><ul><li>Thick-walled seamless welded steel gantry and bed annealed at 600°C for zero thermal distortion.</li><li>T-slot composite vacuum suction bed with high-power vacuum pump zones.</li><li>German helical rack and pinion drive on X and Y axes for exceptional positioning repeatability (±0.025mm).</li><li>Dust-proof enclosure on Z-axis ball screw and guide rails ensuring longevity in heavy woodworking dust environments.</li><li>Handheld RichAuto DSP A11 control system with offline USB execution and power-loss recovery.</li></ul>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBWKB9xFhikrWlcviy22VwnDLHZgk-GdUwZNVVaR0Tl7r9_cgpJn8sVimdW4kixVIK4Zl5ZyjihFNDi_tFBf0oNWjxJC-ijF59Q2XsnavFbsDTM-FikkUHVGHBuO2X_FUhJi4SOf1CQacDlFDBltRweE6lH042RJGzfj3NJ3QqekyQ1ymbAl2lMaAt7XQWkFhvJaEZVWNKe1Bjy5yB9770Yxdnc0I1paMI_YFMCq8o9u-MOwV-opm1V',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 1,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Working Size (X * Y * Z)', 'spec_value' => '1300 x 2500 x 200 mm (4 x 8 Feet)', 'sort_order' => 1],
                    ['spec_group' => 'Working Area', 'spec_name' => 'Table Structure', 'spec_value' => 'T-Slot Dual-Use Vacuum Bed with 5.5KW Pump', 'sort_order' => 2],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Spindle Power', 'spec_value' => '3.5 KW / 4.5 KW HQD High-Speed Air Cooled', 'sort_order' => 3],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Spindle Speed', 'spec_value' => '6,000 - 18,000 RPM (Variable Frequency)', 'sort_order' => 4],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Collet Size', 'spec_value' => 'ER25 / ER32 (Clamping 3mm - 20mm)', 'sort_order' => 5],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Transmission System', 'spec_value' => 'X/Y Helical Rack & Pinion, Z Taiwan TBI Ball Screw', 'sort_order' => 6],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Guide Rails', 'spec_value' => 'Taiwan Hiwin 20mm Heavy Square Linear Rails', 'sort_order' => 7],
                    ['spec_group' => 'Drive & Motor', 'spec_name' => 'Drive Motors & System', 'spec_value' => 'Leadshine 860H High-Torque Stepper / Easy Servo System', 'sort_order' => 8],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Control System', 'spec_value' => 'RichAuto DSP A11 Handheld 3-Axis Controller (USB)', 'sort_order' => 9],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Frequency Inverter', 'spec_value' => '3.7 KW Fuling Heavy-Duty Vector VFD', 'sort_order' => 10],
                    ['spec_group' => 'Performance & Power', 'spec_name' => 'Repositioning Accuracy', 'spec_value' => '±0.025 mm', 'sort_order' => 11],
                    ['spec_group' => 'Performance & Power', 'spec_name' => 'Operating Voltage', 'spec_value' => '380V 3-Phase 50Hz (220V Single-Phase Optional)', 'sort_order' => 12],
                    ['spec_group' => 'Performance & Power', 'spec_name' => 'Total Machine Weight', 'spec_value' => 'Approx. 1,250 kg', 'sort_order' => 13],
                ],
            ],
            [
                'category_id' => $catStone?->id,
                'type' => 'machine',
                'name' => 'Heavy Stone & Granite CNC Router Machine',
                'model_number' => 'ZR-2030-STONE',
                'slug' => 'zr-2030-heavy-stone-granite-cnc-router',
                'short_description' => 'Reinforced structural bed CNC machine equipped with dual water cooling and stainless steel recycling sink, tailored for granite, marble, tombstone, and quartz slab engraving.',
                'description' => '<h3>Designed for Massive Stone Slabs and Continuous Slurry Contact</h3><p>Fabricated specifically for monument makers, temple stone artisans, and interior quartz countertop manufacturers. The ZR-2030-STONE features a reinforced cast-iron bed with an oversized 2000 x 3000 mm working envelope capable of supporting stone blocks exceeding 2.5 tonnes. A 304-grade stainless steel fluid recirculation trough and bidirectional misting nozzles safeguard diamond PCD cutters while flushing abrasive stone slurry away from sensitive mechanical slideways.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDQ4e4yXBvA1gQ7cWdK3UM7SE3on-za-zPwHlm_1_cwOeMjYteoaA3bCGj7wUPEHcnIzfw__JoLEecLDxwyw2QuAbSiMfrMNnI4sxfqieoTau4i6rvdVs9kzeoWIPtYguqz-DkePfiKi4K91shZErgYgX3jkKJn-4ha_WdoXfaY3mybHZj134hgk8Hwl5X00cMlJgIh3EW1sDTJLS94l_wxKfFz288lxRvf3I_o6vzElXqltwd_kjR_',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 2,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Working Dimensions', 'spec_value' => '2000 x 3000 x 350 mm', 'sort_order' => 1],
                    ['spec_group' => 'Working Area', 'spec_name' => 'Bed Construction', 'spec_value' => 'Heavy Cast-Iron Bed with 304 Stainless Sink & Roller Loaders', 'sort_order' => 2],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Spindle Power', 'spec_value' => '5.5 KW / 7.5 KW Constant Torque Water-Cooled Spindle', 'sort_order' => 3],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Cooling System', 'spec_value' => 'Dual Automatic Water Circulation & Misting Spray', 'sort_order' => 4],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Guide Rails', 'spec_value' => 'Hiwin 25mm Heavy Duty Flange Linear Rails', 'sort_order' => 5],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Motors', 'spec_value' => 'Yaskawa / Leadshine Hybrid Servo Motors & Reducers', 'sort_order' => 6],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Control System', 'spec_value' => 'Weihong NcStudio 53C / Handheld DSP A18', 'sort_order' => 7],
                    ['spec_group' => 'Performance & Power', 'spec_name' => 'Total Machine Weight', 'spec_value' => 'Approx. 2,600 kg', 'sort_order' => 8],
                ],
            ],
            [
                'category_id' => $catFiber?->id,
                'type' => 'machine',
                'name' => 'Fiber Laser Metal Sheet Cutting Machine',
                'model_number' => 'ZR-1530-FL',
                'slug' => 'zr-1530-fiber-laser-metal-cutting-machine',
                'short_description' => 'Precision CNC fiber laser machine with 1.5KW - 3KW laser source, raytools auto-focus cutting head, and Cypcut CNC control for burr-free sheet metal cutting.',
                'description' => '<h3>High-Speed Sheet Metal Cutting with Micrometric Precision</h3><p>The ZR-1530-FL is the ultimate solution for stainless steel, carbon steel, galvanized sheet, brass, and aluminum fabrication. Combining high-efficiency fiber laser sources with an aviation-grade extruded aluminum gantry, it achieves rapid traverse acceleration of up to 1.2G with clean dross-free cuts.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCkTHkTUv5Y6OtNcqkV5AJMUiXKUJ8iQ1K43gyS0X2gJPdIU645xWn2TKl96imt6qCwrLFIcUm52y9IAkxQB7z200LdA0aTGznWqrMluLHsmNc8wAcPRhBH1qN4xMXKUR2yw29-1MjMnAXaI6CX8lRFXMXeNcsCfQfEBp0jIxWqiBNCNSjbv_i229YFZjzWvxaJF5Zqjje-ZO1yRY4jBgKWOnEZ0ii4wWXw4R-TCwVblgt7N7OQ7uEN',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 3,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Working Area (X * Y)', 'spec_value' => '1500 x 3000 mm (5 x 10 Feet)', 'sort_order' => 1],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Laser Source Option', 'spec_value' => '1500W / 2000W / 3000W Raycus / Max Fiber Source', 'sort_order' => 2],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Cutting Head', 'spec_value' => 'Raytools Auto-Focus BM110 Laser Cutting Head', 'sort_order' => 3],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Drive System', 'spec_value' => 'Fuji / Yaskawa AC Servo Motors with Shimpo Reducer', 'sort_order' => 4],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'CNC Software', 'spec_value' => 'BoChu CypCut CNC Laser Cutting Software (English)', 'sort_order' => 5],
                    ['spec_group' => 'Cutting Capacity', 'spec_name' => 'Carbon Steel Max Depth', 'spec_value' => 'Up to 20mm (at 3KW)', 'sort_order' => 6],
                    ['spec_group' => 'Cutting Capacity', 'spec_name' => 'Stainless Steel Max Depth', 'spec_value' => 'Up to 10mm (at 3KW)', 'sort_order' => 7],
                ],
            ],
            [
                'category_id' => $catMultiHead?->id,
                'type' => 'machine',
                'name' => 'Multi-Spindle 4-Head 3D Wood Carving CNC Router',
                'model_number' => 'ZR-4H-1325',
                'slug' => 'zr-4h-1325-multi-spindle-3d-carving-cnc',
                'short_description' => 'Multi-spindle synchronous CNC router equipped with 4 independent or coupled spindles for 4x manufacturing output on chair legs, bed pillars, and decorative reliefs.',
                'description' => '<h3>Quadruple Your Daily Production Output</h3><p>Designed for large furniture manufacturers, door panel producers, and wooden handicraft exporters. 4 cutting heads operate simultaneously to reproduce four identical components in the time normally required for one. Each spindle can be adjusted along the gantry beam or operated independently.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBWKB9xFhikrWlcviy22VwnDLHZgk-GdUwZNVVaR0Tl7r9_cgpJn8sVimdW4kixVIK4Zl5ZyjihFNDi_tFBf0oNWjxJC-ijF59Q2XsnavFbsDTM-FikkUHVGHBuO2X_FUhJi4SOf1CQacDlFDBltRweE6lH042RJGzfj3NJ3QqekyQ1ymbAl2lMaAt7XQWkFhvJaEZVWNKe1Bjy5yB9770Yxdnc0I1paMI_YFMCq8o9u-MOwV-opm1V',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 4,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Total Working Area', 'spec_value' => '1300 x 2500 x 300 mm', 'sort_order' => 1],
                    ['spec_group' => 'Working Area', 'spec_name' => 'Per Head Working Width', 'spec_value' => '300 mm x 2500 mm (All 4 Active)', 'sort_order' => 2],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Spindle Configuration', 'spec_value' => '4x 2.2 KW HQD Water Cooled Spindles (24,000 RPM)', 'sort_order' => 3],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Controller', 'spec_value' => 'RichAuto DSP Handheld Multi-Spindle Controller', 'sort_order' => 4],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Motion System', 'spec_value' => 'Hiwin 25mm Linear Rails + Planetary Gearbox', 'sort_order' => 5],
                ],
            ],
            [
                'category_id' => $catCo2?->id,
                'type' => 'machine',
                'name' => 'Industrial CO2 Laser Cutting & Engraving Machine',
                'model_number' => 'ZR-1390-CO2',
                'slug' => 'zr-1390-co2-laser-cutting-engraving-machine',
                'short_description' => 'High-accuracy 1300x900 mm CO2 laser system with Reci 100W/130W laser tube and Ruida controller for acrylic, leather, MDF, fabric, and rubber stamp crafting.',
                'description' => '<h3>Crystal-Clear Acrylic Edges and Intricate Laser Engravings</h3><p>The ZR-1390-CO2 delivers flame-polished acrylic cutting edges with zero secondary finishing required. Equipped with industrial honey-comb and knife-blade dual beds, red dot pointer alignment, and digital temperature-controlled industrial water chiller.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAkBXWxx_lSq0EB-EgGXjfJb4Zr010ZG5g8yi_UH_Dk-_KqJ1frXSupVOsTUFAzA1nKqk4cW9QDr03CoAbiQDx5X1IpllUb6soDdVaIBfAWJgoh1eUm_rODitVF4oYN7uMG2toiJUZZ1ULqJ8F1T0vuXT6jrzotZBI6C8vDR4uaAMkWlv6VOWH1UkU7Gj_URZxDoCA7BFp0QS4YXsF49R3y_sxdzRRZdEV5VqPK8n2eDQ0OqIUpdrjr',
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 5,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Working Dimensions', 'spec_value' => '1300 x 900 mm', 'sort_order' => 1],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Laser Tube Power', 'spec_value' => '100W / 130W RECI W4 Sealed CO2 Glass Tube', 'sort_order' => 2],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Chiller System', 'spec_value' => 'S&A CW-5000 / CW-5200 Refrigeration Water Chiller', 'sort_order' => 3],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Control System', 'spec_value' => 'Ruida 6442G / 6445G DSP Color Screen Controller', 'sort_order' => 4],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Stepper Motors', 'spec_value' => 'Leadshine 573S15 3-Phase High-Speed Steppers', 'sort_order' => 5],
                ],
            ],
            [
                'category_id' => $catMarking?->id,
                'type' => 'machine',
                'name' => 'LASER Fiber Metal Marking Machine',
                'model_number' => 'ZR-FLM-50W',
                'slug' => 'laser-fiber-metal-marking-machine',
                'short_description' => 'High-speed 30W/50W fiber laser marker equipped with Sino-Galvo scanner head, MOPA/Q-switch source, EzCAD software, and rotary axis for stainless steel, brass, titanium, and polymers.',
                'description' => '<h3>High-Speed Direct Part Marking & Color Engraving</h3><p>The ZR-FLM series fiber laser marking machine represents the benchmark for industrial traceability, UID serial marking, and deep metal relief engraving. Integrated with a solid-state maintenance-free Raycus / MAX fiber laser generator rated for over 100,000 continuous operating hours, this workstation produces sharp high-contrast marks on stainless steel, hardened carbon steel, anodized aluminum, brass, copper, and engineering plastics.</p><h4>Key Engineering Advantages:</h4><ul><li>High-speed Sino-Galvo digital scanning mirrors reaching linear vector velocities of up to 9,000 mm/sec.</li><li>Dual red focus-finder targeting beams enabling instant, tool-free millimeter focal calibration.</li><li>BJJCZ EzCAD industrial DSP controller with vector graphics import (DXF, AI, PLT, BMP, SVG) and dynamic barcode/QR serialization.</li><li>Included D80 chuck-type motorized rotary axis for cylindrical bar, pipe, and flask engraving.</li><li>Low power consumption (&lt;650W) and completely air-cooled with no external chiller required.</li></ul>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAzh6xXG-3gwR-m95Kl64Z0KFx-WKfXQRE7OpOk_WDz-XhEBljCzRwPbjrAivJ34JEFeYP3_II-8MEMs4oEuipy7eKbOFbLUzkGLZj-Lm0dUwgrCy3JauR6fCnb-IMqVCXoVvbcdR5CyeVt3aempDfLwUyy8a78xhLH6iNL_tuqImiwvnDXRexRGG65kegzduT-uRLjvhAuzjASJ6ZY3VXJDCenxESNhYs128gT5oo1NSJ47FwPk4Gc',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 6,
                'specs' => [
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Laser Power Class', 'spec_value' => '30W / 50W Raycus / MAX Q-Switched or JPT MOPA', 'sort_order' => 1],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Laser Wavelength', 'spec_value' => '1064 ± 5 nm', 'sort_order' => 2],
                    ['spec_group' => 'Working Area', 'spec_name' => 'Standard Marking Field', 'spec_value' => '110 × 110 mm / 200 × 200 mm (Up to 300 × 300 mm)', 'sort_order' => 3],
                    ['spec_group' => 'Performance', 'spec_name' => 'Max Marking Speed', 'spec_value' => '7,000 – 9,000 mm/second', 'sort_order' => 4],
                    ['spec_group' => 'Performance', 'spec_name' => 'Repetition Accuracy', 'spec_value' => '± 0.002 mm', 'sort_order' => 5],
                    ['spec_group' => 'Performance', 'spec_name' => 'Min Line Width / Character', 'spec_value' => '0.01 mm / 0.15 mm', 'sort_order' => 6],
                    ['spec_group' => 'Control & Software', 'spec_name' => 'Control System & Board', 'spec_value' => 'BJJCZ USB EzCAD Motherboard (Win 10/11 64-bit)', 'sort_order' => 7],
                    ['spec_group' => 'Cooling & Power', 'spec_name' => 'Cooling Method', 'spec_value' => 'Forced Clean Air-Cooled (Dual Centrifugal Fans)', 'sort_order' => 8],
                    ['spec_group' => 'Cooling & Power', 'spec_name' => 'Operating Voltage', 'spec_value' => '220V Single-Phase 50/60 Hz (<650W Total Draw)', 'sort_order' => 9],
                ],
            ],
            [
                'category_id' => $catFiber?->id,
                'type' => 'machine',
                'name' => 'ZR-FSC-6000 Dual-Bed Metal Sheet Laser 6kW / 12kW',
                'model_number' => 'ZR-FSC-6000',
                'slug' => 'zr-fsc-6000-dual-bed-metal-sheet-laser',
                'short_description' => 'Full-protection enclosed fiber laser with dual pallet exchange in 15 seconds. Optimized for rapid piercing of 25mm mild steel and 16mm stainless plate with zero burr.',
                'description' => '<h3>High-Power Industrial Fiber Sheet Cutting with Automatic Pallet Shuttle</h3><p>The ZR-FSC-6000 is engineered for mass production sheet metal fabrication shops demanding continuous uncompromised cutting uptime. Featuring an automated hydraulic dual-table pallet exchanger that cycles in under 15 seconds, the machine allows operators to unload cut parts and reload raw sheets while cutting proceeds non-stop inside the CE-compliant Class 4 laser safety cabin.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCkTHkTUv5Y6OtNcqkV5AJMUiXKUJ8iQ1K43gyS0X2gJPdIU645xWn2TKl96imt6qCwrLFIcUm52y9IAkxQB7z200LdA0aTGznWqrMluLHsmNc8wAcPRhBH1qN4xMXKUR2yw29-1MjMnAXaI6CX8lRFXMXeNcsCfQfEBp0jIxWqiBNCNSjbv_i229YFZjzWvxaJF5Zqjje-ZO1yRY4jBgKWOnEZ0ii4wWXw4R-TCwVblgt7N7OQ7uEN',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 7,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'Cutting Table Envelope', 'spec_value' => '1500 × 3000 mm Dual Hydraulic Shuttle Pallet', 'sort_order' => 1],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Laser Resonator', 'spec_value' => '6000W / 12000W Raycus / Max Photonics', 'sort_order' => 2],
                    ['spec_group' => 'Laser & Optics', 'spec_name' => 'Auto-Focus Laser Head', 'spec_value' => 'Raytools BM111 High-Power Cutting Head', 'sort_order' => 3],
                    ['spec_group' => 'Performance', 'spec_name' => 'Max Combined Traversing', 'spec_value' => '120 m/min with 1.5G Acceleration', 'sort_order' => 4],
                    ['spec_group' => 'Control & Software', 'spec_name' => 'CNC Software Suite', 'spec_value' => 'BoChu CypCut FSCUT4000 with Auto-Nest & Pierce Detection', 'sort_order' => 5],
                    ['spec_group' => 'Capacity', 'spec_name' => 'Carbon Steel Max Piercing', 'spec_value' => 'Up to 25 mm', 'sort_order' => 6],
                    ['spec_group' => 'Capacity', 'spec_name' => 'Stainless Steel Max Cut', 'spec_value' => 'Up to 16 mm Clean Edge', 'sort_order' => 7],
                ],
            ],
            [
                'category_id' => $catMultiAxis?->id ?? $catMultiHead?->id,
                'type' => 'machine',
                'name' => 'ZR-MULTI-5AXIS Gantry Mold & Composite Center',
                'model_number' => 'ZR-5AXIS-PRO',
                'slug' => 'zr-5axis-master-heavy-gantry-center',
                'short_description' => 'Full 5-axis simultaneous routing with Italian HSD 2-axis articulation spindle. Built for marine hull patterns, automotive molds, carbon fiber trims, and aluminium extrusions.',
                'description' => '<h3>Simultaneous 5-Axis Heavy Gantry Machining Center</h3><p>The ZR-5AXIS-PRO brings high-accuracy simultaneous 5-axis contouring to large automotive tooling, aerospace composite trimming, and rapid prototype patterns. Driven by an Italian HSD dual-axis fork head with continuous C-axis rotation (±360°) and A-axis tilting (±120°), it eliminates multi-setup repositioning errors on complex double-curved geometries.</p>',
                'primary_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBzfwJfIW36Vt1vwGSSX1utky7XJMunExZu4VpMQLUuiibkRE2CEe6rX1IpflW9Z1P-EVXv-gqVlDnB4hr53A4owbM2rKZR6BbK0PJkMwnLEJIwLMXTJ0_A8ENpHWdQ6XDiKLV_5H-wM3NLCm7-Hm-Jv3T_e-Sf1wHJcUMzmm8eDq7jjYjxwWYOXDSnYRIWwMJu_DJjCNxqRjoMEmy6BQwsGA8DT5qC29Rkzu2ApWXYrut8TlekxAHm',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 8,
                'specs' => [
                    ['spec_group' => 'Working Area', 'spec_name' => 'X/Y/Z Machining Volume', 'spec_value' => '2000 × 4000 × 1000 mm Z-Clearance', 'sort_order' => 1],
                    ['spec_group' => 'Kinematics', 'spec_name' => 'Rotary Axes Travel', 'spec_value' => 'C-Axis ±360° Infinite, A-Axis ±120° Continuous', 'sort_order' => 2],
                    ['spec_group' => 'Spindle & Motor', 'spec_name' => 'Electrospindle', 'spec_value' => '12.0 kW Italian HSD ES779 HSK-F63 (24,000 RPM)', 'sort_order' => 3],
                    ['spec_group' => 'Drive & Motion', 'spec_name' => 'Servo Drive Package', 'spec_value' => 'Syntec Bus Absolute Encoders with Harmonic Drives', 'sort_order' => 4],
                    ['spec_group' => 'Control & Electronics', 'spec_name' => 'Controller & RTCP', 'spec_value' => 'Syntec 5-Axis RTCP (Rotation Tool Center Point)', 'sort_order' => 5],
                    ['spec_group' => 'Performance', 'spec_name' => 'Volumetric Calibration', 'spec_value' => '± 0.03 mm Renishaw Laser Calibrated', 'sort_order' => 6],
                ],
            ],
        ];

        $createdMachines = [];
        foreach ($machines as $m) {
            $specs = $m['specs'];
            unset($m['specs']);

            $product = Product::updateOrCreate(['slug' => $m['slug']], $m);
            $createdMachines[$m['model_number']] = $product;

            $product->specifications()->delete();
            foreach ($specs as $s) {
                $product->specifications()->create($s);
            }

            // Seed Gallery Images (Machine inspection angles)
            $product->images()->delete();
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D',
                'caption' => 'Digital Galvo Scanning Head',
                'sort_order' => 1,
                'is_primary' => false,
                'is_sample' => false,
            ]);
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz',
                'caption' => 'MAX / Raycus Laser Module Bay',
                'sort_order' => 2,
                'is_primary' => false,
                'is_sample' => false,
            ]);
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP',
                'caption' => 'Motorized Rotary Axis D80 Tooling',
                'sort_order' => 3,
                'is_primary' => false,
                'is_sample' => false,
            ]);

            // Seed Sample Workpieces / Designs Produced By This Machine
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA5xwO6Ln5Vk9jTdZN81vWpiQ07H80oGf1FgkXHPgV7RAnR8mEAoVf_dhqFxdVrfvQmV6LYQhNsFEBNysXdh3-7vNwyXII_-_dveXv4qXLFMf5cb1JGnh-x8V_1e2O_a3W-_3ALdodpaGbUvrsL2NNLLZsoMVXq97ZNUaKHc0Ov2FIY14DxQwhv0QjI5JTM9QEX5Vurost5UkwBh87pNBWSUeBX85tKIRWwfN2w6h00T5EEqBnGi4gX',
                'caption' => 'Deep 3D Brass Seal Engraving',
                'material' => 'Solid Brass C36000 • 1.2mm depth',
                'sort_order' => 1,
                'is_primary' => false,
                'is_sample' => true,
            ]);
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D',
                'caption' => 'Stainless Color Annealing',
                'material' => 'Mirror SS304 • Spectral Oxide Layers',
                'sort_order' => 2,
                'is_primary' => false,
                'is_sample' => true,
            ]);
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz',
                'caption' => 'Anodized Aluminum 2D Matrix',
                'material' => 'MIL-STD-130 Traceability UID',
                'sort_order' => 3,
                'is_primary' => false,
                'is_sample' => true,
            ]);
            $product->images()->create([
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP',
                'caption' => 'Titanium Micro-Lettering',
                'material' => 'Grade 5 Titanium • 0.15mm Characters',
                'sort_order' => 4,
                'is_primary' => false,
                'is_sample' => true,
            ]);
        }

        // 2. SPARE PARTS
        $spareParts = [
            [
                'category_id' => $catSpindles?->id,
                'type' => 'spare_part',
                'name' => '3.5KW HQD High-Speed Air-Cooled Spindle Motor',
                'model_number' => 'HQD-GDZ-105',
                'slug' => '3-5kw-hqd-air-cooled-spindle-motor',
                'short_description' => 'Original HQD 3.5 kW ER25 air-cooled spindle motor (18,000 RPM, 380V/220V) for heavy woodworking and composite panel CNC routers.',
                'description' => '<p>Genuine HQD brand electric spindle motor built with precision P4 ceramic angular contact bearings for high radial runout accuracy (<0.005mm) and long duty cycles in continuous woodworking shops.</p>',
                'primary_image' => 'images/spares/spindle-3.5kw.jpg',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 1,
                'compatible_with' => ['ZR-1325-PRO', 'ZR-4H-1325'],
                'specs' => [
                    ['spec_group' => 'Electrical', 'spec_name' => 'Rated Power', 'spec_value' => '3.5 KW', 'sort_order' => 1],
                    ['spec_group' => 'Electrical', 'spec_name' => 'Rated Voltage', 'spec_value' => '220V / 380V (3-Phase)', 'sort_order' => 2],
                    ['spec_group' => 'Mechanical', 'spec_name' => 'Maximum Speed', 'spec_value' => '18,000 RPM (300 Hz)', 'sort_order' => 3],
                    ['spec_group' => 'Mechanical', 'spec_name' => 'Collet Chuck', 'spec_value' => 'ER25 (Clamps 3mm to 16mm)', 'sort_order' => 4],
                    ['spec_group' => 'Cooling', 'spec_name' => 'Cooling Type', 'spec_value' => 'Forced Air Cooled (Built-in Fan)', 'sort_order' => 5],
                ],
            ],
            [
                'category_id' => $catDrivers?->id,
                'type' => 'spare_part',
                'name' => 'Leadshine 3DM883 Digital 3-Phase Stepper Driver',
                'model_number' => '3DM883',
                'slug' => 'leadshine-3dm883-digital-stepper-driver',
                'short_description' => 'Genuine Leadshine high-performance 3-phase digital stepper motor drive. Input 30-80VAC or 40-110VDC, current up to 8.3A.',
                'description' => '<p>The 3DM883 utilizes advanced digital signal processing algorithms to eliminate low-speed motor resonance, providing silent and smooth stepper control on CNC X and Y gantry axes.</p>',
                'primary_image' => 'images/spares/leadshine-driver.jpg',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 2,
                'compatible_with' => ['ZR-1325-PRO', 'ZR-2030-STONE', 'ZR-4H-1325'],
                'specs' => [
                    ['spec_group' => 'Electrical', 'spec_name' => 'Input Voltage', 'spec_value' => '30 - 80 VAC or 40 - 110 VDC', 'sort_order' => 1],
                    ['spec_group' => 'Electrical', 'spec_name' => 'Output Peak Current', 'spec_value' => '2.1A - 8.3A (8 Settings via DIP)', 'sort_order' => 2],
                    ['spec_group' => 'Control', 'spec_name' => 'Pulse Frequency', 'spec_value' => 'Up to 200 KHz', 'sort_order' => 3],
                    ['spec_group' => 'Protection', 'spec_name' => 'Built-in Protections', 'spec_value' => 'Over-voltage, over-current, phase-error', 'sort_order' => 4],
                ],
            ],
            [
                'category_id' => $catInverters?->id,
                'type' => 'spare_part',
                'name' => 'Fuling 3.7KW Vector Frequency Inverter (VFD)',
                'model_number' => 'DZB300B0037L4A',
                'slug' => 'fuling-3-7kw-vector-frequency-inverter-vfd',
                'short_description' => 'Industrial vector VFD by Fuling. 3.7KW 380V (or 220V variant), 0-1000Hz output for precise CNC spindle torque and speed regulation.',
                'description' => '<p>Fuling DZB-series vector inverters are recognized industry-wide for extreme reliability in Indian power supply conditions, handling voltage fluctuations and maintaining stable torque at lower RPMs.</p>',
                'primary_image' => 'images/spares/fuling-vfd.jpg',
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 3,
                'compatible_with' => ['ZR-1325-PRO'],
                'specs' => [
                    ['spec_group' => 'Electrical', 'spec_name' => 'Rated Power', 'spec_value' => '3.7 KW / 5 HP', 'sort_order' => 1],
                    ['spec_group' => 'Electrical', 'spec_name' => 'Input Voltage', 'spec_value' => '3-Phase 380V (±15%)', 'sort_order' => 2],
                    ['spec_group' => 'Output', 'spec_name' => 'Output Frequency Range', 'spec_value' => '0 - 1000 Hz', 'sort_order' => 3],
                ],
            ],
            [
                'category_id' => $catRails?->id,
                'type' => 'spare_part',
                'name' => 'Taiwan Hiwin 20mm Linear Guide Rail & Runner Blocks',
                'model_number' => 'HIWIN-HGH20CA',
                'slug' => 'taiwan-hiwin-20mm-linear-guide-rail-blocks',
                'short_description' => 'Original Taiwan Hiwin 20mm high-assembly square guide rail and HGH20CA / HGW20CC bearing blocks for ultra-precise CNC axis motion.',
                'description' => '<p>High-rigidity four-row circular arc groove linear guideway with equal load ratings in radial, reverse-radial and lateral directions. Supplied cut to exact CNC gantry lengths with factory dust scrapers.</p>',
                'primary_image' => 'images/spares/hiwin-rail.jpg',
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 4,
                'compatible_with' => ['ZR-1325-PRO', 'ZR-1530-FL'],
                'specs' => [
                    ['spec_group' => 'Dimensions', 'spec_name' => 'Rail Width', 'spec_value' => '20 mm', 'sort_order' => 1],
                    ['spec_group' => 'Block Model', 'spec_name' => 'Carriage Block Type', 'spec_value' => 'HGH20CA Square / HGW20CC Flange', 'sort_order' => 2],
                    ['spec_group' => 'Accuracy', 'spec_name' => 'Precision Grade', 'spec_value' => 'H-Grade (High Precision)', 'sort_order' => 3],
                ],
            ],
            [
                'category_id' => $catControllers?->id,
                'type' => 'spare_part',
                'name' => 'RichAuto DSP A11 Handheld 3-Axis Controller System',
                'model_number' => 'DSP-A11E',
                'slug' => 'richauto-dsp-a11-handheld-controller-system',
                'short_description' => 'Standalone handheld CNC controller with pendant keypad, interface board, 50-pin data cable, and USB drive flash support. No PC required.',
                'description' => '<p>Complete replacement kit for RichAuto DSP A11E 3-axis controllers. Immune to PC computer crashes, viruses, or electrical noise. Features instant resume from power disruption and tool breakage memory.</p>',
                'primary_image' => 'images/spares/dsp-controller.jpg',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 5,
                'compatible_with' => ['ZR-1325-PRO', 'ZR-4H-1325'],
                'specs' => [
                    ['spec_group' => 'Control', 'spec_name' => 'Controlled Axes', 'spec_value' => '3 Axes (X, Y, Z)', 'sort_order' => 1],
                    ['spec_group' => 'Interface', 'spec_name' => 'Display & Memory', 'spec_value' => 'Monochrome LCD, 512MB Flash + USB Port', 'sort_order' => 2],
                    ['spec_group' => 'Electrical', 'spec_name' => 'Power Supply', 'spec_value' => '24V DC (Interface Board)', 'sort_order' => 3],
                ],
            ],
            [
                'category_id' => $catTooling?->id,
                'type' => 'spare_part',
                'name' => 'Solid Carbide 2-Flute Spiral Upcut CNC Router Bit (6mm)',
                'model_number' => 'ZR-SC-6MM-UP',
                'slug' => 'solid-carbide-2-flute-spiral-upcut-bit-6mm',
                'short_description' => 'Micro-grain tungsten carbide 6mm shank spiral cutter. Mirror-polished flute for rapid chip evacuation in wood, acrylic, and ACP.',
                'description' => '<p>Industrial grade micro-grain solid carbide bits with mirror-finish flutes. Designed for clean edge finishes and maximum tool lifespan during continuous nesting and cutting operations.</p>',
                'primary_image' => 'images/spares/carbide-bit.jpg',
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 6,
                'compatible_with' => ['ZR-1325-PRO', 'ZR-4H-1325'],
                'specs' => [
                    ['spec_group' => 'Dimensions', 'spec_name' => 'Shank Diameter', 'spec_value' => '6.0 mm', 'sort_order' => 1],
                    ['spec_group' => 'Dimensions', 'spec_name' => 'Cutting Edge Diameter', 'spec_value' => '6.0 mm', 'sort_order' => 2],
                    ['spec_group' => 'Dimensions', 'spec_name' => 'Cutting Length (Flute)', 'spec_value' => '22 mm (Overall Length: 50 mm)', 'sort_order' => 3],
                    ['spec_group' => 'Material', 'spec_name' => 'Composition', 'spec_value' => 'K10/K20 Ultra-Fine Micrograin Solid Carbide', 'sort_order' => 4],
                ],
            ],
        ];

        foreach ($spareParts as $sp) {
            $specs = $sp['specs'];
            $compatibles = $sp['compatible_with'] ?? [];
            unset($sp['specs'], $sp['compatible_with']);

            $product = Product::updateOrCreate(['slug' => $sp['slug']], $sp);

            $product->specifications()->delete();
            foreach ($specs as $s) {
                $product->specifications()->create($s);
            }

            // Link compatibilities
            foreach ($compatibles as $machineModel) {
                if (isset($createdMachines[$machineModel])) {
                    $machine = $createdMachines[$machineModel];
                    $machine->compatibleSpareParts()->syncWithoutDetaching([
                        $product->id => ['notes' => 'Original factory fitted / recommended replacement part'],
                    ]);
                }
            }
        }
    }
}
