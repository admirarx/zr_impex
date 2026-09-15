<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    protected static function booted(): void
    {
        static::saved(function (SiteSetting $setting) {
            Cache::forget("site_setting_{$setting->key}");
        });

        static::deleted(function (SiteSetting $setting) {
            Cache::forget("site_setting_{$setting->key}");
        });
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        return Cache::remember("site_setting_{$key}", 3600, function () use ($key, $default) {
            $setting = static::where('key', $key)->first();

            return $setting ? $setting->value : $default;
        });
    }

    public static function set(string $key, mixed $value, string $group = 'general'): self
    {
        Cache::forget("site_setting_{$key}");

        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group]
        );
    }

    /**
     * Parse and return a clean Google Maps Embed src URL regardless of whether the user
     * pasted a full <iframe> code, an embed URL, or a URL with extra HTML attributes.
     */
    public static function getGoogleMapsEmbedUrl(): string
    {
        $raw = static::get('google_maps_embed', '');

        if (empty($raw)) {
            return 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3500.593226790885!2d77.078144!3d28.671896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQwJzE4LjgiTiA3N8KwMDQnNDEuMyJF!5e0!3m2!1sen!2sin!4v1789297607293!5m2!1sen!2sin';
        }

        // If an <iframe> tag was saved, extract the src attribute
        if (preg_match('/src=["\']([^"\']+)["\']/i', $raw, $matches)) {
            return html_entity_decode($matches[1]);
        }

        // If corrupted with quotes or attributes, clean up to the first valid URL
        if (preg_match('/(https:\/\/[^"\'>\s]+)/i', $raw, $matches)) {
            return $matches[1];
        }

        return trim($raw);
    }
}
