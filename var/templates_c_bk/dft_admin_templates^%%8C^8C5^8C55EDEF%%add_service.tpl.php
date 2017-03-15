<?php /* Smarty version 2.6.18, created on 2011-06-10 15:40:07
         compiled from file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 2, false),array('modifier', 't_escape', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 29, false),array('modifier', 'nl2br', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 136, false),array('modifier', 't_url2cmd', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 136, false),array('modifier', 't_cmd', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 136, false),array('modifier', 't_decoration', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 136, false),array('modifier', 'default', 'file:/var/www/atoffice/webapp/modules/admin/templates/add_service.tpl', 138, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminImageKakikomi.tpl"), $this);?>

<?php if ($this->_tpl_vars['delete_flag'] == 1): ?>
<?php $this->assign('page_name', "サービス編集"); ?>
<?php elseif ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php $this->assign('page_name', "サービス削除"); ?>
<?php else: ?>
<?php $this->assign('page_name', "サービス登録"); ?>
<?php endif; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminImageKakikomi.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['atoffice_auth_type'] == 1 || $this->_tpl_vars['atoffice_auth_type'] == 4): ?>

<style type="text/css">
<!--
HR {
	border-style:dotted;color:#3399FF

}
-->
</style>

<?php if ($this->_tpl_vars['delete_flag'] == 1): ?>
<h2 id="ttl01">サービス編集【<?php echo smarty_modifier_t_escape($this->_tpl_vars['hall_name']); ?>
】</h2>
<?php elseif ($this->_tpl_vars['delete_flag'] == 2): ?>
<h2 id="ttl01">サービス削除【<?php echo smarty_modifier_t_escape($this->_tpl_vars['hall_name']); ?>
】</h2>
<?php else: ?>
<h2 id="ttl01">サービス登録【<?php echo smarty_modifier_t_escape($this->_tpl_vars['hall_name']); ?>
】</h2>
<?php endif; ?>
<br>
<div align=right>
<form name="add_room" method="POST" action="./">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('service_list','page')); ?>
" />
<input type="hidden" name="hall_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['hall_id']); ?>
">
<input type="submit" value="　サービス一覧へ戻る　">
</form>
</div>
<br>
<center>
<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<p class="actionMsg">以下のサービスを削除します。よろしいですか？</p>
※ このサービスが利用中の場合、部屋の利用リストからも削除されます。
<?php endif; ?>
<br><br>

<form name="add_service" method="POST" action="./">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('add_service','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="hall_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['hall_id']); ?>
" >
<?php if ($this->_tpl_vars['service_id']): ?>
<input type="hidden" name="service_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_id']); ?>
" >
<input type="hidden" name="delete_flag" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['delete_flag']); ?>
" >
<?php endif; ?>

<table border=1 width=700>
<tr>
<td width="100" align="right" bgcolor="#FFD9DC" ><span style="margin:5px">
<b>サービス名称</b>：</span></td>
<td colspan="5" bgcolor="#FFD9DC" align=left><span style="margin:5px">
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['service_name']); ?>

<input type="hidden" name="service_name" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['service_name']); ?>
" size=40 />
<?php else: ?>
<input type="text" name="service_name" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['service_name']); ?>
" size=40 />
<?php endif; ?>
</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFFFCC" ><span style="margin:5px">
<b>使用料金</b>：</span></td>
<td colspan="5" bgcolor="#FFFFCC" align=left><span style="margin:5px">
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['price']); ?>
 円
<?php else: ?>
<input type="text" name="price" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['price']); ?>
" size=10 /> 円
<?php endif; ?>
</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFD9DC" ><span style="margin:5px">
<b>最低予約数</b>：</span></td>
<td colspan="5" bgcolor="#FFD9DC" align=left><span style="margin:5px">
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['minimum_orders']); ?>

<?php else: ?>
<input type="text" name="minimum_orders" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['minimum_orders']); ?>
" size=10 />個以上の注文から予約を受け付けます。
<?php endif; ?>
</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFFFCC" ><span style="margin:5px">
<b>並び順</b>：</span></td>
<td colspan="5" bgcolor="#FFFFCC" align=left><span style="margin:5px">

<input type="text" name="weight" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['weight']); ?>
" size=10 />(数値の大きい順)

</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFD9DC" ><span style="margin:5px">
<b>キャンセル</b>：</span></td>
<td colspan="5" bgcolor="#FFD9DC" align=left><span style="margin:5px">
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php if ($this->_tpl_vars['service_list']['cancel_mode'] == 1): ?>キャンセル料に含む<?php else: ?>キャンセル料に含まない<?php endif; ?>
<?php else: ?>
<input type="radio" name="cancel_mode" value="1" <?php if ($this->_tpl_vars['service_list']['cancel_mode'] == 1): ?>checked<?php endif; ?>> キャンセル料に含む　
<input type="radio" name="cancel_mode" value="2" <?php if ($this->_tpl_vars['service_list']['cancel_mode'] == 2): ?>checked<?php endif; ?>> キャンセル料に含まない
<?php endif; ?>
</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFFFCC" ><span style="margin:5px">
<b>状態</b>：</span></td>
<td colspan="5" bgcolor="#FFFFCC" align=left><span style="margin:5px">
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php if ($this->_tpl_vars['service_list']['flag'] == 1): ?>公開<?php else: ?>非公開<?php endif; ?>
<?php else: ?>
<input type="radio" name="flag" value="1" <?php if ($this->_tpl_vars['service_list']['flag'] == 1): ?>checked<?php endif; ?>> 公開　
<input type="radio" name="flag" value="2" <?php if ($this->_tpl_vars['service_list']['flag'] == 2): ?>checked<?php endif; ?>> 非公開
<?php endif; ?>
</span></td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFD9DC" ><span style="margin:5px">
<b>メモ１</b>：<br>（公開）</span></td>
<td colspan="5" bgcolor="#FFD9DC" align=left>
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['service_list']['memo1']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')))) ? $this->_run_mod_handler('t_decoration', true, $_tmp) : smarty_modifier_t_decoration($_tmp)); ?>

<?php else: ?>
<textarea id="mce_editor_textarea" name="memo1" rows="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_rows']))) ? $this->_run_mod_handler('default', true, $_tmp, '4') : smarty_modifier_default($_tmp, '4')); ?>
" cols="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_cols']))) ? $this->_run_mod_handler('default', true, $_tmp, '70') : smarty_modifier_default($_tmp, '70')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['memo1']); ?>
</textarea>
<?php endif; ?>
</td>
</tr>
<tr>
<td width="100" align="right" bgcolor="#FFFFCC" ><span style="margin:5px">
<b>メモ２</b>：<br>（管理用）</span></td>
<td colspan="5" bgcolor="#FFFFCC" align=left>
<?php if ($this->_tpl_vars['delete_flag'] == 2): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['service_list']['memo2']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')))) ? $this->_run_mod_handler('t_decoration', true, $_tmp) : smarty_modifier_t_decoration($_tmp)); ?>

<?php else: ?>
<textarea id="mce_editor_textarea" name="memo2" rows="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_rows']))) ? $this->_run_mod_handler('default', true, $_tmp, '4') : smarty_modifier_default($_tmp, '4')); ?>
" cols="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_cols']))) ? $this->_run_mod_handler('default', true, $_tmp, '70') : smarty_modifier_default($_tmp, '70')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['service_list']['memo2']); ?>
</textarea>
<?php endif; ?>
</td>
</tr>
<tr>
<td align=center colspan=6>

<?php if ($this->_tpl_vars['delete_flag'] == 1): ?>
<input type="submit" value="　変　更　">
<?php elseif ($this->_tpl_vars['delete_flag'] == 2): ?>
<input type="submit" value="　削　除　">
<?php else: ?>
<input type="submit" value="　登　録　">
<?php endif; ?>

</td>
</tr>
</table>
</form>

</center>

<?php else: ?>
<br>
<center>
<span style="font-size: 16px; color: #FF0033;"><b>アクセス権がありません。</b></span>
</center>
<?php endif; ?>
<div>
<?php echo $this->_tpl_vars['inc_footer']; ?>
