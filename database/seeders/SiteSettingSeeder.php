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
            ['key' => 'whatsapp_number', 'value' => '+919876543210', 'group' => 'contact'],
            ['key' => 'primary_phone', 'value' => '+91 98765 43210', 'group' => 'contact'],
            ['key' => 'support_phone', 'value' => '+91 98123 45678', 'group' => 'contact'],
            ['key' => 'sales_email', 'value' => 'sales@zrimpex.com', 'group' => 'contact'],
            ['key' => 'support_email', 'value' => 'support@zrimpex.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => 'Plot No. 42, Industrial Area, Phase-2, Near Mayapuri, New Delhi, Delhi 110064, India', 'group' => 'contact'],
            ['key' => 'business_hours', 'value' => 'Monday – Saturday: 9:00 AM – 7:00 PM (Sunday Closed)', 'group' => 'contact'],
            ['key' => 'google_maps_embed', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112061.79155986884!2d77.0688975!3d28.63186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0370425a8397%3A0x6d396a84f50684f!2sMayapuri%20Industrial%20Area%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin', 'group' => 'contact'],
            ['key' => 'ga4_measurement_id', 'value' => 'G-XXXXXXXXXX', 'group' => 'seo'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
