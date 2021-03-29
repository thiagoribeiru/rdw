$(document).ready(function(){
	// inicio verificacao de sessao
	$.ajax({
		url : 'phpAjax.php',
		type : 'post',
		data : {'func':'verificaSessao'},
		dataType: 'json',
		timeout: 3000,    
		success: function(json){
			if ('erro' in json) {
				alert(json.erro);
			} else {
				if (json.estado=='1') {
					abreRestrito();
				} else {
					$('#login_box').show();
					$('#login_box #box #login input[type="text"]').focus();
					$('#loader').fadeOut();
				}
			}
		},
		error: function(erro){
			alert('erro');
			$('#loader').fadeOut();
		}       
	});
	// final da verificacao
});
function teste() {
	alert("teste");
}
function realizaLogin() {
	var usuario = document.querySelector("#login_box #box #login input[type='text']").value;
	var senha = document.querySelector("#login_box #box #login input[type='password']").value;
	$.ajax({
		url: 'phpAjax.php',
		method: 'post',
		data: 'func=realizaLogin&usuario='+usuario+'&senha='+senha,
		dataType: 'json',
		success: function(json) {
			if (json.autorizado===1) {
				abreRestrito();
			} else {
				alert(json.mensagem);
			}
		},
		error: function() {
			alert('erro');
		}
	});
}
function realizaLogoff() {
	$.ajax({
		url: 'phpAjax.php',
		method: 'post',
		data: 'func=realizaLogoff',
		dataType: 'json',
		success: function(json) {
			if (json.logoff===1) {
				location.reload();
			} else {
				alert("Logoff não realizado.");
			}
		},
		error: function() {
			alert('erro');
		}
	});
}
function abreRestrito() {
	// monta_menu();
	// $('#menu').fadeIn();
	$('#loader').fadeOut();
	// mensagem_ok(json.mensagem);
	$('#login_box').hide();
	$(document.querySelector("#menu")).fadeIn();
}
function selecionaMenu(menu) {
	document.querySelector("#menu .menu_bot_selected").setAttribute("class","menu_bot");
	menu.setAttribute("class","menu_bot_selected");
	if (menu.id=="menu_logoff") {
		realizaLogoff();
	} else {
		mostraConteudo(menu.id);
	}
}
function mostraConteudo(conteudo) {
	var id = conteudo.replace("menu","janela");
	if (id=="janela_home") {
		document.querySelector("#conteudo").innerHTML = "";
	} else {
		$.ajax({
			url: "janelas/"+id+".php",
			dataType: 'html',
			success: function(html) {
				document.querySelector("#conteudo").innerHTML = html;
			},
			error: function() {
				alert("erro");
			}
		});
	}
}