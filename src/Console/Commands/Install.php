<?php

namespace ProcessMaker\Package\Webentry\Console\Commands;

use Artisan;
use ProcessMaker\Console\PackageInstallCommand;

class Install extends PackageInstallCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webentry:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Webentry Package';

    /**
     * Publish assets
     * @return void
     */
    public function publishAssets()
    {
        $this->info('Publishing assets');
        Artisan::call('vendor:publish', [
            '--tag' => 'webentry',
            '--force' => true,
        ]);
    }

    public function preinstall()
    {
        $this->publishAssets();
    }

    public function install()
    {
    }

    public function postinstall()
    {
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        parent::handle();
        $this->info('Webentry has been installed');
    }
}
