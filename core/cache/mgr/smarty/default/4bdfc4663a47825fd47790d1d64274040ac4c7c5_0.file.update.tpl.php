<?php /* Smarty version 3.1.27, created on 2017-04-20 14:32:48
         compiled from "E:\domains\homework9\manager\templates\default\resource\staticresource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1138958f89c6081fe48_31895081%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bdfc4663a47825fd47790d1d64274040ac4c7c5' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138958f89c6081fe48_31895081',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f89c60841910_68916976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f89c60841910_68916976')) {
function content_58f89c60841910_68916976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1138958f89c6081fe48_31895081';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>