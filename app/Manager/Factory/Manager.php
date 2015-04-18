<?php namespace Manager\Factory;

use Manager\Factory\Dashboard;

Class Manager {

	/**
	 * The main app object
	 * @var app
	 */
	public $app;

	/**
	 * initialise the system
	 * @return Manager $this
	 */
	public function run()
	{
		return $this;
	}

	/**
	 * get the system dashboard data
	 * @return array $items
	 */
	public function getDashboard()
	{
		return $this->dashboard = New Dashboard();
	}
}