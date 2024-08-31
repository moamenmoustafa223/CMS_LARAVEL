<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Logo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        // Share active services with all views
        View::composer('*', function ($view) {
            $contact = Contact::all();
            $activeServices = Service::where('status', 'active')->get();
            $logo = Logo::all();
            $view->with([
                'activeServices' => $activeServices,
                'contact' => $contact,
                'logo' => $logo
            ]);
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
