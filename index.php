<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8">
		<title>kovalevvb</title>
		<style>
			body {font: 12px Arial;	background: #f8f8f8;}
			header {font: 20px Arial; padding: 5px; color: #1e90ff; background: #f0f8ff;}
			table {background: #f0f8ff;}
			td {padding: 2px;}
			th {text-align: left; font: 12px Arial; background: #efefef;}
			button {font: 12px Arial; text-align: left;}
		</style>
		<?php
//			print_r(PDO::getAvailableDrivers());
			try {  
				$db_connection = new \PDO("pgsql:host=localhost;port=5433;dbname=esadb;user=postgres;password=Immelstorn");  
			}  
			catch(PDOException $e) {  
				echo $e->getMessage();  
			}
		?>
	</head>
	<body>
		<header>НЕСКОЛЬКО ПОЛЕЗНЫХ УТИЛИТ</header>
		<form id="navigationform">
			<table>
				<tr>
					<td><button buttontype="submit" formmethod="get" name="todo" value="about">О САЙТЕ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="project">ПРОЕКТЫ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="checklist">ЧЕК-ЛИСТ</button></td>
					<td><button buttontype="submit" formmethod="get" name="todo" value="login">ВОЙТИ</button></td>
				</tr>
			</table>
		</form>
		<table><tr>
			<td width="20%" valign="top">
			</td>
			<td width="80%" valign="top">
			    <?php

					include_once "data.php";

                    if(isset($_GET["todo"])){
                        $todo = $_GET["todo"];
                        switch ($todo) {
                            case 'about':
                                echo "САЙТ ПОЛЕЗНЫХ УТИЛИТ";
                                break;
							case 'project':{
								$sql_qs = "SELECT * FROM project_project";
								$result = $db_connection->query($sql_qs);
								echo "<table>";
								echo "<thead><tr><th></th><th>ID</th><th>НАЗВАНИЕ</th><th>ИНФОРМАЦИЯ</th><th>ПРИМЕЧАНИЕ</th></tr></thead>";
								while($row = $result->fetch()){
									$id = $row['id'];
									$name = $row['name'];
									$note = $row['note'];
									$info = $row['info'];
									echo "<tr><td><input type=\"radio\"></input></td><td>$id</td><td>$name</td><td>$note</td><td>$info</td></tr>";
								}
								echo "</table>";
							}
								break;
								case 'checklist':{
									echo text_data();
								}
                            default:
                                // code...
                                break;
                        }
                    }
                ?>
			</td>
		</tr></table>
	</body>
</html>