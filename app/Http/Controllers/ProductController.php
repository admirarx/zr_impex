<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function machinesIndex(Request $request): View
    {
        $categories = Category::machines()->active()->orderBy('sort_order', 'asc')->get();

        $query = Product::machines()
            ->published()
            ->with(['category', 'specifications'])
            ->orderBy('sort_order', 'asc');

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->input('category'));
            });
        }

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('model_number', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $machines = $query->paginate(12)->withQueryString();

        return view('machines.index', compact('machines', 'categories'));
    }

    public function machineShow(string $slug): View
    {
        $machine = Product::machines()
            ->published()
            ->where('slug', $slug)
            ->with([
                'category',
                'specifications',
                'images',
                'compatibleSpareParts.category',
            ])
            ->firstOrFail();

        $relatedMachines = Product::machines()
            ->published()
            ->where('id', '!=', $machine->id)
            ->where('category_id', $machine->category_id)
            ->take(3)
            ->get();

        return view('machines.show', compact('machine', 'relatedMachines'));
    }

    public function sparePartsIndex(Request $request): View
    {
        $categories = Category::spareParts()->active()->orderBy('sort_order', 'asc')->get();

        $query = Product::spareParts()
            ->published()
            ->with(['category', 'specifications'])
            ->orderBy('sort_order', 'asc');

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->input('category'));
            });
        }

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('model_number', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $spareParts = $query->paginate(12)->withQueryString();

        return view('spare-parts.index', compact('spareParts', 'categories'));
    }

    public function sparePartShow(string $slug): View
    {
        $sparePart = Product::spareParts()
            ->published()
            ->where('slug', $slug)
            ->with([
                'category',
                'specifications',
                'images',
                'compatibleMachines',
            ])
            ->firstOrFail();

        return view('spare-parts.show', compact('sparePart'));
    }
}
