
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clan
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('Edit Clan'), array('action' => 'edit', $clan['Clan']['id']), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Clan'), array('action' => 'delete', $clan['Clan']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $clan['Clan']['id'])); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('List Clans'), array('action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Clan'), array('action' => 'add'), array('class' => '')); ?> </li>
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
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Members') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index'), array('class' => '')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?> </li>
				</ul>
		    </li>
					
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="clans view">

			<h2><?php  echo __('Clan'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Yakuza'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($clan['Yakuza']['origin'], array('controller' => 'yakuzas', 'action' => 'view', $clan['Yakuza']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Founding Location'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['foundinglocation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Years Active'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['yearsactive']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Territory'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['territory']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ethnicity'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['ethnicity']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Membership'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['membership']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Criminal Activities'); ?></strong></td>
		<td>
			<?php echo h($clan['Clan']['criminalactivities']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
                        <?php $created = $clan['Clan']['created'];
                        echo is_numeric($created) ? date("Y-m-d H:i:s", $created) : h($created); ?>
			
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
                        <?php $modified = $clan['Clan']['modified'];
                        echo is_numeric($modified) ? date("Y-m-d H:i:s", $modified) : h($modified); ?>
			
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Members'); ?></h3>
				
				<?php if (!empty($clan['Member'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clan Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('First name'); ?></th>
		<th><?php echo __('Recruitment date'); ?></th>
		<th><?php echo __('Date of birth'); ?></th>
		<th><?php echo __('Date of death'); ?></th>
		<th><?php echo __('Ability'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($clan['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['clan_id']; ?></td>
			<td><?php echo $member['nom']; ?></td>
			<td><?php echo $member['prenom']; ?></td>
			<td><?php echo $member['daterecrutement']; ?></td>
			<td><?php echo $member['naissance']; ?></td>
			<td><?php echo $member['datedeces']; ?></td>
			<td><?php echo $member['abilite']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
