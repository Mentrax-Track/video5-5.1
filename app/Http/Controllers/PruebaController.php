<?php namespace cinema\Http\Controllers;

use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PruebaController extends Controller {

	public function index()
	{
		return "Hola desde el controlador";
	}
	public function nombre($nombre)
	{
		return "Mi nombre por rutas es: ".$nombre;
	}
	public function create()
	{
		//
	}
	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		//
	}
	public function update($id)
	{
		//
	}
	public function destroy($id)
	{
		//
	}

}
