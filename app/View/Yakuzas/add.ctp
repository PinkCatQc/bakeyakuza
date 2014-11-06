
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuzas'), array('action' => 'index')); ?></li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('User') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Clan
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Clans'), array('controller' => 'clans', 'action' => 'index')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Clan'), array('controller' => 'clans', 'action' => 'add')); ?> </li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hierarchy') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hierarchies'), array('controller' => 'hierarchies', 'action' => 'index')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Hierarchy'), array('controller' => 'hierarchies', 'action' => 'add')); ?> </li>
				</ul>
		    </li>
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Yakuza'); ?></h2>

		<div class="yakuzas form">
		
			<?php echo $this->Form->create('Yakuza', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('origin', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('creation', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('membership', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('activities', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('courriel', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
                                        <div class="form-group">                                                
						<?php echo $this->Form->input('filename',array('type' => 'file')); ?>
					</div><!-- .form-group -->
					
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->