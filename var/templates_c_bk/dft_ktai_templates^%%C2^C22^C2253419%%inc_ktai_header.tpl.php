<?php /* Smarty version 2.6.18, created on 2011-05-27 06:19:16
         compiled from file:/var/www/atoffice/webapp/modules/ktai/templates/inc_ktai_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/var/www/atoffice/webapp/modules/ktai/templates/inc_ktai_header.tpl', 5, false),)), $this); ?>
<?php echo '<html><head><meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS"><title>'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['title']); ?><?php echo '</title>'; ?><?php if (@OPENPNE_IS_SET_KTAI_FONT_SIZE): ?><?php echo ''; ?><?php if ($this->_tpl_vars['is_softbank']): ?><?php echo '<style type="text/css">*{font-size:small;}</style>'; ?><?php elseif ($this->_tpl_vars['is_au']): ?><?php echo '<style type="text/css">*{font-size:xx-small;}</style>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['inc_ktai_html_head']; ?><?php echo '</head><body'; ?><?php if (! ( $this->_tpl_vars['is_docomo'] && $this->_tpl_vars['ktai_color_config']['font_01'] == '000000' )): ?><?php echo ' text="#'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_color_config']['font_01']); ?><?php echo '"'; ?><?php endif; ?><?php echo ' bgcolor="#'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_color_config']['bg_01']); ?><?php echo '" link="#'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_color_config']['font_02']); ?><?php echo '" '; ?><?php if ($this->_tpl_vars['is_docomo']): ?><?php echo 'alink="#'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_color_config']['font_03']); ?><?php echo '"'; ?><?php endif; ?><?php echo ' vlink="#'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_color_config']['font_04']); ?><?php echo '">'; ?>

<?php echo $this->_tpl_vars['inc_ktai_header']; ?>
