
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hierarchy') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('New Hierarchy'), array('action' => 'add'), array('class' => '')); ?></li>
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
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="hierarchies index">
		
			<h2><?php echo __('Hierarchies'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>							
							<th><?php echo $this->Paginator->sort('level'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>						
					</thead>
					<tbody>
					
<?php foreach ($hierarchies as $hierarchy): ?>	
<tr>		<td><strong><?php echo __('Yakuza'); ?></strong></td>
							<td>
								<?php echo $this->Html->link($hierarchy['Yakuza']['origin'], array('controller' => 'yakuzas', 'action' => 'view', $hierarchy['Yakuza']['id']), array('class' => '')); ?>
								&nbsp;
							</td>
						</tr>
	<tr>	
		<td><?php echo h($hierarchy['Hierarchy']['level']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hierarchy['Hierarchy']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hierarchy['Hierarchy']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hierarchy['Hierarchy']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $hierarchy['Hierarchy']['id'])); ?>
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