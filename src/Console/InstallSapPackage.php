<?php

namespace Protendai\SapBusinessOne\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallSapPackage extends Command
{
    protected $signature = 'sap:install';

    protected $description = 'Install the SapBusinessOnePackage';

    public function handle()
    {
        $this->info('Installing SapBusinessOnePackage...');

        $this->info('Publishing configuration...');

        if (! $this->configExists('sap.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration');
        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten');
            }
        }

        $this->info('Installed SapBusinessOnePackage');
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm(
            'Config file already exists. Do you want to overwrite it?',
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "Protendai\SapBusinessOne\SapBusinessOneServiceProvider",
            '--tag' => "config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

       $this->call('vendor:publish', $params);
    }
}