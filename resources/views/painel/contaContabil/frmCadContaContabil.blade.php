@include('painel/header')

<?php
use App\Models\Form;

Form::sb_FormBegin('Cadastro de conta contábil', 'validation');

Form::sb_FormText('Conta contábil', 'title', 'Defina um nome para conta', '800px', '', true);

Form::sb_FormCloneText('Tipo',  'tipo', '500px');

Form::sb_FormSubmit('Salvar', 'sistema/salvar-conta-contabil', '');

Form::sb_FormEnd();


?>

@include('painel/footer')


