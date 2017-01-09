<?php

namespace H34\Auth\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AuthInstall extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'auth34:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Instala y prepara el paquete H34/Auth.';

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
	public function fire()
	{

        $this->call('vendor:publish', ['--provider' => 'Zizaco\Entrust\EntrustServiceProvider']);
        $this->call('entrust:migration');
        $this->call('vendor:publish', ['--provider' => 'H34\Auth\AuthServiceProvider']);
		$this->call('optimize');
		$this->call('migrate');
	}

}
