<?php /* Smarty version 3.1.27, created on 2017-04-17 14:15:46
         compiled from "E:\domains\homework9\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1884058f4a3e26ba1c1_48398770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2e1979de531ca08f8109f643b8fa03a72d88c2' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\welcome.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884058f4a3e26ba1c1_48398770',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f4a3e26bc961_63481313',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f4a3e26bc961_63481313')) {
function content_58f4a3e26bc961_63481313 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1884058f4a3e26ba1c1_48398770';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>