<div class="magazines form">
<?php echo $this->Form->create('Magazine'); ?>
	<fieldset>
		<legend><?php echo __('Add Magazine'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('publication');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Magazines'), array('action' => 'index')); ?></li>
	</ul>
</div>
