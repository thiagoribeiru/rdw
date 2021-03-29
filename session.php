<?
require_once("config.php");
if (session_status()===1) session_start();
if (!isset($_SESSION['UsuarioId'])) {
	$arquivo = verificaArquivo("restrito.php");
	?>
	<script>window.location.href = '<?echo $arquivo;?>';</script>
	<?
	exit;
}
function verificaArquivo($arquivo) {
	$files = glob($arquivo);
	if (count($files)>0) {
		return $arquivo;
		exit;
	} else {
		$arquivo = "../".$arquivo;
		return verificaArquivo($arquivo);
		exit;
	}
}
?>