<?php /* Smarty version 2.6.18, created on 2016-12-13 09:02:08
         compiled from file:E:%5CA_project%5Catoffice/webapp/modules/admin/templates/inc_subnavi_adminDesign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:E:\\A_project\\atoffice/webapp/modules/admin/templates/inc_subnavi_adminDesign.tpl', 3, false),)), $this); ?>
<div class="subNavi">
<?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('today_reservation')); ?><?php echo '">本日のご予約状況</a>&nbsp;|&nbsp;<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('tomorrow_reservation')); ?><?php echo '">予約状況検索</a>&nbsp;|&nbsp;<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('incomplete_list')); ?><?php echo '">未完了報告リスト</a>&nbsp;|&nbsp;<br><a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('rental_stop2')); ?><?php echo '">貸し止め(準備担当)</a>&nbsp;|&nbsp;'; ?>

</div>