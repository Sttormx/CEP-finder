<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\EnderecoModel;
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
		$enderecos = EnderecoModel::all();
		return view('listagem')->with([ 'enderecos' => $enderecos ]);
	}

	public function adicionar()
	{
		return view('busca');
	}

	public function search(Request $request)
	{
		$cep = $request->input("cep");
		$response = Http::get("viacep.com.br/ws/$cep/json/")->json();
		
		return view('adicionar')->with(
			[
				'cep' => $request->input("cep"),
				'logradouro' => $response['logradouro'],
				'bairro' => $response['bairro'],
				'cidade' => $response['localidade'],
				'estado' => $response['uf'],
			]);
	}

	public function save(SalvarRequest $request)
	{
		$endereco = EnderecoModel::where('cep', $request->input('cep'))->first();

		if ($endereco)
			return redirect('/')->withError('Endereco ja registrado.');
		
		EnderecoModel::create(
			[
				'cep' => $request->input('cep'),
				'logradouro' => $request->input('logradouro'),
				'numero' => $request->input('numero'),
				'bairro' => $request->input('bairro'),
				'cidade' => $request->input('cidade'),
				'estado' => $request->input('estado'),
			]
		);

		return redirect('/')->withSuccess('Cadastrado com sucesso!');
	}
}