<?php 
include_once('head.php');
include_once('navbar.php');
?>
<div class="container">
		<div class="row">

    		
  			<div class="tab-pane active" id="list">
  				<br/>
  				<p><a href="index.php?controller=users&add">+Add Data</a></p>
  				<br/>
  				<div class="table-responsive">
  					<table class="table table-hover">
    						<thead>
    							<tr>
    								<th>ID</th>
    								<th>Username</th>
    								<th>Passsword</th>
    								<th>Email</th>
    								<th>Type</th>
    								<th>Opt</th>
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
   <a href="index.php?controller=users&edit=<?php echo $user['id']; ?> "><span class="glyphicon glyphicon-edit"></span> edit</a>
   <a href="index.php?controller=users&del=<?php echo $user['id']; ?> " onclick="return confirm('Are you sure?')"><span
 class="glyphicon glyphicon-trash"></span>del</a>

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
