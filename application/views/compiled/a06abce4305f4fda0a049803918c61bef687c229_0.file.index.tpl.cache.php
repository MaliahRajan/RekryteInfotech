<?php /* Smarty version 3.1.27, created on 2016-02-14 10:47:05
         compiled from "C:\xampp\htdocs\rekryte\RekryteInfotechFinal\application\views\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1634856c04d197d1f75_34678085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a06abce4305f4fda0a049803918c61bef687c229' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rekryte\\RekryteInfotechFinal\\application\\views\\templates\\index.tpl',
      1 => 1455440288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1634856c04d197d1f75_34678085',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c04d1983b764_64425191',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c04d1983b764_64425191')) {
function content_56c04d1983b764_64425191 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1634856c04d197d1f75_34678085';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>