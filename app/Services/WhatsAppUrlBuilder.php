<?php

namespace App\Services;

use App\Models\Product;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

class WhatsAppUrlBuilder
{
    public static function build(Product|string|null $product = null, ?string $customMessage = null): string
    {
        $rawNumber = SiteSetting::get('whatsapp_number', '919876543210');
        $cleanNumber = preg_replace('/[^0-9]/', '', $rawNumber);

        if (empty($cleanNumber)) {
            $cleanNumber = '919876543210';
        }

        if (is_string($product) && empty($customMessage)) {
            $message = $product;
        } elseif ($customMessage) {
            $message = $customMessage;
        } elseif ($product instanceof Product) {
            $routeName = $product->is_machine ? 'machines.show' : 'spare-parts.show';
            $productUrl = Route::has($routeName)
                ? route($routeName, $product->slug)
                : url(($product->is_machine ? '/machines/' : '/spare-parts/').$product->slug);

            if ($product->is_machine) {
                $message = "Hello ZR Impex,\n\n"
                    ."I am interested in: {$product->name}".($product->model_number ? " (Model: {$product->model_number})" : '')."\n"
                    ."Link: {$productUrl}\n\n"
                    .'Please share the commercial quotation, technical datasheet, and delivery timeline.';
            } else {
                $message = "Hello ZR Impex,\n\n"
                    ."I need price & availability for spare part: {$product->name}".($product->model_number ? " (Model: {$product->model_number})" : '')."\n"
                    ."Link: {$productUrl}\n\n"
                    .'Please confirm dispatch time and shipping to my location.';
            }
        } else {
            $message = "Hello ZR Impex,\n\n"
                .'I am browsing your website and would like to speak with a technical sales representative regarding CNC machines and spare parts.';
        }

        return "https://wa.me/{$cleanNumber}?text=".rawurlencode($message);
    }
}
