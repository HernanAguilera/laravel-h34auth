<?php

namespace H34\DivisionTerritorial\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DivisionTerritorialSeed extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'division-territorial:seed';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Ejecutar seeds de división territorial.';

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
		$this->info('Ejecutando Seeds... esto puede tomar algunos minutos... por favor espere...');
		$this->call('db:seed', ['--class' => 'VenezuelaTableSeeder']);
		$this->info('¡Seeds ejecutados con exito! :-)');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	// protected function getArguments()
	// {
	// 	return [
	// 		['example', InputArgument::REQUIRED, 'An example argument.'],
	// 	];
	// }

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	// protected function getOptions()
	// {
	// 	return [
	// 		['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
	// 	];
	// }

}
