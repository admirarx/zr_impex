<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SiteSetting;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $featuredMachines = Product::machines()
            ->published()
            ->featured()
            ->with(['category', 'specifications'])
            ->orderBy('sort_order', 'asc')
            ->take(6)
            ->get();

        $machineCategories = Category::machines()
            ->active()
            ->withCount(['publishedProducts' => function ($query) {
                $query->where('type', 'machine');
            }])
            ->orderBy('sort_order', 'asc')
            ->get();

        $spareParts = Product::spareParts()
            ->published()
            ->featured()
            ->with('category')
            ->orderBy('sort_order', 'asc')
            ->take(4)
            ->get();

        return view('pages.home', compact('featuredMachines', 'machineCategories', 'spareParts'));
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function contact(): View
    {
        $contactSettings = [
            'phone' => SiteSetting::get('primary_phone', '+91 98765 43210'),
            'support_phone' => SiteSetting::get('support_phone', '+91 98123 45678'),
            'whatsapp' => SiteSetting::get('whatsapp_number', '+91 98765 43210'),
            'sales_email' => SiteSetting::get('sales_email', 'sales@zrimpex.com'),
            'support_email' => SiteSetting::get('support_email', 'support@zrimpex.com'),
            'address' => SiteSetting::get('address', 'Plot No. 42, Industrial Area, Phase-2, Near Mayapuri, New Delhi, Delhi 110064, India'),
            'business_hours' => SiteSetting::get('business_hours', 'Monday – Saturday: 9:00 AM – 7:00 PM (Sunday Closed)'),
            'maps_embed' => SiteSetting::get('google_maps_embed'),
        ];

        return view('pages.contact', compact('contactSettings'));
    }

    public function privacy(): View
    {
        return view('pages.legal.privacy');
    }

    public function terms(): View
    {
        return view('pages.legal.terms');
    }

    public function cookiePolicy(): View
    {
        return view('pages.legal.cookie');
    }

    public function shippingPolicy(): View
    {
        return view('pages.commercial.shipping');
    }

    public function warranty(): View
    {
        return view('pages.commercial.warranty');
    }

    public function returnPolicy(): View
    {
        return view('pages.commercial.return');
    }

    public function howToBuy(): View
    {
        return view('pages.commercial.how-to-buy');
    }

    public function sitemap(): Response
    {
        $products = Product::where('is_published', true)
            ->latest('updated_at')
            ->get();

        $content = view('sitemap', compact('products'))->render();

        return response($content, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
