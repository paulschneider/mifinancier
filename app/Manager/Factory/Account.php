<?php Namespace Manager\Factory;

Class Account
{
	protected $account;

	/**
	 * class constructor
	 * @param string $type the type of account to create
	 */
	public function __construct($type)
	{
		# create a new account object based on the type selected
		$account = "Manager\Factory\\". ucwords($type) ."Account";
		
		$this->account = New $account();
	}

	/**
	 * return the new sub-account object as created by the constructor
	 * @return Manager\Factory\[CurrentAccount|SavingsAccount|LoanAccount]
	 */
	public function getAccount()
	{
		return $this->account;
	}
}