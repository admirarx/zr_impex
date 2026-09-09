<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use App\Models\Product;
use App\Models\WhatsAppClick;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $newEnquiries = Enquiry::where('status', 'new')->count();
        $totalEnquiries = Enquiry::count();

        $todayClicks = WhatsAppClick::whereDate('clicked_at', now()->today())->count();
        $totalClicks = WhatsAppClick::count();

        $activeMachines = Product::where('type', 'machine')->where('is_published', true)->count();
        $activeParts = Product::where('type', 'spare_part')->where('is_published', true)->count();

        return [
            Stat::make('Total Inquiries', (string) $totalEnquiries)
                ->description("{$newEnquiries} new unaddressed leads")
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color($newEnquiries > 0 ? 'warning' : 'success')
                ->chart([3, 5, 8, 4, 7, 9, $totalEnquiries]),

            Stat::make('WhatsApp Inquiries', (string) $totalClicks)
                ->description("{$todayClicks} clicks today")
                ->descriptionIcon('heroicon-m-cursor-arrow-rays')
                ->color('primary')
                ->chart([2, 4, 6, 8, 10, 12, $totalClicks]),

            Stat::make('Catalogue Inventory', "{$activeMachines} Machines")
                ->description("{$activeParts} Spare Parts listed")
                ->descriptionIcon('heroicon-m-cpu-chip')
                ->color('info'),
        ];
    }
}
