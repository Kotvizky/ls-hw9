<?php /* Smarty version 3.1.27, created on 2017-04-17 23:11:58
         compiled from "E:\domains\homework9\manager\templates\default\element\tv\renders\properties\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1192858f5218e4767b1_72066244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac966780cd972b3fa35a4ad7b45ad5c32503ae2' => 
    array (
      0 => 'E:\\domains\\homework9\\manager\\templates\\default\\element\\tv\\renders\\properties\\richtext.tpl',
      1 => 1490679778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192858f5218e4767b1_72066244',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f5218e4c7f02_58562335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f5218e4c7f02_58562335')) {
function content_58f5218e4c7f02_58562335 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1192858f5218e4767b1_72066244';
?>
<div id="tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->tpl_vars['params']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_p']->value['total'];
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['last'] : null)) {?>,<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'textfield'
        ,fieldLabel: _('width')
        ,name: 'prop_w'
        ,id: 'prop_w<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['w'] || '100%'
        ,listeners: oc
        ,anchor: '100%'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('height')
        ,name: 'prop_h'
        ,id: 'prop_h<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['h'] || '300px'
        ,listeners: oc
        ,anchor: '100%'
    }]
    ,renderTo: 'tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
?>