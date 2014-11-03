
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
	
		<div id="sidebar" class="col-sm-3">		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hierarchy') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('Edit Hierarchy'), array('action' => 'edit', $hierarchy['Hierarchy']['id']), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Hierarchy'), array('action' => 'delete', $hierarchy['Hierarchy']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $hierarchy['Hierarchy']['id'])); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hierarchies'), array('action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Hierarchy'), array('action' => 'add'), array('class' => '')); ?> </li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuzas'), array('controller' => 'yakuzas', 'action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Yakuza'), array('controller' => 'yakuzas', 'action' => 'add'), array('class' => '')); ?> </li>
				</ul>
		    </li>	
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
		</div><!-- /#sidebar .span3 -->
	</div><!-- /#page-container .row-fluid -->
	<div id="page-content" class="col-sm-9">
		
		<div class="hierarchies view">

			<h2><?php echo __('Hierarchy'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Yakuza'); ?></strong></td>
							<td>
								<?php echo $this->Html->link($hierarchy['Yakuza']['origin'], array('controller' => 'yakuzas', 'action' => 'view', $hierarchy['Yakuza']['id']), array('class' => '')); ?>
								&nbsp;
							</td>
						</tr><tr>		<td><strong><?php echo __('Level'); ?></strong></td>
							<td>
								<?php echo h($hierarchy['Hierarchy']['level']); ?>
								&nbsp;
							</td>
						</tr>		
					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->
			
	</div><!-- /#page-content .span9 -->

</div>
