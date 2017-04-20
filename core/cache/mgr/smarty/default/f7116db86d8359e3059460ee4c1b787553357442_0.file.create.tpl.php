<?php /* Smarty version 3.1.27, created on 2017-04-20 14:32:17
         compiled from "E:\domains\homework9\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2985058f89c41d689f6_33810704%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7116db86d8359e3059460ee4c1b787553357442' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2985058f89c41d689f6_33810704',
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
  'unifunc' => 'content_58f89c41d7ded4_58117112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f89c41d7ded4_58117112')) {
function content_58f89c41d7ded4_58117112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2985058f89c41d689f6_33810704';
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