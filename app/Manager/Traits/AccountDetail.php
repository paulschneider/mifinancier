<?php Namespace Manager\Traits;

Trait AccountDetail
{
	/**
	 * the unique identifier for the account record (table row id)
	 * @var int id
	 */
	public $id;

	/**
	 * name on the account
	 * @var string accountName
	 */
	public $accountName;

	/**
	 * sortcode of the account
	 * @var string sortCode
	 */
	public $sortCode;

	/**
	 * numerical account number
	 * @var int accountNumber
	 */
	public $accountNumber;

	/**
	 * name of the bank the account is held with
	 * @var string bankName
	 */
	public $bankName;

	/**
	 * human readable nickname of the accunt
	 * @var string nickName
	 */
	public $nickName;

	/**
	 * text description of the account
	 * @var string description
	 */
	public $description;

	/**
	 * single line address of the bank
	 * @var string address
	 */
	public $address;

	/**
	 * the balance of the account
	 * @var int balance
	 */
	public $balance = 0;

	/**
	 * the fields required when creating a new account
	 * @var array
	 */
	protected $requiredFields = [
		'accountNumber',
		'sortCode',
		'accountName',
		'bankName'
	];

	/**
	 * optional fields when creating/editing an account
	 * @var array
	 */
	protected $optionalFields = [
		'nickName',
		'address',
		'description'
	];
}