<?php

namespace App\Console\Commands;

use App\Criador;
use App\Exceptions\ConfigNotFoundException;
use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class CarregadorDeCursos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carregador:cursos {criadorId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para carregar cursos de escolas';

    /**
     * Variavel que guarda endereço do projeto carregadores
     *
     * @var string
     */
    public $scriptsDir;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->scriptsDir = env('SCRIPTS_CARREGADORES_DIR');
        if ($this->scriptsDir === null) {
            throw new ConfigNotFoundException('Configuração SCRIPTS_CARREGADORES_DIR não encontrada no arquivo .env');
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $criadorId = $this->argument('criadorId');
        $criador = Criador::find($criadorId);

        $comando = 'casperjs ' . $this->scriptsDir . $criador->casperScript . ' --carregadores-dir=' . $this->scriptsDir;

        $processo = new Process($comando);
        $processo->run();
        if (!$processo->isSuccessful()) {
            throw new ProcessFailedException($processo);
        }

        $json = $processo->getOutput();
        $this->line($json);
    }
}
