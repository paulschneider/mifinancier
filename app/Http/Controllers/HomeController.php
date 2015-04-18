<?php namespace App\Http\Controllers;

use \Manager\Factory\Manager;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$manager = New Manager();
			
		# initialise the app
		$app = $manager->run();

		# get the system dashboard items
		$app->getDashboard();

		# load the dashboard
		return View('dashboard.index', compact($app));
	}
}