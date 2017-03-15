<?php /* Smarty version 2.6.18, created on 2017-01-03 02:02:52
         compiled from file:/var/www/html/atoffice/webapp/modules/pc/templates/o_password_query.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_img_url_skin', 'file:/var/www/html/atoffice/webapp/modules/pc/templates/o_password_query.tpl', 49, false),array('function', 'math', 'file:/var/www/html/atoffice/webapp/modules/pc/templates/o_password_query.tpl', 93, false),array('modifier', 't_escape', 'file:/var/www/html/atoffice/webapp/modules/pc/templates/o_password_query.tpl', 51, false),array('block', 't_form_block', 'file:/var/www/html/atoffice/webapp/modules/pc/templates/o_password_query.tpl', 75, false),)), $this); ?>
<link href="./atoffice/css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
	<!--
table#table-01 {
    width: 880px;
    border: 0px;
    border-collapse: collapse;
    border-spacing: 0;
}

table#table-01 td {
    border: 0px;
    border-width: 0px;
    padding-top: 10px;
    padding-left: 10px;
    vertical-align:top;
    text-align:left;
}

-->
</style>

<div id="container">
<div id="header">
<h1></h1>
</div><!--heaer_end-->

<div id="menu">
<ul>
<li class="home"><a href="http://abc-kaigishitsu.com/">他の会場を探す</a></li>
<li><a href="./?page=reserved_info">会員用予約確認</a></li>
<li><a href="./?page=search">　</a></li>
</ul>

</div><!-- menu end -->

<div id="LayoutC">

<table id="table-01">
<tr>
<td width=20></td>
<td width=610>

<?php if (! $this->_tpl_vars['no_use_alert'] && ( $this->_tpl_vars['msg'] || $this->_tpl_vars['msg1'] || $this->_tpl_vars['msg2'] || $this->_tpl_vars['msg3'] || $this->_tpl_vars['err_msg'] )): ?>
<div class="dparts alertBox"><div class="parts">
<table><tr>
<th><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_alert_l'), $this);?>
" alt="警告" /></th>
<td style='text-align:center;vertical-align:middle;'>
<?php if ($this->_tpl_vars['msg']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['msg1']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg1']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['msg2']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg2']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['msg3']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg3']); ?>
<br /><?php endif; ?>
<?php $_from = $this->_tpl_vars['err_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
<br />
<?php endforeach; endif; unset($_from); ?>
</td>
</tr></table>
</div></div>
<?php endif; ?>

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>パスワード再設定</h3></div>

<div class="partsInfo">
<?php if (@IS_PASSWORD_QUERY_ANSWER): ?>
<p>登録したメールアドレスと、秘密の質問・答えを入力してください。<br />パスワードを再設定するためのURLが登録メールアドレス宛に送信されます。</p>
<?php else: ?>
<p>登録したメールアドレスを入力してください。<br />パスワードを再設定するためのURLが登録メールアドレス宛に送信されます。</p>
<?php endif; ?>
</div>

<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_o_password_query')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr><th>メールアドレス</th><td style='border: 1px #CDCDCD solid;'><input type="text" class="text" name="pc_address" value="" /></td></tr>
<?php if (@IS_PASSWORD_QUERY_ANSWER): ?>
<tr><th>秘密の質問</th><td style='border: 1px #CDCDCD solid;'>
<select name="c_password_query_id">
<option value="" selected="selected">選択してください</option>
<?php $_from = $this->_tpl_vars['c_password_query_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td></tr>
<tr><th>秘密の答え</th><td style='border: 1px #CDCDCD solid;'><input type="text" class="text" name="c_password_query_answer" value="" /></td></tr>
<?php endif; ?>
<?php if (@OPENPNE_USE_CAPTCHA): ?>
<tr>
<th>確認キーワード</th>
<td style='border: 1px #CDCDCD solid;'>
<p><img src="./cap.php?rand=<?php echo smarty_function_math(array('equation' => "rand(0,99999999)"), $this);?>
" alt="確認キーワード" /></p>
<p>※上に表示されているキーワードをご記入下さい。</p>
<input type="text" class="input_text" name="captcha" value="" size="30" />
</td>
</tr>
<?php endif; ?>
</table>

<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　送　信　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div></div>

</td><td width=5></td><td>

</td>
</tr>
</table>

</div><!-- LayoutC -->

</div>
<script type="text/javascript" src="./atoffice/js/ajax.js"></script>

<script type="text/javascript">
function PerformInputLink2(){
	LoadHTML('footer', 'sub/footer.html');
}
</script>
<div id="LoadingBar">
	<img border="0" src="./atoffice/img/loading.gif"/>
</div>
<div id="footer">
	<script type="text/javascript">PerformInputLink2();</script>
</div>