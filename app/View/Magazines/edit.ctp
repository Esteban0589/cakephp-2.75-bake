<div class="magazines form">
<?php echo $this->Form->create('Magazine'); ?>
	<fieldset>
		<legend><?php echo __('Edit Magazine'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('publication');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Magazine.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Magazine.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Magazines'), array('action' => 'index')); ?></li>
	</ul>
</div>
