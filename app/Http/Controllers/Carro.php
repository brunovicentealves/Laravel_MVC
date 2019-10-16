<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class Carro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carros = Carros::all();

      return view('layouts.listar', compact('carros',$carros));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
        $Carro = new Carros();
        $Carro -> marca = $request->marca;
        $Carro -> modelo = $request->modelo;
        $Carro -> placa = $request->placa;

        if($Carro ->save()){
         return redirect()->route('home')->with('msg', 'Cadastrado com sucesso !');
        }else{
          return redirect()->route('home')->with('msg', 'Erro ao cadastrar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function lista(){
                        return '<h1>Informações para Contato</h1>
                                   <b>Nome:</b> Luciano Alexandre <br />
                                   <b>Telefone:</b> (xx) xxxxx-xxxx <br />
                                   <b>e-mail:</b> luciano.cnrn@gmail.com <br />';
            }
}
