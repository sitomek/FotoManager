<?php 

	$link = @mysql_connect("localhost", "root", "vertrigo") or die("nie udało się połączyć");
		
	@mysql_select_db("foto") or die ("nie udało się wybrać bazy danych");
	mysql_query("SET NAMES 'utf8'");

	mysql_query("CREATE TABLE fotos4 (
					idFoto INT PRIMARY KEY, nameFoto VARCHAR(20), 
						sciezkaFoto VARCHAR(100), opisFoto VARCHAR(20), gpsFoto VARCHAR(20), miejsceFoto VARCHAR(20), 
						dataFoto DATE, dataFotoRok YEAR, dataFotoMiesiac VARCHAR(20), dataFotoDzien VARCHAR(20), 
						rozmiar INT, isFoto BOOLEAN, extFoto VARCHAR(10)
					) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_polish_ci" ) or die("nie udało się, prawdopodobnie istnieje już taka tabelka");
	
	
	
	

	
	mysql_close($link);

?>