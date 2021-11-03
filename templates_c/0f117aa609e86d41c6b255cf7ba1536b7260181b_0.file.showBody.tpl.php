<?php
/* Smarty version 3.1.39, created on 2021-11-04 00:01:23
  from 'D:\xampp\htdocs\proyectos\tipoParcial\templates\showBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618314c309aeb1_85234639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f117aa609e86d41c6b255cf7ba1536b7260181b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\tipoParcial\\templates\\showBody.tpl',
      1 => 1635980478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618314c309aeb1_85234639 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

    <form action="api/buscar">
        <legend>Buscar vuelo</legend>

        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Ciudad Origen</label>
            <select name="origen" id="disabledSelect" class="form-select">
                <option disabled>Origen</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'ciudad', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['ciudad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ciudad']->value) {
$_smarty_tpl->tpl_vars['ciudad']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Ciudad Destino</label>
            <select name="destino" id="disabledSelect" class="form-select">
                <option disabled>Destino</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'ciudad', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['ciudad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ciudad']->value) {
$_smarty_tpl->tpl_vars['ciudad']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        
        <button type="buscar" class="btn btn-primary">Buscar</button>
        <a href="api/obtener" class="btn btn-primary">obtener</a>
    </form>
</div><?php }
}
