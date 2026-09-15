<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'company_name', 'value' => 'ZR Impex', 'group' => 'general'],
            ['key' => 'tagline', 'value' => 'Precision Industrial CNC Router Machines & Genuine Spare Parts', 'group' => 'general'],
            ['key' => 'whatsapp_number', 'value' => '+919250630381', 'group' => 'contact'],
            ['key' => 'primary_phone', 'value' => '+91 9899639380', 'group' => 'contact'],
            ['key' => 'support_phone', 'value' => '+91 9899639380', 'group' => 'contact'],
            ['key' => 'sales_email', 'value' => 'sales@zrimpex.com', 'group' => 'contact'],
            ['key' => 'support_email', 'value' => 'support@zrimpex.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => 'W-116, S-Block, PVC Market, Paschim Vihar, New Delhi, Delhi 110087, India', 'group' => 'contact'],
            ['key' => 'business_hours', 'value' => 'Monday – Saturday: 9:00 AM – 7:00 PM (Sunday Closed)', 'group' => 'contact'],
            ['key' => 'google_maps_embed', 'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3500.593226790885!2d77.078144!3d28.671896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQwJzE4LjgiTiA3N8KwMDQnNDEuMyJF!5e0!3m2!1sen!2sin!4v1789297607293!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>', 'group' => 'contact'],
            ['key' => 'ga4_measurement_id', 'value' => 'G-XXXXXXXXXX', 'group' => 'seo'],
            ['key' => 'social_youtube', 'value' => 'https://youtube.com/@zrimpex?si=YJQ-40xDaUAEeX0r', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => 'https://www.instagram.com/zr.impex?stkn=b2Q2Nnd4NmdkdjFz', 'group' => 'social'],
            ['key' => 'social_facebook', 'value' => 'https://www.facebook.com/share/1BimaQySE9/', 'group' => 'social'],
            ['key' => 'social_whatsapp', 'value' => 'https://wa.me/919250630381', 'group' => 'social'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
