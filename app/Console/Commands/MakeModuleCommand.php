<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';
    protected Filesystem $files;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new module with the given name';
    /**
     * __construct
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Obtener el nombre del módulo
        $name = $this->argument('name');
        //Definir la ruta del módulo
        $modulePath = app_path("Modules/{$name}");

        //Estructura de directorios del módulo
        $directories = [
            "{$modulePath}/Contracts",
            "{$modulePath}/DTOs",
            "{$modulePath}/Models",
            "{$modulePath}/Repositories",
            "{$modulePath}/Services",
            "{$modulePath}/Controllers",
            "{$modulePath}/Requests",
            "{$modulePath}/Providers",
        ];

        foreach($directories as $directory) {
            if (!$this->files->isDirectory($directory)) {
                $this->files->makeDirectory($directory, 0755, true);
                $this->info("✓ Directorio creado: {$directory}");
            } else {
                $this->warn("El directorio ya existe: {$directory}");
            }
        }
    }
}
