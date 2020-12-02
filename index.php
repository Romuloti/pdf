<?php
	$conn = new mysqli("localhost","root","","relatorios");
	
	$sql = "SELECT * FROM cadastro";
	
	$res = $conn->query($sql);
	
	if($res->num_rows > 0){
		print "<table border='1'>";
		while($row = $res->fetch_object()){
			
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->email."</td>";
			print "<td>".$row->fone."</td>";
			print "<td><a href='relatorio.php?id=".$row->id."'>PDF</a></td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>






