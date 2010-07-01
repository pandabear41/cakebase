<div class="profilesFields index">
	<h2><?php __('Profiles Fields');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('varname');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('field_type');?></th>
			<th><?php echo $this->Paginator->sort('field_size');?></th>
			<th><?php echo $this->Paginator->sort('field_size_min');?></th>
			<th><?php echo $this->Paginator->sort('required');?></th>
			<th><?php echo $this->Paginator->sort('match');?></th>
			<th><?php echo $this->Paginator->sort('range');?></th>
			<th><?php echo $this->Paginator->sort('error_message');?></th>
			<th><?php echo $this->Paginator->sort('other_validator');?></th>
			<th><?php echo $this->Paginator->sort('default');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($profilesFields as $profilesField):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $profilesField['ProfilesField']['id']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['varname']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['title']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['field_type']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['field_size']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['field_size_min']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['required']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['match']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['range']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['error_message']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['other_validator']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['default']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['position']; ?>&nbsp;</td>
		<td><?php echo $profilesField['ProfilesField']['visible']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $profilesField['ProfilesField']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $profilesField['ProfilesField']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $profilesField['ProfilesField']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profilesField['ProfilesField']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Profiles Field', true), array('action' => 'add')); ?></li>
	</ul>
</div>