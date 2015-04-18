@extends('layouts.default')

@include('layouts.header')

@section('content')
	<h1>Create a new <strong>{{ strtolower($account->getAccountType()) }}</strong></h1>

	<form name="account" action="{{ baseUrl() }}account/store" method="post">
		<input type="hidden" name="id" value="{{ $account->id }}" />
		<input type="hidden" name="accountType" value="{{ $account->getAccountType() }}" />
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"

		<h2>Account Details</h2>
		<ul>
			<li>
				<label for="sortCode">Sort Code</label>
				<input type="text" id="sortCode" name="sortCode1" value="" />
				<input type="text" name="sortCode2" value="" />
				<input type="text" name="sortCode3" value="" />
			</li>
			<li>
				<label for="accountNumber">Account Number</label>
				<input type="text" id="accountNumber" name="accountNumber" value="{{ $account->accountNumber }}" />
			</li>
			<li>
				<label for="accountName">Account Name</label>
				<input type="text" id="accountName" name="accountName" value="{{ $account->accountName }}" />
			</li>
			<li>
				<label for="bankName">Bank Name</label>
				<input type="text" id="bankName" name="bankName" value="{{ $account->bankName }}" />
			</li>
		</ul>		
		<h2>Optional Details</h2>
		<ul>
			<li>
				<label for="nickname">Nickname</label>
				<input type="text" id="nickname" name="nickname" value="{{ $account->nickName }}" />
			</li>
			<li>
				<label for="address">Address</label>
				<input type="text" id="address" name="address" value="{{ $account->address }}" />
			</li>			
		</ul>
		<h2>Current Balance</h2>
		<ul>
			<li>
				<label for="balance">What is the current balance of this account</label>
				<input type="text" id="balance" name="balance" value="{{ $account->getBalance() }}" />
			</li>
			<li class="submit">
				<input type="submit" name="submit" value="Save" />
			</li>
		</ul>
	</form>
	<p><a href="{{ baseUrl() }}account/new">< Go Back</a></p>
@endsection

@include('layouts.footer')