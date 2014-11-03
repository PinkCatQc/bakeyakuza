
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuza'), array('controller' => 'yakuzas', 'action' => 'index'), array('class' => '')); ?></li>
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
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Member') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hobby') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hobbies'), array('action' => 'index')); ?></li>
				</ul>
		    </li>
			</ul><!-- /.list-group --> 			
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Hobby'); ?></h2>

		<div class="hobbies form">
		
			<?php echo $this->Form->create('Hobby', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('nom', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->					

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->