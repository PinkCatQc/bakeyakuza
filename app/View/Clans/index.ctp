
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clan
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('New Clan'), array('action' => 'add'), array('class' => '')); ?></li>
				</ul>
		    </li>	
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuzas'), array('controller' => 'yakuzas', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New Yakuza'), array('controller' => 'yakuzas', 'action' => 'add'), array('class' => '')); ?></li> 
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Members') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?></li> 
				</ul>
		    </li>
					
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="clans index">
		
			<h2><?php echo __('Clans'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>							
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('foundinglocation'); ?></th>
							<th><?php echo $this->Paginator->sort('yearsactive'); ?></th>
							<th><?php echo $this->Paginator->sort('territory'); ?></th>
							<th><?php echo $this->Paginator->sort('ethnicity'); ?></th>
							<th><?php echo $this->Paginator->sort('membership'); ?></th>
							<th><?php echo $this->Paginator->sort('criminalactivities'); ?></th>							
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($clans as $clan): ?>
	<tr>		
		<td><?php echo h($clan['Clan']['name']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['foundinglocation']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['yearsactive']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['territory']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['ethnicity']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['membership']); ?>&nbsp;</td>
		<td><?php echo h($clan['Clan']['criminalactivities']); ?>&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clan['Clan']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clan['Clan']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clan['Clan']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $clan['Clan']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->