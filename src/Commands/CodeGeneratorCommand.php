<?php

namespace LucasandreDev\LaravelCodeGenerator\Commands;

use Illuminate\Console\Command;
use LucasandreDev\LaravelCodeGenerator\CodeGeneratorBuilder;

class CodeGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code:generate {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws \Exception
     */
    public function handle()
    {
        $defaultTemplate = "clean-architecture";

        $mustForce = $this->option('force');
        $entity = $this->ask('Qual o nome da entidade no singular? - Ex.: Customer');
        $template = $this->ask('Qual template deseja utilizar? - <fg=yellow> [Default: '.$defaultTemplate.'] </>');

        if (empty($template)){
            $template = $defaultTemplate;
        }

        CodeGeneratorBuilder::builder($entity, $mustForce)->operation($template)->render();
    }
}
