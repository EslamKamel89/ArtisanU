<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Clear extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'eslam:clear';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'clear all laravel data';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		$this->call( 'config:clear' );
		$this->call( 'cache:clear' );
		$this->call( 'optimize:clear' );
		$this->info( 'clear success' );
	}
}
