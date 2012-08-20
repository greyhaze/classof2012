<html>
<body>
<h1>Days we ate together</h1>

<form action='.' method='post' />
	<table cellpadding="4">
		<tr>
		<th>Date</th>
		<th>Members</th>
		</tr>
<?php 

foreach(Meals::find('all') as $oMeals){ ?>
	<tr>
	<td><?php echo date('Y-m-d', strtotime($oMeals->date)); ?></td>
	<td><?php echo $oMeals->members ?></td>
	</tr>
<?php }?>
		</table>

<p><label>date:</label><input type='text' name='date'/>
<label>members:</label><input type='text' name='members'/>
<input type='submit' name='submit' value='submit' /></p>

</form>

</body>
</html>