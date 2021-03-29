<?
require_once("config.php");
if ($_SERVER['REQUEST_METHOD']=='POST') {
	if ($_POST['func']=='verificaSessao') {
		session_start();
		if (isset($_SESSION['UsuarioNome'])) {
			$retorno['estado'] = 1;
			$retorno['mensagem'] = "Olá, ".$_SESSION['UsuarioNome']."! Seja bem vindo de volta.";
		} else {
			$retorno['estado'] = 0;
		}
	}
	if ($_POST['func']=='realizaLogin') {
		if (isset($_SESSION)) session_destroy();
		$usuario = $_POST['usuario'];
		$senha = md5(sha1($_POST['senha']));
		$regQuery = $sql->query("select * from usuarios where nome = '".$usuario."' and ativo = '1'") or die (mysqli_error($sql));
		if (mysqli_num_rows($regQuery)>0) {
			if (mysqli_num_rows($regQuery)==1) {
				$reg = mysqli_fetch_array($regQuery);
				if ($reg['senha']==$senha) {
					$retorno['autorizado'] = 1;
					$retorno['mensagem'] = "Tudo certo! Seja bem vindo ".$reg['nome'].".";
					session_start();
					$_SESSION['UsuarioId'] = $reg['id'];
					$_SESSION['UsuarioNome'] = $reg['nome'];
					$_SESSION['email'] = $reg['email'];
					$_SESSION['permissoes'] = $reg['permissoes'];
				} else {
					$retorno['autorizado'] = 0;
					$retorno['mensagem'] = "Senha incorreta.";
				}
			} else {
				$retorno['autorizado'] = 0;
				$retorno['mensagem'] = "Número de usuários incoerente. Favor contactar o administrador do sistema.";
			}
		} else {
			$retorno['autorizado'] = 0;
			$retorno['mensagem'] = "Usuário não encontrado.";
		}
	}
	if ($_POST['func']=='realizaLogoff') {
		session_start();
		session_unset();
		session_destroy();
		$retorno['logoff'] = 1;
	}
} else {
	$retorno['erro'] = "Erro de método";
}
echo json_encode($retorno);
?>