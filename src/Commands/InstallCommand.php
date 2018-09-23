<?php

namespace VoyagerMedia\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use TCG\Voyager\Traits\Seedable;
use VoyagerMedia\VoyagerMediaServiceProvider;

class InstallCommand extends Command
{
    use Seedable;

    protected $seedersPath = __DIR__.'/../../database/seeds/';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'voyager-media:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Voyager Media package';

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    protected function findComposer()
    {
        if (file_exists(getcwd().'/composer.phar')) {
            return '"'.PHP_BINARY.'" '.getcwd().'/composer.phar';
        }

        return 'composer';
    }

    public function fire(Filesystem $filesystem)
    {
        return $this->handle($filesystem);
    }

    /**
     * Execute the console command.
     *
     * @param \Illuminate\Filesystem\Filesystem $filesystem
     *
     * @return void
     */
    public function handle(Filesystem $filesystem)
    {
        $this->info('Publishing the VoyagerMedia assets, database, and config files');

        //Publish only relevant resources on install
        $tags = ['media_assets', 'media_seeds'];

        $this->call('vendor:publish', ['--provider' => VoyagerMediaServiceProvider::class, '--tag' => $tags]);

       // $this->info('Migrating the database tables into your application');
       // $this->call('migrate');


        //$this->info('Seeding data into the database');
        //$this->seed('VoyagerMediaDatabaseSeeder');

       //$this->info('Seeding dummy data');
       //$this->seed('VoyagerMediaDummyDatabaseSeeder');


        $this->info('Successfully installed Voyager Shop! Enjoy');
    }
}
