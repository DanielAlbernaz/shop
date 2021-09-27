@include('painel/header')

<?php
use App\Models\Form;

Form::sb_FormBegin('Cadastro de lançamento', 'validation');

Form::sb_FormText('Código lançamento', 'codigo_lancamento', 'Defina um código para o lançamento', '250px', '', true);

Form::sb_FormText('Pessoa', 'pessoa', 'Defina uma pessoa para o lançamento', '800px', '', false);

$opcaoTipo[] = "<option value='Debito' >Débito</option>";
$opcaoTipo[] .= "<option value='Credito' >Crédito</option>";
Form::sb_FormSelect('Tipo', 'tipo', $opcaoTipo, '250px', false);

Form::sb_FormMoney('Valor', 'valor', 'Escreva o valor do lançamento', '250px','', false);

$opcaoContaContabil[] = "<option value='' selected>Selecione</option>";
for($i = 0; $i < count($contaContabil); $i++){
    $opcaoContaContabil[] = "<option value='". $contaContabil[$i]['id'] ."' >". $contaContabil[$i]['title'] ."</option>";
}
Form::sb_FormSelectOnchange('Conta Contábil', 'conta_contabil', $opcaoContaContabil, '250px', false);

?>
<div id="tipoHrml" ></div>
<?php

Form::sb_FormTextHtml('Histórico', 'historico', 'Escreva os detalhes do histórico', '', false);

Form::sb_FormDate('Data', 'data', 'Data lançamento', '289px', '', false);

Form::sb_FormSubmit('Salvar', 'sistema/salvar-lancamento', '');

Form::sb_FormEnd();

$path = urlDomain('busca-lancamento');


?>

<script>

function tipoContaContabil(id){
    jQuery.ajax({
        url:  '<?php print $path; ?>' + id,
        type: "POST",
        dataType: "JSON",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{id:id},
        success: function( data )
        {
            if(data.situacao == 'success'){

                $('#tipoHrml').html('');

                var html = '';
                html +='<div class="form-group row">';
                    html +='<label class="col-sm-2 col-form-label">Tipo Conta </label>';
                    html +='<div class="col-sm-10">';
                        html +='<select id="tipo_conta" name="tipo_conta" class="form-control m-b" style="width:250px" >';
                            html +='<option value="" selected="">Selecione</option>';
                            for(var i = 0; i < data.dado.length; i++){
                                html +='<option value="'+ data.dado[i].id +'">'+ data.dado[i].title +'</option>';
                            }
                        html +='</select>';
                    html +='</div>';
                html +='</div>';
                html +='<div class="hr-line-dashed"></div>';

                $('#tipoHrml').append(html);

            }
            if(data.situacao == 'error'){

            }
        }
    });


    }

</script>

@include('painel/footer')


