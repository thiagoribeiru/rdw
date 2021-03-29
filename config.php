<?
require_once('dependFunc.php');
if (dominio("ribeirodesenvolvimentoweb")) {
    $servername = 'localhost';
    $username = 'c3_base';
    $password = 'base12345';
    $database = 'c3_baseped';
    $dbport = 3306;
    $tempoOcioso = 60*60;
	$showErrorDeprecated = true;
	$displayError = true;
} else if (dominio("localhost")) {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'rdw';
    $dbport = false;
    $tempoOcioso = 60*60;
	$showErrorDeprecated = true;
	$displayError = true;
} else {
	echo "Verifique sua conexão com o Banco de Dados! \n";
	exit;
}
conecta($servername,$username,$password,$dbport,$database,$tempoOcioso,$showErrorDeprecated,$displayError);
?>