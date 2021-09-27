@include('painel/header')

<?php
use App\Models\Form;

Form::sb_FormBegin('Alterar Conta Contábil', 'validation');

Form::sb_FormText('Conta contábil', 'title', 'Defina um nome para conta', '800px', $conta->title, true);

Form::sb_FormCloneText('Tipo',  'tipo', '500px',$tipo);

Form::sb_FormSubmit('Salvar', '', 'sistema/edit-conta-contabil');

Form::sb_FormHidden('id', $conta->id);

Form::sb_FormEnd();


?>

@include('painel/footer')
