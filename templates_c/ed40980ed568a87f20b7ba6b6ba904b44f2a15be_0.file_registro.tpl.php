<?php
/* Smarty version 5.6.0, created on 2025-11-30 23:20:48
  from 'file:registro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692cd150520ac3_97110617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed40980ed568a87f20b7ba6b6ba904b44f2a15be' => 
    array (
      0 => 'registro.tpl',
      1 => 1764544845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692cd150520ac3_97110617 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1623620391692cd150500db2_71631493', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1623620391692cd150500db2_71631493 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<h2>Registro de Docente</h2>

<?php if ((true && ($_smarty_tpl->hasVariable('mensaje') && null !== ($_smarty_tpl->getValue('mensaje') ?? null)))) {?>
  <p><?php echo $_smarty_tpl->getValue('mensaje');?>
</p>
<?php }?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center">
          <h4>Registro de Docente</h4>
        </div>
        <div class="card-body">
          <form name="registro_usuario" id="registro_usuario" method="POST" action="registro_docente.php"
                onsubmit="return validarCamposRegistroUsuario()">
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre"
                     onKeyPress="borrarValidacionregistro('nombre')">
                     <br>
              <small id="error-nombre" class="text-danger d-none"><div class="alert alert-danger alert-dismissible fade show" role="alert">Te falta ingresar el nombre.</div></small>
            </div>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" id="apellido"
                     onKeyPress="borrarValidacionregistro('apellido')">
              <small id="error-apellido" class="text-danger d-none">Te falta ingresar el apellido.</small>
            </div>

            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario"
                     onKeyPress="borrarValidacionregistro('usuario')">
              <small id="error-usuario" class="text-danger d-none">Te falta ingresar el usuario.</small>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password" id="password"
                     onKeyPress="borrarValidacionregistro('password')">
              <small id="error-password" class="text-danger d-none">Te falta ingresar la contraseña.</small>
            </div>

            <div class="mb-3">
              <label for="especialidad" class="form-label">Especialidad</label>
              <input type="text" class="form-control" name="especialidad" id="especialidad"
                     onKeyPress="borrarValidacionregistro('especialidad')">
              <small id="error-especialidad" class="text-danger d-none">Te falta ingresar la especialidad.</small>
            </div>

            <div class="d-flex justify-content-between">
              <input class="btn btn-outline-primary" type="submit" value="Registrar">
              <a href="login.php" class="btn btn-outline-secondary">Volver al Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
}
}
/* {/block "contenido"} */
}
