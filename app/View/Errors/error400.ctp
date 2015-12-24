<h2>
	<?php echo $name; ?>
</h2>
<p class="error">	
	<?php h('cake', 'The requested address %s was not found on this server.'); ?>
</p>
<?php
if (Configure::read('debug') > 0):
echo $this->element('exception_stack_trace');
endif;
?>
