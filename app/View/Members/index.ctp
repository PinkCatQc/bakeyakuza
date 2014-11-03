
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Members') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('New Member'), array('action' => 'add'), array('class' => '')); ?></li>
				</ul>
		    </li>			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clan
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New Clan'), array('controller' => 'clans', 'action' => 'add'), array('class' => '')); ?></li> 
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hobby') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hobbies'), array('controller' => 'hobbies', 'action' => 'index'), array('class' => '')); ?></li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Hobby'), array('controller' => 'hobbies', 'action' => 'add'), array('class' => '')); ?></li>
				</ul>
		    </li>			
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="members index">
		
			<h2><?php echo __('Members'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>							
							<th><?php echo $this->Paginator->sort('nom'); ?></th>
							<th><?php echo $this->Paginator->sort('prenom'); ?></th>
							<th><?php echo $this->Paginator->sort('daterecrutement'); ?></th>
							<th><?php echo $this->Paginator->sort('naissance'); ?></th>
							<th><?php echo $this->Paginator->sort('deces'); ?></th>
							<th><?php echo $this->Paginator->sort('abilite'); ?></th>
							<th><?php echo $this->Paginator->sort('Hobby'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($members as $member): ?>
	<tr>		
		<td><?php echo h($member['Member']['nom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['daterecrutement']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['naissance']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['deces']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['abilite']); ?>&nbsp;</td>
		<td><?php foreach ($member['Hobby'] as $hobby) { echo $this->Html->link($hobby['nom'] , array('controller' => 'hobbies', 'action' => 'view', $hobby['id']) , array('class' => 'label label-info')); } ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
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