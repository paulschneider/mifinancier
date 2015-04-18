<?php namespace App\Http\Controllers;

Use Manager\Factory\Account;

Class AccountController extends Controller {

	/**
	 * create a new account
	 * @return view
	 */
	public function typeSelect()
	{
		return View('account.select');
	}

	/**
	 * create a new account of the supplied type
	 * @param  string $accountType the type of account to create
	 * @return view
	 */
	public function create($accountType = "current")
	{
		# create a new account of the type requested
		$account = New Account($accountType);

		return View("account." . $accountType . ".new", [
			'account' => $account->getAccount(),
		]);
	}

	/**
	 * save the details of a new or existing account
	 * @return Redirect
	 */
	public function store()
	{
		# create a new account of the type requested
		$type = "Manager\Factory\\".$_POST['accountType'];
		$account = New $type();
		
		# if we validate the submission correctly 
		if( $account::validates($_POST) )
		{
			# then store the data
			
			# and then show the account listing page
		}

		# otherwise re-show the view with some errors
		return View("account." . $accountType . ".new", [
			'account' => $account->getAccount(),
		]);
	}
}