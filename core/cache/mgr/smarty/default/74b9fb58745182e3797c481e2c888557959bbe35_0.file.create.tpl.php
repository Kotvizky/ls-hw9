<?php /* Smarty version 3.1.27, created on 2017-04-20 13:31:25
         compiled from "E:\domains\homework9\manager\templates\default\resource\weblink\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:896058f88dfdc072e3_83815454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b9fb58745182e3797c481e2c888557959bbe35' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\resource\\weblink\\create.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896058f88dfdc072e3_83815454',
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
  'unifunc' => 'content_58f88dfdc20f94_58857559',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f88dfdc20f94_58857559')) {
function content_58f88dfdc20f94_58857559 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '896058f88dfdc072e3_83815454';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>