<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('docpage', function ($page) {
            return "<?php echo Parsedown::instance()->text(file_get_contents(base_path('docs/' . {$page} . '.md'))); ?>";
        });

//        Blade::directive('endmarkdown', function ($expression) {
/*            return "'); ?>";*/
//        });
//
//        Blade::directive('markdown', function ($expression) {
//            return "<?php Parsedown::instance()->text('";
//        });
//
//        Blade::directive('endmarkdown', function ($expression) {
/*            return "'); ?>";*/
//        });
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
