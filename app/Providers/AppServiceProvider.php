<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\NavItem;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('navCategories', Category::whereNull('parent_id')->get());
        });



        View::composer('*', function ($view) {

            // ✅ Site settings (logo, email, phone)
            $settings = SiteSetting::all()->pluck('value', 'key');

            // ✅ Nav items with their children
            $navItems = NavItem::with('children')
                ->parents()
                ->get();

            $view->with([
                'settings' => $settings,
                'navItems' => $navItems,
            ]);
        });
    }
}
