<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class EnquiryController extends Controller
{
    public function store(StoreEnquiryRequest $request): RedirectResponse|JsonResponse
    {
        // 1. Anti-spam honeypot verification
        if ($request->filled('b_name')) {
            // Silently return success to discard bot submission
            if ($request->expectsJson()) {
                return response()->json(['status' => 'success', 'message' => 'Thank you for your enquiry!'], 200);
            }

            return back()->with('success', 'Thank you! Your enquiry has been received. Our sales engineer will reach out shortly.');
        }

        // 2. Persist lead record
        $data = $request->validated();
        unset($data['b_name']);

        $enquiry = Enquiry::create($data);

        $successMessage = 'Thank you! Your enquiry has been received. Our technical sales team will contact you via WhatsApp or phone shortly.';

        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => $successMessage,
                'id' => $enquiry->id,
            ], 201);
        }

        return back()->with('success', $successMessage);
    }
}
