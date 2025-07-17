<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Eslam extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'eslam:all';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate all the files for ide helper package in one command';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		$this->call( 'ide-helper:generate' );
		$this->call( 'ide-helper:models', [ '--write' => true ] );
		$this->call( 'ide-helper:meta' );
		$this->info( 'IDE Helper files generated successfully!' );
	}
}
