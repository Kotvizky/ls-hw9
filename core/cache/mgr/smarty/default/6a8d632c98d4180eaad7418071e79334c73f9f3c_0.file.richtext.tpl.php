<?php /* Smarty version 3.1.27, created on 2017-04-17 23:15:28
         compiled from "E:\domains\homework9\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2757158f52260d17792_58135112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8d632c98d4180eaad7418071e79334c73f9f3c' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1490679778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2757158f52260d17792_58135112',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f52260d80834_21029986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f52260d80834_21029986')) {
function content_58f52260d80834_21029986 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2757158f52260d17792_58135112';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>