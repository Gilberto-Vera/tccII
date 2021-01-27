<?php 
include_once('head.php');
include_once('navbar.php');
?>
<div class="container">
		<div class="row">

    		
  			<div class="tab-pane active" id="list">
  				<br/>
  				<p><a href="index.php?controller=users&add">+ Adicionar usuário</a></p>
  				<br/>
  				<div class="table-responsive">
  					<table class="table table-hover">
    						<thead>
    							<tr>
    								<th>ID</th>
    								<th>Usuário</th>
    								<th>Senha</th>
    								<th>Email</th>
    								<th>Tipo</th>
    								<th>Opções</th>
    							</tr>
    						</thead>
    						<tbody>
						<?php foreach($users as $user) { ?>
    							<tr>
    								<td><?php echo $user['id']; ?></td>
    								<td><?php echo $user['username']; ?></td>
    								<td><?php echo $user['password']; ?></td>
    								<td><?php echo $user['email']; ?></td>
    								<td><?php echo $user['type']; ?></td>

    								<td>
   										<a href="index.php?controller=users&edit=<?php echo $user['id']; ?> ">
										   <span class="glyphicon glyphicon-edit"></span>editar</a>
   										<a href="index.php?controller=users&del=<?php echo $user['id']; ?> " 
										   onclick="return confirm('Você tem certeza que deseja excluir este usuário?')">
										   <span class="glyphicon glyphicon-trash"></span>Apagar</a>

    								</td>
    							</tr>
    						
<?php } ?>
    						</tbody>
  					</table>
				</div>
				<ul class="pagination">
  				<?php for ($i=1; $i<=$numberOfPages; $i++) { ?>  
				<?php $class_active = ($page==$i)?"class='active'":$class_active="";?>
		             	<li <?php echo $class_active; ?>><a href="index.php?controller=users&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php }; ?>
				</ul>
  			
  </div>
  			
</div>
    

<?php 
include_once('footer.php');
?>
