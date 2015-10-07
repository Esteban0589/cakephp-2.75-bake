<div class="magazines view">
<h2><?php echo __('Magazine'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($magazine['Magazine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($magazine['Magazine']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publication'); ?></dt>
		<dd>
			<?php echo h($magazine['Magazine']['publication']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Magazine'), array('action' => 'edit', $magazine['Magazine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Magazine'), array('action' => 'delete', $magazine['Magazine']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $magazine['Magazine']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Magazines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Magazine'), array('action' => 'add')); ?> </li>
	</ul>
</div>
