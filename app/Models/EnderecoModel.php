<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel Extends Model
{
	protected $table = 'enderecos';

	protected $fillable = 
	[
		'cep',
		'logradouro',
		'numero',
		'bairro',
		'cidade',
		'estado'
	];
}