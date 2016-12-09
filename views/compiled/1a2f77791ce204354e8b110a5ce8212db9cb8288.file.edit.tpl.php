<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 11:35:13
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273705847e2455c6432-38108672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481279711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273705847e2455c6432-38108672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847e245604387_32561339',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847e245604387_32561339')) {function content_5847e245604387_32561339($_smarty_tpl) {?><form action="./model/update.php" method="post">
<table>
       <tr>
            <td><input type="text" class="textField" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="Schoolname" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['name'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="street" name="street" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['street'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="streetNumber" name="streetNumber" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['streetNumber'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="zipCode" name="zipCode" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['zipCode'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="telNr" name="telNr" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['telNr'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="website" name="website" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['website'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="number" class="textField" placeholder="districts_id" name="districts_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['districts_id'];?>
" min="1" max="9" required></td>
        </tr>
        <tr>
            <td><input type="datetime-local" name="openday" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openday'];?>
" required></td>
        </tr>
        <tr>
            <td> <input type="datetime-local" name="openclass" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openclass'];?>
" required></td>
        </tr>    
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
       
</table>
<a href="index.php?action=admin">Keer terug</a>
    
</form><?php }} ?>
