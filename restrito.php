<?require_once('config.php');?>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" href="images/fav.png" type="image/png" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>RDW - Ribeiro Desenvolvimento Web - Restrito</title>
		<link href="css/cssreset.css" rel="stylesheet"/>
		<link href="css/restrito.css" rel="stylesheet"/>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/functions.js"></script>
	</head>
	<body>
		<div id="loader">
			<div id="carregando">
				<img src="images/loader2.gif">
				<p>Carregando conteúdo... aguarde.</p>
			</div>
		</div>
		<div id="login_box">
			<div id="box">
				<div id="login">
					<form onsubmit="realizaLogin();return false;">
						<img src="images/1_logo.png">
						<p>Usuário:</p>
						<input type="text" name="user" id="user" />
						<p>Senha:</p>
						<input type="password" name="pass" />
						<button id="submit" onclick="realizaLogin();return false;">Acessar</button>
					</form>
				</div>
			</div>
		</div>
		<div id="menu">
			<div id="menu_top"><img src="images/2_logo_bco_120x41.png"></div>
			<?
			//botões menu
			$addMenu[] = ["home","Home"];
			$addMenu[] = ["updates","Clientes Updates"];
			$addMenu[] = ["logoff","Logoff"];
			//final botões menu
			for ($i=0;$i<count($addMenu);$i++) {
				if ($i===0) $selected = "_selected"; else $selected = "";
				?>
				<div id="menu_<?echo $addMenu[$i][0];?>" class="menu_bot<?echo $selected;?>" onclick="selecionaMenu(this)">
					<div class="menu_selected"></div>
					<div class="menu_linha">
						<div class="img">
							<img src="images/icones_inv.png">
						</div>
						<p><?echo $addMenu[$i][1];?></p>
					</div>
				</div>
				<?
			}
			?>
		</div>
		<div id="conteudo"></div>
	</body>
</html>