<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" href="images/fav.png" type="image/png" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Thiago Ribeiro - Programador Web</title>
	<link href="css/stylesheet.css" rel="stylesheet"/>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="scripts/script.js"></script>
</head>
<body>
    <div id="corpoo">
        <img id="fundo_port" src="images\aigfa2.jpg">
        <div id="container">
			<div class="botaorestrito"><a href="restrito.php">Acesso Restrito</a></div>
        	<div id="up">
				<img id="logo" src="images\logo_offwhite_vazado2.png">
				<p id="titulo" class="p">Programador Web</p>
				<p id="subtitulo" class="p">focado em sistemas de gestão administrativa.</p>
				<p class="descricao">Olá! Meu nome é Thiago Ribeiro, sou programador web freelancer 
				da grande Porto Alegre. Trabalho em projetos para clientes e agências 
				remotamente, de Cachoeirinha, para qualquer parte do mundo!<br><br>
				Tenho experiência em diversas áreas, desde design, até HTML + CSS + Javascript. Trabalho com base em PHP, 
				desenvolvendo com facilidade módulos de gestão administrativa que necessitam, ou não, de banco 
				de dados SQL personalizados, e administro meu próprio servidor Linux.</p>
				<img id="foto" src="images\IMG-0744.png">
				<div id="social_container">
					<div id="social">
						<div id="facebook" onclick="abreFacebook();"><img src="images\social_buttons.png"></div>
						<div id="instagram" onclick="abreInstagram();"><img src="images\social_buttons.png"></div>
						<div id="linkedin" onclick="abreLinkedin();"><img src="images\social_buttons.png"></div>
						<div id="whatsapp" onclick="abreContatos();"><img src="images\social_buttons.png"></div>
					</div>
				</div>
			</div>
			<div id="menuUp">
				<hr/>
				<div id="menu_container">
					<div id="menu">
						<p class="menu" onclick="menuDown();">HOME</p>
						<p class="menu" onclick="abreProjetos();">PROJETOS</p>
						<p class="menu" onclick="abreExperiencia();">EXPERIÊNCIA</p>
						<p class="menu" onclick="abreContatos();">CONTATO</p>
					</div>
				</div>
				<hr/>
			</div>
			<div id="j_projetos" class="janelas">
				<div id="menu_projetos">
					<p class="title">Estes são prints de alguns dos projetos que desenvolvi nos últimos anos:</p>
					<div id="singec" class="menu" onclick="abrePrints(this);"><img src="images\projetos\singec\01.jpg"><p>Singec</p></div>
					<div id="basico" class="menu" onclick="abrePrints(this);"><img src="images\projetos\basico\01.jpg"><p>Basico Tecidos</p></div>
					<div id="sigap" class="menu" onclick="abrePrints(this);"><img src="images\projetos\sigap\01.jpg"><p>Sigap 4.0</p></div>
					<div id="acomp_pedidos" class="menu" onclick="abrePrints(this);"><img src="images\projetos\acomp_pedidos\01.jpg"><p>Acomp. Pedidos</p></div>
				</div>
			</div>
			<div id="j_experiencia" class="janelas">
				<p class="titulo">Formação:</p><br>
				<p>Engenharia Eletrônica<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Universidade Feevale (imcompleto)<br>
				Design Gráfico (Corel e Photoshop Intermediário-Avançado)<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Informatize Novo Hamburgo<br>
				Inglês Básico<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Universidades QI</p><br>

				<p class="titulo">Idiomas:</p><br>
				<p>Conhecimentos Língua Inglesa (básico)</p><br>

				<p class="titulo">Cursos Extra-Curriculares:</p><br>
				<p>Domínio na área de informática – Windows, Word, Excel, Internet, Hardware.<br>
				Domínio da área gráfica - Corel Draw, Photoshop<br>
				Curso de comunicação efetiva para empresas – Patricia Meinhart<br>
				Curso de atendimento diferenciado – ACI Novo Hamburgo<br>
				Curso de precificação para médias empresas – ACI Novo Hamburgo<br>
				Extra: Desenvolvimento artigo metodológico teórico sobre gestão de custos para pequenas e médias empresas.</p><br>

				<p class="titulo">Experiência Profissional:</p><br>
				<p><b><u>Sistema Integrado de Gestão de Custos</u></b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CEO<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Visando a agilidade e precisão na área de  analise de custos e rentabilidade de produtos na empresa em que eu trabalhava, idealizei e desenvolvi um sistema de gestão de custos ao qual eu mantenho, adicionando funcionalidades e aumentando o seu poder de agilizar o serviço do analista de custos, bem como deixar mais preciso os levantamentos de indicadores financeiros importantes e pertinentes a área de gestão de custos da empresa. O sistema é capaz de gerenciar várias empresas ao mesmo tempo sem que uma interfira com a outra. Tudo isso de forma transparente, síncrona, eficaz, precisa e totalmente online. Ainda não está disponível para comercialização de pacotes, mas em breve passará a vender planos. Apesar disso, já venho trabalhando com ele desde o início de 2016, adicionando e evoluindo seus motores.</p><br>

				<p><b><u>Base Tecidos e Malhas e Walk Trendy NH (empresas de mesma gerência)</u></b></p><br>
				<p><b>Período: 03/2015 a atual</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cargo: Analista de Custos<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atividades desenvolvidas:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Análise de movimentação de estoque;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Crédito de imposto;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Analise de variações;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Apuração de resultados gerenciais e indicadores financeiros;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Orçamentos;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Propostas de melhorias em processos e aprimoramento de controles;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Levantamento e valoração de inventário mensal;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Conciliação e calculo dos custos reais de materiais e processos internos e externos;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Analise da apropriação dos valores de receita e despesas por projeto, quanto a classificação de centro de custo, natureza origem e aplicação do gasto;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Adequação e informação visando atender a politica de custo gerencial, através do sistema e relatórios corporativos;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Cadastro e organização das composições dos produtos comercializados visando registro e criação de fluxo produtivo;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Conhecimentos na legislação fiscal e contábil de modo a conhecer o emprego de impostos e classificações fiscais;</p><br>

				<p><b>Período: 10/2010 a 02/2015</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cargo: Coordenador<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atividades desenvolvidas:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Coordenação e treinamento de equipes comerciais e industriais;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Desenvolvimento de estampas para calçados e bolsas (desenv. desde desenho à desenv. de cor);<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Desenvolvimento, gestão e controle de crescimento setorial;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Analise e programação de produção;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Manutenção de impressoras sublimativas digitais de grande porte;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Atendimento ao cliente com finalidade de desenvolvimento de produtos e venda comercial;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Pesquisa e implementação de novas tecnologias na área de impressão digital de estamparia;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Extras:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Edição e co-programação de site e-commerce;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Planejamento de campanhas de marketing;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Gestão da nova marca fundada pela empresa e desenvolvimento do fluxo administrativo da mesma;</p><br>

				<p><b><u>Fidgety Confecções Ltda</u></b></p><br>
				<p><b>Período: 06/2009 a 10/2010</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cargo: Auxiliar administrativo<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atividades desenvolvidas:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Atividades relacionadas à área de recepção;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Atendimento telefônico;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Controle de notas fiscais recebidas pela empresa;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Pagamento e controle da folha de pagamento da empresa e funcionários;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Elaboração de relatórios financeiros para os sócios da empresa;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Controle de caixa e fluxo das contas;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Verificação e correção de contratos;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Verificação e correção de contratação de funcionários;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◦&nbsp;&nbsp;Controle da movimentação bancária;</p><br>

			</div>
			<div id="j_contatos" class="janelas">
				<p class="title">Você pode entrar em contato comigo por todas as minhas redes sociais e também pelos meios abaixo:</p>
				<center><p>Telefone/WhatsApp: +55 51 99365 8128</p></center>
				<center><p>E-mail: <a href="mailto:thiago.cja@gmail.com">thiago.cja@gmail.com</a></p></center>
				<fieldset>
					<legend>Deixe uma mensagem</legend>
					<form id="form_contato" onsubmit="return false;">
						<div><p class="legend">Seu nome:</p><input type="text" name="nome" placeholder="Digite seu nome" /></div>
						<div><p class="legend">Seu e-mail:</p><input type="email" name="email" placeholder="Digite seu e-mail" /></div>
						<div><p class="legend">Assunto:</p><input type="assunto" name="assunto" placeholder="Digite o assunto" /></div>
						<div><p class="legend">Mensagem:</p><textarea name="mensagem" placeholder="Digite a mensagem..."></textarea></div>
						<div><button id="enviar" onclick="enviaMensagem();">Enviar</button></div>
					</form>
				</fieldset>
				<center><p class="saida">Prometo que respondo assim que possível! ;)</p></center>
			</div>
        </div>
    </div>
	<div id="album">
		<div id="desk">
			<div id="fotoGrande">
				<div id="img"><img src=""></div>
				<div id="descricao">
					<p></p>
				</div>
				<div id="anterior" onclick="retornaFoto();"><p><</p></div>
				<div id="proxima" onclick="avancaFoto();"><p>></p></div>
			</div>
			<div id="fotosPequenas"></div>
			<div id="fechar" onclick="fechaAlbum();"><p>X</p></div>
		</div>
	</div>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113181891-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113181891-1');
	</script>
</body>
</html>