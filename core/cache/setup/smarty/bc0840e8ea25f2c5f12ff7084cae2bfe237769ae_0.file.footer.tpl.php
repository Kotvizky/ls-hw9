<?php /* Smarty version 3.1.27, created on 2017-04-17 14:15:13
         compiled from "E:\domains\homework9\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:357958f4a3c177fe71_49228969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc0840e8ea25f2c5f12ff7084cae2bfe237769ae' => 
    array (
      0 => 'E:\\domains\\homework9\\setup\\templates\\footer.tpl',
      1 => 1490679794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357958f4a3c177fe71_49228969',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f4a3c178d084_53072154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f4a3c178d084_53072154')) {
function content_58f4a3c178d084_53072154 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/domains/homework9/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '357958f4a3c177fe71_49228969';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>