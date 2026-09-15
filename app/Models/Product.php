<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'type',
        'name',
        'model_number',
        'slug',
        'short_description',
        'description',
        'key_features',
        'applications',
        'benefits',
        'primary_image',
        'brochure_path',
        'certificate_path',
        'manual_path',
        'is_featured',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'key_features' => 'array',
            'applications' => 'array',
            'benefits' => 'array',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (Product $product) {
            if (empty($product->slug)) {
                $baseSlug = Str::slug($product->name.($product->model_number ? '-'.$product->model_number : ''));
                $slug = $baseSlug;
                $counter = 1;

                while (static::where('slug', $slug)->where('id', '!=', $product->id ?? 0)->exists()) {
                    $counter++;
                    $slug = "{$baseSlug}-{$counter}";
                }

                $product->slug = $slug;
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function specifications(): HasMany
    {
        return $this->hasMany(ProductSpecification::class)->orderBy('sort_order', 'asc');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order', 'asc');
    }

    public function galleryImages(): HasMany
    {
        return $this->hasMany(ProductImage::class)->where('is_sample', false)->orderBy('sort_order', 'asc');
    }

    public function sampleImages(): HasMany
    {
        return $this->hasMany(ProductImage::class)->where('is_sample', true)->orderBy('sort_order', 'asc');
    }

    public function compatibleMachines(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_compatibilities',
            'spare_part_id',
            'machine_id'
        )->withPivot('notes')->withTimestamps();
    }

    public function compatibleSpareParts(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_compatibilities',
            'machine_id',
            'spare_part_id'
        )->withPivot('notes')->withTimestamps();
    }

    public function enquiries(): HasMany
    {
        return $this->hasMany(Enquiry::class);
    }

    public function whatsappClicks(): HasMany
    {
        return $this->hasMany(WhatsAppClick::class);
    }

    // Scopes
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeMachines(Builder $query): Builder
    {
        return $query->where('type', 'machine');
    }

    public function scopeSpareParts(Builder $query): Builder
    {
        return $query->where('type', 'spare_part');
    }

    // Accessors
    public function getPrimaryImageUrlAttribute(): string
    {
        if ($this->primary_image && (str_starts_with($this->primary_image, 'http://') || str_starts_with($this->primary_image, 'https://'))) {
            return $this->primary_image;
        }

        if ($this->primary_image) {
            return Storage::disk('public')->url($this->primary_image);
        }

        return asset('images/brand/logo.jpeg');
    }

    public function getBrochureUrlAttribute(): ?string
    {
        if (! $this->brochure_path) {
            return null;
        }

        if (str_starts_with($this->brochure_path, 'http://') || str_starts_with($this->brochure_path, 'https://')) {
            return $this->brochure_path;
        }

        return Storage::disk('public')->url($this->brochure_path);
    }

    public function getCertificateUrlAttribute(): ?string
    {
        if (! $this->certificate_path) {
            return null;
        }

        if (str_starts_with($this->certificate_path, 'http://') || str_starts_with($this->certificate_path, 'https://')) {
            return $this->certificate_path;
        }

        return Storage::disk('public')->url($this->certificate_path);
    }

    public function getManualUrlAttribute(): ?string
    {
        if (! $this->manual_path) {
            return null;
        }

        if (str_starts_with($this->manual_path, 'http://') || str_starts_with($this->manual_path, 'https://')) {
            return $this->manual_path;
        }

        return Storage::disk('public')->url($this->manual_path);
    }

    public function getIsMachineAttribute(): bool
    {
        return $this->type === 'machine';
    }

    public function getIsSparePartAttribute(): bool
    {
        return $this->type === 'spare_part';
    }
}
