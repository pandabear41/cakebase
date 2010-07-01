<div class="profilesFields form">
<?php echo $this->Form->create('ProfilesField');?>
	<fieldset>
 		<legend><?php __('Admin Edit Profiles Field'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('varname');
		echo $this->Form->input('title');
		echo $this->Form->input('field_type');
		echo $this->Form->input('field_size');
		echo $this->Form->input('field_size_min');
		echo $this->Form->input('required');
		echo $this->Form->input('match');
		echo $this->Form->input('range');
		echo $this->Form->input('error_message');
		echo $this->Form->input('other_validator');
		echo $this->Form->input('default');
		echo $this->Form->input('position');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProfilesField.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProfilesField.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles Fields', true), array('action' => 'index'));?></li>
	</ul>
</div>