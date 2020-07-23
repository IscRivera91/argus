<?php

use Ayuda\Html;
use Ayuda\Redireccion;

$inputs = $controlador->htmlInputFormulario;
$pagina = "&pag={$controlador->obtenerNumeroPagina()}";

?>
<br>
<form autocomplete="off" role="form" method="POST"
      action="<?php echo Redireccion::obtener($controlador->nombreMenu,'modificar_bd',SESSION_ID,'',$_GET['registro_id']).$pagina ?>">
    <div class="row">
        <?php
            foreach ($inputs as $input) {
                echo $input;
            }
        ?>
    </div>
</form>
<?php echo Html::hr(); ?>