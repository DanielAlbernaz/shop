<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Models\ContaContabil;
use App\Models\Lancamento;
use App\Models\TipoConta;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Language;

class ControllerLancamento extends Controller
{
    public function create(Request $request)
    {
        $contaContabil = ContaContabil::all();

        return view('painel.lancamento.frmCadLancamento', \compact('contaContabil'));
    }

    public function buscaTipo(Request $request){
        $tipo = TipoConta::where('id_conta_contabil', $request->id)->get();

        $retorno = [
            'situacao' => 'success',
            'dado' => $tipo
        ];

        return $retorno;
    }

    public function store(Request $request)
    {
        $objLancamento = new Lancamento();

        try {

            $objLancamento->codigo_lancamento = $request->codigo_lancamento;
            $objLancamento->pessoa = $request->pessoa;
            $objLancamento->tipo = \utf8_decode($request->tipo);
            $valord = str_replace('.', '', $request->valor);
            $valor = str_replace(',', '.', $valord);
            $objLancamento->valor = ($valor ? $valor: NULL );
            $objLancamento->conta_contabil = $request->conta_contabil;
            $objLancamento->historico = $request->historico;
            $objLancamento->tipo_conta = $request->tipo_conta;
            $objLancamento->data = $request->data;
            $objLancamento->save();

             /**Log */
             createLog(auth()->user()->id, 'Adicionar', 'Lançamento',  $objLancamento->id, $_SERVER['REMOTE_ADDR']);

            $retorno = [
                'situacao' => 'success',
                'form' => 'cad',
                'redirect' => 'sistema/listar-lancamento',
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
    $lancamentos = Lancamento::all();

    $lancamentosList = array();
    for($i = 0; $i < count($lancamentos); $i++){
        $lancamentosList[$i]['ID'] = $lancamentos[$i]->id;
        $lancamentosList[$i]['CÓDIGO LANÇAMENTO'] = $lancamentos[$i]->codigo_lancamento;
        $lancamentosList[$i]['PESSOA'] = $lancamentos[$i]->pessoa;
        $lancamentosList[$i]['VALOR'] = 'R$ ' . number_format($lancamentos[$i]->valor, 2, ',', '.');
        $lancamentosList[$i]['DATA'] =  date_format(new DateTime($lancamentos[$i]->data), 'd/m/Y H:i:s');
    }

    if(count($lancamentosList) == 0){
        $lancamentosList[0]['ID'] = 0;
        $lancamentosList[0]['CÓDIGO LANÇAMENTO'] = 0;
        $lancamentosList[0]['PESSOA'] = 0;
        $lancamentosList[0]['VALOR'] = 0;
        $lancamentosList[0]['DATA'] = 0;
        }
    return view('painel.lancamento.frmListaLancamento', compact('lancamentosList'));
 }

 function delete(Request $request){
    $lancamento = Lancamento::find($request->id);
    $lancamento->delete();

     /**Log */
     createLog(auth()->user()->id, 'Deletar', 'Lançamento',  $request->id, $_SERVER['REMOTE_ADDR']);

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function find(Request $request){
    $lancamento = Lancamento::find($request->id);

     return view('painel.lancamento.frmAltLancamento', compact('lancamento'));
  }

  function edit(Request $request){

    try {
        $objLancamento = Lancamento::find($request->id);
        $objLancamento->title = $request->title;
        $objLancamento->save();

        /**Log */
        createLog(auth()->user()->id, 'Alterar', 'Lancamento',  $request->id, $_SERVER['REMOTE_ADDR']);

        $retorno = [
            'situacao' => 'success',
            'form' => 'alt',
            'redirect' => 'sistema/listar-lancamento',
            'msg' => 'Alteração realizada com sucesso!',
        ];
        return $retorno;

    } catch (Exception $e) {
        $retorno = [
            'situacao' => 'error',
            'form' => 'alt',
            'redirect' => 'sistema/listar-lancamento',
            'msg' => 'Erro ao realizar alteração!',
        ];
        return $retorno;
    }

 }
}
