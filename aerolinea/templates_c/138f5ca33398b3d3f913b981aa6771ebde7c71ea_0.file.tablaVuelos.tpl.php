<?php
/* Smarty version 3.1.39, created on 2021-11-03 22:47:50
  from 'D:\xampp\htdocs\proyectos\tipoParcial\templates\tablaVuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618303860ef661_29778511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138f5ca33398b3d3f913b981aa6771ebde7c71ea' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\tipoParcial\\templates\\tablaVuelos.tpl',
      1 => 1635976066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618303860ef661_29778511 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Num Vuelo</th>
        <th scope="col">Origen</th>
        <th scope="col">Destino</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'vuelo');
$_smarty_tpl->tpl_vars['vuelo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vuelo']->value) {
$_smarty_tpl->tpl_vars['vuelo']->do_else = false;
?>
            <tr> 
                <td><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->num_vuelo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['origen']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['destino']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fechaSalida;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->estado;?>
</td>
            </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
    </table>
    <a href="home" class="btn btn-outline-info">Volver al inicio</a>
</div><?php }
}
