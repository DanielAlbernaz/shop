<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Models\ContaContabil;
use App\Models\TipoConta;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerContaContabil extends Controller
{
    public function create(Request $request)
    {
        return view('painel.contaContabil.frmCadContaContabil');
    }

    public function store(Request $request)
    {

        $objConta = new ContaContabil();

        try {

            $objConta->title = $request->title;
            $objConta->save();

            for($i = 0; $i < count($request->tipo); $i++){
                $objTipoConta = new TipoConta();
                $objTipoConta->title = $request->tipo[$i];
                $objTipoConta->id_conta_contabil =  $objConta->id;
                $objTipoConta->save();
            }

             /**Log */
             createLog(auth()->user()->id, 'Adicionar', 'ContaContabil',  $objConta->id, $_SERVER['REMOTE_ADDR']);

            $retorno = [
                'situacao' => 'success',
                'form' => 'cad',
                'redirect' => 'sistema/listar-conta-contabil',
                'msg' => 'Cadastro salvo com sucesso!',
        ];
            return $retorno;
        } catch (Exception $e) {
            $retorno = [
                'situacao' => 'error',
                'form' => 'cad',
                'msg' => 'Erro ao salvar o cadastro!',
            ];
            return $retorno;
        }
 }

 function list(Request $request){
    $contas = ContaContabil::all();

    $contasList = array();
    for($i = 0; $i < count($contas); $i++){
        $contasList[$i]['ID'] = $contas[$i]->id;
        $contasList[$i]['CONTA CONTÁBIL'] = $contas[$i]->title;
    }

    if(count($contasList) == 0){
        $contasList[0]['ID'] = 0;
        $contasList[0]['CONTA CONTÁBIL'] = 0;
        }
    return view('painel.contaContabil.frmListaContaContabil', compact('contasList'));
 }

 function delete(Request $request){
    $conta = ContaContabil::find($request->id);
    $conta->delete();

    $tipoConta = TipoConta::where('id_conta_contabil', $request->id);
    $tipoConta->delete();

     /**Log */
     createLog(auth()->user()->id, 'Deletar', 'ContaContabil',  $request->id, $_SERVER['REMOTE_ADDR']);

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function find(Request $request){
    $conta = ContaContabil::find($request->id);
    $tipo = TipoConta::where('id_conta_contabil', $request->id)->get();

     return view('painel.contaContabil.frmAltContaContabil', compact('conta', 'tipo'));
  }

  function edit(Request $request){

    try {
        $objConta = ContaContabil::find($request->id);
        $objConta->title = $request->title;
        $objConta->save();

        $tipoConta = TipoConta::where('id_conta_contabil', $request->id);
        $tipoConta->delete();

        for($i = 0; $i < count($request->tipo); $i++){
            $objTipoConta = new TipoConta();
            $objTipoConta->title = $request->tipo[$i];
            $objTipoConta->id_conta_contabil = $request->id;
            $objTipoConta->save();
        }

        /**Log */
        createLog(auth()->user()->id, 'Alterar', 'ContaContabil',  $request->id, $_SERVER['REMOTE_ADDR']);

        $retorno = [
            'situacao' => 'success',
            'form' => 'alt',
            'redirect' => 'sistema/listar-conta-contabil',
            'msg' => 'Alteração realizada com sucesso!',
        ];
        return $retorno;

    } catch (Exception $e) {
        $retorno = [
            'situacao' => 'error',
            'form' => 'alt',
            'redirect' => 'sistema/listar-conta-contabil',
            'msg' => 'Erro ao realizar alteração!',
        ];
        return $retorno;
    }

 }
}
