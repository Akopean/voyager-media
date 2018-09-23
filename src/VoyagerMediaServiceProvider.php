<?php

namespace VoyagerMedia;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use VoyagerMedia\Facades\VoyagerMedia as VoyagerMediaFacade;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class VoyagerMediaServiceProvider extends ServiceProvider
{

	public function register()
	{
		define('VOYAGER_MEDIA_PATH', __DIR__.'/..');
		
		app(Dispatcher::class)->listen('voyager.admin.routing', [$this, 'addMediaRoutes']);

        $loader = AliasLoader::getInstance();
        $loader->alias('VoyagerMedia', VoyagerMediaFacade::class);

        $this->app->singleton('VoyagerMedia', function () {
            return new VoyagerMedia();
        });

        $this->app->singleton('VoyagerMediaButton', function () {

            return new VoyagerMediaButton();
        });

        $this->app->singleton('VoyagerMediaModal', function () {

            return new VoyagerMediaModal();
        });

        $this->registerConfigs();

        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();
            $this->registerConsoleCommands();
        }

	}

    public function addMediaRoutes()
    {
        require __DIR__ . '/../routes/web.php';
    }


	public function boot()
	{
        // Publish a config file
        $this->publishes([
            __DIR__ . '/../config/' => config_path() . '/',
        ], 'config');

        $this->loadTranslationsFrom(realpath(__DIR__.'/../lang'), 'voyager-media');

		$this->loadViewsFrom(__DIR__.'/../resources/views', 'voyager.media');

        Blade::directive('voyagerMediaModal', function () {
            return "<?php app('VoyagerMediaModal')->run(); ?>";
        });

        Blade::directive('voyagerMediaButton', function ($expression) {
            return "<?php app('VoyagerMediaButton')->run($expression); ?>";
        });
	}

    public function registerConfigs()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/config/voyager-media.php', 'voyager-media'
        );
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $path = dirname(__DIR__);

        $publishable = [
            'media_assets' => [
                "{$path}/assets/" => public_path(config('voyager-media.assets_path')),
            ],
            'media_config' => [
                "{$path}/config/voyager-media.php" => config_path('voyager-media.php'),
            ],

        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
    }
}
