<html>
<body>

<form action='.' method='post' />
	<input type='submit' name='add' value='add' />
	<table border="1" cellpadding="4">
		<tr>
		<th>Date</th>
		<th>Members</th>
		</tr>
<?php 

foreach(Meals::find('all') as $oMeals){ ?>
	<tr>
	<td><?php echo $oMeals->date ?></td>
	<td><?php echo $oMeals->members ?></td>
	</tr>
<?php }?>
		</table>

	<input type='submit' name='add' value='add' />
</form>

</body>
</html>