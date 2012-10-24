<div class='grid_4'>
    <div class='da-panel'>
        <div class='da-panel-header'>
            <span class='da-panel-title'>
                <?php echo $this->Html->image('/dandelion/images/icons/color/wand.png', array( 'alt'=>'')); ?>
                Fases
            </span>
            
        </div>
        <div class='da-panel-content'>
			<table class="da-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Fecha de Inicio</th>
						<th>Fecha Final</th>
						<th>Stado</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php  foreach ($phases as $phase): ?>
						<tr>
							<td><?php echo $phase['Phase']['id']; ?></td>
							<td><?php echo $phase['Phase']['name']; ?></td>
							<td><?php echo $phase['Phase']['start_date']; ?></td>
							<td><?php echo $phase['Phase']['end_date']; ?></td>
							<td><?php echo $phase['Phase']['state']; ?></td>
							<td>
								<?php if ($current_user['role'] == 'admin'): ?>
									<?php echo $this->Html->link("Editar", array('action' => 'edit', $phase['Phase']['id'])) ; ?>
									<?php echo $this->Form->postLink("Borrar", array('action' => 'delete', $phase['Phase']['id']) , array('confirm' => '¿Estas seguro?')) ; ?>
								<?php endif;?>
							</td>

						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
        </div>
<h1></h1>


<?php echo $this->Html->link("Nuevo", array('controller' => 'phases', 'action' => 'add') );?>