<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Endereco extends Controller
{
	/**
	 * Show the profile for a given user.
	 *
	 * @param  int  $id
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('busca');
	}

	public function search(Request $request)
	{
		$cep = $request->input("cep");
		$response = Http::get("viacep.com.br/ws/$cep/json/")->json();
		dd($response);
	}
}