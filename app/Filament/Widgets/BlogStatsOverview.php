<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPosts = Post::count();
        $publishedPosts = Post::where('status', 'published')->count();
        $draftPosts = Post::where('status', 'draft')->count();
        $totalCategories = Category::count();
        
        // Posts this month
        $postsThisMonth = Post::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        
        // Published posts this week
        $publishedThisWeek = Post::where('status', 'published')
            ->whereBetween('published_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->count();

        return [
            Stat::make('Total Posts', $totalPosts)
                ->description($postsThisMonth . ' new this month')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            
            Stat::make('Published Posts', $publishedPosts)
                ->description($publishedThisWeek . ' published this week')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            
            Stat::make('Draft Posts', $draftPosts)
                ->description('Unpublished articles')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('warning'),
            
            Stat::make('Categories', $totalCategories)
                ->description('Active categories')
                ->descriptionIcon('heroicon-m-folder')
                ->color('info'),
        ];
    }
}
