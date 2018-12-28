<?php
	$conn = mysqli_connect("localhost", "minei028_159", "pensargrande", "minei028_mineirissimo");
	if (!$conn->set_charset("utf8")) {
	   die("Não foi possível formatar para UTF-8.\n");
	}
	if(!$conn) {
		die("Erro na conexão MySQL.\n" . mysqli_connect_error());
}
?>