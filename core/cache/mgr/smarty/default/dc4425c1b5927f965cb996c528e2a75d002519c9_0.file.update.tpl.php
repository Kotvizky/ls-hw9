<?php /* Smarty version 3.1.27, created on 2017-04-20 12:57:20
         compiled from "E:\domains\homework9\manager\templates\default\resource\weblink\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3255758f88600b260b2_93421500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4425c1b5927f965cb996c528e2a75d002519c9' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\resource\\weblink\\update.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255758f88600b260b2_93421500',
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
  'unifunc' => 'content_58f88600c94230_21055737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f88600c94230_21055737')) {
function content_58f88600c94230_21055737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3255758f88600b260b2_93421500';
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