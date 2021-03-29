<?
require_once("dependFunc.php");
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$toAddress = "thiago.cja@gmail.com";
	$subject = $_POST['assunto'];
	$body = $_POST['mensagem'];
	$attachment = "";
	$arrayHeaders['fromName'] = $_POST['nome']." (RDW SITE)";
	$arrayHeaders['fromAddress'] = $_POST['email'];
	$arrayHeaders['replyToName'] = $_POST['nome'];
	$arrayHeaders['replyTo'] = $_POST['email'];
	enviaEmail($toAddress,$subject,$body,$attachment,$arrayHeaders);
}
?>