<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationsController extends Controller
{
	public function store(Request $request) {
		$this->validate($request, [
			'email.*' => 'required|email'
		], [
		'email.*' => 'This address must be formatted properly.'
	]);
		return 'All items are valid.';
	}
}
