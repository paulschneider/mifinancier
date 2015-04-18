<?php Namespace Manager\Factory;

use Manager\Interfaces\AccountInterface AS AccountInterface;
use Manager\Repositories\Db\AccountRepository AS repo;
use Manager\Validators\CurrentAccountValidator AS validator;

Class CurrentAccount implements AccountInterface
{	
	/**
	 * Use the AccountDetail trait
	 */
	use \Manager\Traits\AccountDetail;

	/**
	 * Manager\Repositories\Db\AccountRepository
	 * @var repo
	 */
	protected $repo;

	/**
	 * Class constant for account type
	 */
	CONST ACCOUNT_TYPE_NAME = "Current Account";

	/**
	 * Class constructor
	 */
	public function __construct()
	{
		# the repository to use
		$this->repo = New Repo();	
	}

	/**
	 * get the balance of the account
	 * @return int $balance
	 */
	public function getBalance()
	{
		return $this->balance;
	}

	/**
	 * get the name of the type of account
	 * @return string ACCOUNT_TYPE
	 */
	public function getAccountTypeName()
	{
		return self::ACCOUNT_TYPE_NAME;
	}

	/**
	 * return the class name as a string, minus the namespace
	 * @return string class name
	 */
	public function getAccountType()
	{
		# return the name of the class without the namespace.
		return substr(get_class(), strlen(__NAMESPACE__)+1);
	}

	/**
	 * store the details of the account to the data store
	 * @return boolean true on success | false on failure
	 */
	public function store()
	{
		try
		{
			$this->repo->store($this);
		}
		catch(Exception $e)
		{
			throw new Exception("The account could not be saved to the data store");
		}
	}

	/**
	 * Update the balance of the account
	 * @return null
	 */
	static function updateBalance(int $balance)
	{

	}

	/**
	 * validate submitted form data
	 * @param  array  $form form fields submitted when editing or creating an account
	 * @return boolean
	 */
	public static function validates(array $form)
	{
		# the validator to use
		$validator = New Validator();

		return $validator->run($form);
	}
}