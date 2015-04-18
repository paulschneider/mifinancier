<?php Namespace Manager\Factory;

Class Dashboard {
	
	/**
	 * dashboard items to display
	 * @var array $items
	 */
	public $items = [];

	/**
	 * List of actions each dashboard will initialise on each page load
	 * @var array $actions
	 */
	private $actions = [
		'getAccountList',
		'getWarnings',
		'getReminders',
	];

	/**
	 * class constructor
	 */
	public function __construct()
	{
		foreach($this->actions AS $action)
		{
			$this->$action();
		}
	}

	/**
	 * a list of accounts for the authenticated user
	 * @return null
	 */
	protected function getAccountList()
	{
		$this->items['accounts'][] = "Account1";
		$this->items['accounts'][] = "Account2";
	}

	/**
	 * a list of warnings for the authenticated user
	 * @return null
	 */
	protected function getWarnings()
	{
		$this->items['warning'][] = "Warning1";
	}

	/**
	 * a list of reminders for the authenticated user
	 * @return null
	 */
	protected function getReminders()
	{
		$this->items['reminders'][] = "Reminder1";
	}
}