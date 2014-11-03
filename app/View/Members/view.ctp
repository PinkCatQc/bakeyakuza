
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Members') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id']), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('List Members'), array('action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Member'), array('action' => 'add'), array('class' => '')); ?> </li>
				</ul>
		    </li>			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clan
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Clan'), array('controller' => 'clans', 'action' => 'add'), array('class' => '')); ?> </li>
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
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="members view">

			<h2><?php  echo __('Member'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Clan'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($member['Clan']['name'], array('controller' => 'clans', 'action' => 'view', $member['Clan']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['nom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('First name'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['prenom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Recruitment date'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['daterecrutement']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date of birth'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['naissance']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date of death'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['deces']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ability'); ?></strong></td>
		<td>
			<?php echo h($member['Member']['abilite']); ?>
			&nbsp;
		</td>
</tr>		</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
