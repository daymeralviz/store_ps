<?php /* Smarty version Smarty-3.1.7, created on 2018-09-11 03:08:29
         compiled from "C:\AppServ\www\Vtiger\vtigercrm7.1.0\vtigercrm\includes\runtime/../../layouts/v7\modules\Settings\ExtensionStore\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7623039345b9731ad4cb377-45478754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f037096712d94704792f5ea95bcecc33466989dd' => 
    array (
      0 => 'C:\\AppServ\\www\\Vtiger\\vtigercrm7.1.0\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Settings\\ExtensionStore\\Index.tpl',
      1 => 1520586670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7623039345b9731ad4cb377-45478754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b9731ad4ddeb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9731ad4ddeb')) {function content_5b9731ad4ddeb($_smarty_tpl) {?>
<div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-4 col-xs-4"><div class="row"><div class="col-sm-8 col-xs-8"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>