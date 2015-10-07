<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('title');
		echo $this->Form->input('edition');
		echo $this->Form->input('editorial');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.y')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Book.y')))); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
	</ul>
</div>
