<?
$sql;//variavel mysqli global
function dominio($dominio) {
	if (count(explode($dominio,$_SERVER['SERVER_NAME']))>1) return true;
	else return false;
}

function conecta($servernameFn,$usernameFn,$passwordFn,$dbportFn,$databaseFn,$tempoOciosoFn,$showErrorDeprecatedFn,$displayErrorFn) {
	global $sql;
	if (!$showErrorDeprecatedFn) {
			error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	}
	if (!$displayErrorFn) {
			ini_set("display_errors", 0 );
	}
	if ($dbportFn and $dbportFn!='') $dadosPort = ':'.$dbportFn;
		else $dadosPort = '';
	$sql = new mysqli($servernameFn.$dadosPort,$usernameFn,$passwordFn,$databaseFn);
	if (mysqli_connect_errno()) {
        trigger_error(mysqli_connect_error());
    } else {
		$sql->query("SET TIME_ZONE = 'America/Sao_Paulo'");
		date_default_timezone_set('America/Sao_Paulo');
    	tabelasIniciais();
		
    }
}

function addCol($nomeCol,$nomeTab,$tipo,$after) {
	global $sql;
	ini_set('max_execution_time', 300);
	// ($nomeCol,$nomeTab,$tipo,$after,[$stringComando])
	$numArg = func_num_args();
	$qtabs = $sql->query("show columns from $nomeTab like '$nomeCol'") or die(mysqli_error($sql));
	if ($qtabs->num_rows==0) {
		$sql->query("ALTER TABLE $nomeTab ADD COLUMN $nomeCol $tipo after $after;") or die(mysqli_error($sql));
		if ($numArg==5) {
			$stringComando = func_get_arg(4);
			$sql->query($stringComando) or die(mysqli_error($sql));
		}
	}
}

function delCol($nomeCol,$nomeTab) {
	global $sql;
	$qtabs = $sql->query("show columns from $nomeTab like '$nomeCol'") or die(mysqli_error($sql));
	if (mysqli_num_rows($qtabs)!=0) {
		$sql->query("ALTER TABLE $nomeTab DROP $nomeCol") or die(mysqli_error($sql));
	}
}

function tabelasIniciais() {
	global $sql;
	
	$sql->query("CREATE TABLE IF NOT EXISTS usuarios (indice INT NOT NULL AUTO_INCREMENT PRIMARY KEY) ENGINE = InnoDB") or die(mysqli_error($sql));
		addCol("id","usuarios","INT NOT NULL","indice");
		addCol("nome","usuarios","VARCHAR(100) NOT NULL","id");
		addCol("senha","usuarios","VARCHAR(100) NOT NULL DEFAULT ''","nome");
		addCol("email","usuarios","VARCHAR(100) NOT NULL DEFAULT ''","senha");
		addCol("permissoes","usuarios","VARCHAR(500) NOT NULL","email");
		addCol("cadastro","usuarios","DATETIME NOT NULL","permissoes");
		addCol("situacao","usuarios","TINYINT(1) NOT NULL","cadastro");
		addCol("login","usuarios","TINYINT(1) NOT NULL","situacao");
		addCol("data","usuarios","DATETIME NOT NULL","login");
		addCol("usuario","usuarios","INT NOT NULL","data");
		addCol("ativo","usuarios","TINYINT(1) NOT NULL","usuario");
	if (mysqli_num_rows($sql->query("select * from usuarios"))==0)
		$sql->query("INSERT INTO usuarios (id,nome,senha,email,permissoes,cadastro,situacao,login,data,usuario,ativo) VALUES ('1','ADMIN','b714337aa8007c433329ef43c7b8252c','admin@admin.com.br','a:1:{s:5:\"total\";s:1:\"1\";}',now(),'1','1',now(),'1','1')") or die(mysqli_error($sql));
}

function logMsg( $msg, $level = 'info', $file = 'logs/log.log' ) {
    $levelStr = ''; // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    switch ( $level ) {// verifica o nível do log
        case 'info':// nível de informação
		$levelStr = 'INFO';
		break;
        case 'warning':// nível de aviso
		$levelStr = 'WARNING';
		break;
        case 'error':// nível de erro
		$levelStr = 'ERROR';
		break;
    }
    $date = date( 'Y-m-d H:i:s' );// data atual
    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $msg = sprintf( "[%s] [%s]: %s%s", $date, $levelStr, $msg, PHP_EOL );
    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
}
function enviaEmail($toAddress,$subject,$body,$attachment='',$arrayHeaders='') {
	require_once('PHPMailer/PHPMailerAutoload.php');
	$destino = explode(',',$toAddress);
	// headers_list
		if (isset($arrayHeaders['fromName'])) $fromName = $arrayHeaders['fromName'];
			else $fromName = 'RDW';
		if (isset($arrayHeaders['fromAddress'])) $fromAddress = $arrayHeaders['fromAddress'];
			else $fromAddress = 'thiago@ribeirodesenvolvimentoweb.com.br';
		if (isset($arrayHeaders['replyToName'])) $replyToName = $arrayHeaders['replyToName'];
			else $replyToName = 'naoResponder';
		if (isset($arrayHeaders['replyTo'])) $replyTo = $arrayHeaders['replyTo'];
			else $replyTo = 'thiago@ribeirodesenvolvimentoweb.com.br';
	// end headers_list
	$mail = new PHPMailer;
	// $mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->Charset = 'UTF-8';
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.ribeirodesenvolvimentoweb.com.br';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'thiago@ribeirodesenvolvimentoweb.com.br';                 // SMTP username
	$mail->Password = 'thi102030';                           // SMTP password
	$mail->SMTPAutoTLS = false;
	// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to
	$mail->setFrom($fromAddress, $fromName);
	for($i=0;$i<count($destino);$i++) {
		// $mail->addAddress('singec@singec.com.br', 'Joe User');     // Add a recipient
		$mail->addAddress($destino[$i]);               // Name is optional
	}
	$mail->addReplyTo($replyTo, $replyToName);
	// $mail->addCC('cc@example.com');
	$mail->addBCC($replyTo);
	// if (isset($attachment) and $attachment!="") {
		// $retorno['msg'] = $attachment;
		$mail->addAttachment($attachment);         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	// }
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = utf8_decode($subject);
	$mail->Body    = utf8_decode($body);
	$mail->XMailer = 'Singec Mailer';
	// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	if(!$mail->send()) {
		$retorno['sucess'] = $mail->ErrorInfo;
		logMsg("Erro no envio de email: ".$mail->ErrorInfo,"ERROR");
		$retorno['msg'] = 'A mensagem não pode ser enviada.';
		return $retorno;
		// echo 'Message could not be sent.';
		// echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$retorno['sucess'] = 0;
		$retorno['msg'] = 'A mensagem foi enviada.';
		return $retorno;
		// echo 'Message has been sent';
	}
}
?>