<?php
	//print_r($_POST);
	//1.polaczenie z baza
		$id_polaczenia = mysqli_connect('localhost', 'root', '', 'ogloszenia');
	//2.wybranie bazy danych
		$stan1 = mysqli_select_db($id_polaczenia, 'ogloszenia');
		if($stan1 == true) echo "wybrano baze ogloszenia";
		else echo "nie wybrano";
	//3.operacja na bazie
		//3a.pobranie danych z formularza html
			$kategoria = $_POST['kategoria'];
			$podkategoria = $_POST['podkategoria'];
			$tytul = $_POST['tytul'];
			$tresc = $_POST['tresc'];
			//var_dump($kategoria);
			//var_dump($podkategoria);
			//var_dump($tytul);
			//var_dump($tresc);
		//3b
		//	INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (NULL, '1', '2', '0', 'Celine Dion', 'Sprzedam CD piosenkarki');
			$zapytanie = 'INSERT INTO ogloszenie (uzytkownik_id, kategoria, podkategoria, tytul, tresc) VALUES (1, '$kategoria', '$podkategoria', '$tytul', '$tresc')';
			mysqli_query($id_polaczenia, $zapytanie) or die(mysqli_error($id_polaczenia));
	//4.zamkniecie polaczenia z baza
	mysqli_close($id_polaczenia);
?>