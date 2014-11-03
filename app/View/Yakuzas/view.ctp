
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('Edit Yakuza'), array('action' => 'edit', $yakuza['Yakuza']['id']), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Yakuza'), array('action' => 'delete', $yakuza['Yakuza']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $yakuza['Yakuza']['id'])); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuzas'), array('action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Yakuza'), array('action' => 'add'), array('class' => '')); ?></li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('User') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
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
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hierarchy') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hierarchies'), array('controller' => 'hierarchies', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New Hierarchy'), array('controller' => 'hierarchies', 'action' => 'add'), array('class' => '')); ?></li> 
				</ul>
		    </li>
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="yakuzas view">

			<h2><?php  echo __('Yakuza'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Origin'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['origin']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creation'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['creation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Membership'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['membership']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Activities'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['activities']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['courriel']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($yakuza['User']['username'], array('controller' => 'users', 'action' => 'view', $yakuza['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($yakuza['Yakuza']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Clans'); ?></h3>
				
				<?php if (!empty($yakuza['Clan'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Founding Location'); ?></th>
		<th><?php echo __('Years Active'); ?></th>
		<th><?php echo __('Territory'); ?></th>
		<th><?php echo __('Ethnicity'); ?></th>
		<th><?php echo __('Membership'); ?></th>
		<th><?php echo __('Criminal Activities'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($yakuza['Clan'] as $clan): ?>
		<tr>
			
			<td><?php echo $clan['name']; ?></td>
			<td><?php echo $clan['foundinglocation']; ?></td>
			<td><?php echo $clan['yearsactive']; ?></td>
			<td><?php echo $clan['territory']; ?></td>
			<td><?php echo $clan['ethnicity']; ?></td>
			<td><?php echo $clan['membership']; ?></td>
			<td><?php echo $clan['criminalactivities']; ?></td>
			<td><?php echo $clan['created']; ?></td>
			<td><?php echo $clan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clans', 'action' => 'view', $clan['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clans', 'action' => 'edit', $clan['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clans', 'action' => 'delete', $clan['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $clan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Clan'), array('controller' => 'clans', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Hierarchies'); ?></h3>
				
				<?php if (!empty($yakuza['Hierarchy'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											
		<th><?php echo __('Level'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($yakuza['Hierarchy'] as $hierarchy): ?>
		<tr>
			
			<td><?php echo $hierarchy['level']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hierarchies', 'action' => 'view', $hierarchy['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hierarchies', 'action' => 'edit', $hierarchy['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hierarchies', 'action' => 'delete', $hierarchy['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $hierarchy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Hierarchy'), array('controller' => 'hierarchies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
