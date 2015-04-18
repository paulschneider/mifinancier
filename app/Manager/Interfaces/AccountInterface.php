<?php Namespace Manager\Interfaces;

Interface AccountInterface
{
	public function getBalance();
	public function getAccountType();
	public function getAccountTypeName();
	public function store();
	static function updateBalance(\int $balance);
	public static function validates(array $form);
}