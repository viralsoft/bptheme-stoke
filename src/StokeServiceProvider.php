<?php


namespace ViralSoft\BPThemeStoke;

use ViralSoft\BPThemeStoke\app\Console\Commands\PublishView;
use Illuminate\Support\ServiceProvider;
use ViralSoft\BPThemeStoke\app\Console\Commands\AddSidebarContent;
use ViralSoft\BPThemeStoke\app\Console\Commands\AddSidebarContentVertical;


class StokeServiceProvider extends ServiceProvider
{
    protected $commands = [
        AddSidebarContentVertical::class,
        AddSidebarContent::class,
        PublishView::class
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadHelpers();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }
        $this->publishFile();
        $this->loadViewsWithFallbacks();
    }

    public function loadViewsWithFallbacks()
    {
        $customBaseFolder = resource_path('views/vendor/stoke/base');
        $customCrudFolder = resource_path('views/vendor/stoke/crud');

        // - first the published/overwritten views (in case they have any changes)
        if (file_exists($customBaseFolder)) {
            $this->loadViewsFrom($customBaseFolder, 'stoke-horizontal');
            $this->loadViewsFrom($customBaseFolder, 'stoke-vertical');
        }
        if (file_exists($customCrudFolder)) {
            $this->loadViewsFrom($customCrudFolder, 'stoke-crud');
        }
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views/base'), 'stoke-horizontal');
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views/base'), 'stoke-vertical');
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views/crud'), 'stoke-crud');
    }

    public function publishFile()
    {
        $error_views = [__DIR__.'/resources/error_views' => resource_path('views/errors')];
        $backpack_menu_contents_view = [
            __DIR__.'/resources/views/base/inc/sidebar_content_horizontal.blade.php'      => resource_path('views/vendor/stoke/base/inc/sidebar_content_horizontal.blade.php'),
            __DIR__.'/resources/views/base/inc/sidebar_content_vertical.blade.php'      => resource_path('views/vendor/stoke/base/inc/sidebar_content_vertical.blade.php'),
            __DIR__.'/resources/views/base/inc/topbar_right_content.blade.php'  => resource_path('views/vendor/stoke/base/inc/topbar_right_content.blade.php'),
        ];
        $backpack_public_assets = [__DIR__.'/public' => public_path()];
        $this->publishes($backpack_public_assets, 'public');
        $this->publishes($backpack_menu_contents_view, 'menu_contents');
        $this->publishes($error_views, 'errors');
    }

    /**
     * Load the Backpack helper methods, for convenience.
     */
    public function loadHelpers()
    {
        require_once __DIR__.'/helpers.php';
    }
}
