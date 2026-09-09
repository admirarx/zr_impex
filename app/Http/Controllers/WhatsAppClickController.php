<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WhatsAppClick;
use App\Services\WhatsAppUrlBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WhatsAppClickController extends Controller
{
    public function track(Request $request, ?int $productId = null): JsonResponse|RedirectResponse
    {
        $product = $productId ? Product::find($productId) : null;
        $userAgent = $request->userAgent() ?? '';

        $deviceType = 'desktop';
        if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', $userAgent)) {
            $deviceType = 'tablet';
        } elseif (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $userAgent)) {
            $deviceType = 'mobile';
        }

        $ipHash = hash('sha256', ($request->ip() ?? 'unknown').config('app.key'));

        WhatsAppClick::create([
            'product_id' => $product?->id,
            'source_page' => $request->input('source_page', url()->previous()),
            'ip_hash' => $ipHash,
            'user_agent' => substr($userAgent, 0, 500),
            'device_type' => $deviceType,
            'clicked_at' => now(),
        ]);

        if ($request->isMethod('POST') || $request->expectsJson()) {
            return response()->json([
                'status' => 'logged',
                'whatsapp_url' => WhatsAppUrlBuilder::build($product),
            ]);
        }

        // Direct GET fallback redirect
        return redirect()->away(WhatsAppUrlBuilder::build($product));
    }
}
