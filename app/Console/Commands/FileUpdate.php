<?php

namespace App\Console\Commands;
use File;
use App\Calls;
use Illuminate\Console\Command;

class FileUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the Calls text file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Almacenar ubicacion y nuevo destino del archivo en variables
        $logPath        = public_path() . "/logs/calls.txt";
        $logDestination = public_path() . "/old_logs/old.txt";
        //Verificar que el archivo existe
        if (File::exists($logPath)) {
            //Leer el archivo linea por linea ignorando las lineas en blanco y lineas vacias
            foreach (file($logPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                //Crear Clase, dividir lineas en subcadenas y guardar en variables
                $calls                 = new Calls();
                $calls->time           = trim(substr($line, 0, 4));
                $calls->duration       = trim(substr($line, 5, 4));
                $calls->cond_code      = trim(substr($line, 10, 1));
                $calls->code_dial      = trim(substr($line, 15, 1));
                $calls->code_used      = trim(substr($line, 18, 3));
                $calls->dialed_num     = trim(substr($line, 24, 11));
                $calls->calling_num    = trim(substr($line, 39, 11));
                $calls->clg_num_in_tac = trim(substr($line, 53, 11));
                $calls->auth_code      = trim(substr($line, 64, 5));
                $calls->frl            = trim(substr($line, 70, 1));
                $calls->ixc_code       = trim(substr($line, 77, 3));
                $calls->in_crt_id      = trim(substr($line, 85, 3));
                $calls->save();
                // break;
            }
        } else {
            die();
        }
        //Mover el archivo que ya se procesó
        \File::move($logPath, $logDestination);
    }
}
