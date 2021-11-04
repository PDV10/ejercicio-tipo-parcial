<?php
/* Smarty version 3.1.39, created on 2021-11-03 22:46:49
  from 'D:\xampp\htdocs\proyectos\tipoParcial\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61830349503279_35592142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4f91a120cd62fa41ad0d09fc8b0769559eb495' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\tipoParcial\\templates\\showError.tpl',
      1 => 1635976007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/showHeader.tpl' => 1,
    'file:templates/showFooter.tpl' => 1,
  ),
),false)) {
function content_61830349503279_35592142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\proyectos\\tipoParcial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender("file:templates/showHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container mt-5">
        <div class="card text-center text-white bg-dark mb-3">
            <div class="card-header">
                <h1>Ups Algo Salio Mal 😕</h1>
            </div>
            <div class="card-body">
                <h4 class="error mb-5"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['msg']->value);?>
</h4>
                <a href="home" class="btn btn-outline-info">Volver al inicio</a>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/showFooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
