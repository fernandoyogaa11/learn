<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER STATUS</title>
</head>
<form>
         <input type="button" onclick="window.location.href = 'menu.html';" value="MENU"/>
      </form>
<body>
<table border="1">
	<thead>
		<th>ID</th>
		<th>username</th>
		<th>password</th>
	</thead>
	<tbody>
		<?php
			$data = file_get_contents('user.json');
			$data = json_decode($data);
			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->id."</td>
						<td>".$row->username."</td>
						<td>".$row->password."</td>
						<td>
							<a href='update_user.php'>Edit</a>
							<a href='hapus_user.php'>Delete</a>
						</td>
					</tr>
				";
 
				$index++;
			}
		?>
	</tbody>
</table>
</body>
</html>