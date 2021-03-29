function abreFacebook() {
    window.open("https://www.facebook.com/thiagoribeiru");
}
function abreInstagram() {
    window.open("https://www.instagram.com/thiagoribeiru/");
}
function abreLinkedin() {
    window.open("https://www.linkedin.com/in/thiago-ribeiro-a079b664/");
}
function menuUp() {
    $(document.querySelector("#up")).slideUp(300);
}
function menuDown() {
    $(document.querySelector("#up")).slideDown("fast");
    janelasDown();
}
function janelasDown() {
    var janelas = document.querySelectorAll(".janelas");
    for (var i=0;i<janelas.length;i++) {
        $(janelas[i]).slideUp("fast");
    }
}
function abreContatos() {
    janelasDown();
    menuUp();
    $(document.querySelector("#j_contatos")).slideDown(200);
}
function abreProjetos() {
    janelasDown();
    menuUp();
    $(document.querySelector("#j_projetos")).slideDown(200);
}
function abreExperiencia() {
    janelasDown();
    menuUp();
    $(document.querySelector("#j_experiencia")).slideDown(200);
}
function enviaMensagem() {
    var nome = document.querySelector("#form_contato input[name='nome']").value;
    var email = document.querySelector("#form_contato input[name='email']").value;
    var assunto = document.querySelector("#form_contato input[name='assunto']").value;
    var mensagem = document.querySelector("#form_contato textarea[name='mensagem']").value;
    if (nome!=""&&email!=""&&assunto!=""&&mensagem!="") {
        document.querySelector("#form_contato button").setAttribute("disabled",true);
        document.querySelector("#form_contato button").innerHTML = "Enviando...aguarde";
        $.ajax({
            url: "enviaEmailThiago.php",
            method: "POST",
            data: "nome="+nome+"&email="+email+"&assunto="+assunto+"&mensagem="+mensagem,
            success: function() {
                document.querySelector("#form_contato input[name='nome']").value = "";
                document.querySelector("#form_contato input[name='email']").value = "";
                document.querySelector("#form_contato input[name='assunto']").value = "";
                document.querySelector("#form_contato textarea[name='mensagem']").value = "";
                document.querySelector("#form_contato button").removeAttribute("disabled");
                document.querySelector("#form_contato button").innerHTML = "Enviar";
                alert("Ok! Já recebi sua mensagem. Assim que possivel te respondo! Origado pelo contato! =D");
            },
            error: function() {
                alert("erro");
            }
        });
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}
function abrePrints(obj) {
    $(document.querySelector("#album")).fadeIn();
    var pasta = obj.id;
    var nomeAlbum = obj.querySelector("p").innerHTML;
    var arrayPasta = [];
    arrayPasta['singec'] = [];
    arrayPasta['singec'][0] = 'images\\projetos\\singec\\01.jpg';
    arrayPasta['singec'][1] = 'images\\projetos\\singec\\02.jpg';
    arrayPasta['singec'][2] = 'images\\projetos\\singec\\03.jpg';
    arrayPasta['singec'][3] = 'images\\projetos\\singec\\04.jpg';
    arrayPasta['singec'][4] = 'images\\projetos\\singec\\05.jpg';
    arrayPasta['singec'][5] = 'images\\projetos\\singec\\06.jpg';
    arrayPasta['singec'][6] = 'images\\projetos\\singec\\07.jpg';
    arrayPasta['singec'][7] = 'images\\projetos\\singec\\08.jpg';
    arrayPasta['singec'][8] = 'images\\projetos\\singec\\09.jpg';
    arrayPasta['singec'][9] = 'images\\projetos\\singec\\10.jpg';
    arrayPasta['singec'][10] = 'images\\projetos\\singec\\11.jpg';
    arrayPasta['basico'] = [];
    arrayPasta['basico'][0] = 'images\\projetos\\basico\\01.jpg';
    arrayPasta['basico'][1] = 'images\\projetos\\basico\\02.jpg';
    arrayPasta['basico'][2] = 'images\\projetos\\basico\\03.jpg';
    arrayPasta['basico'][3] = 'images\\projetos\\basico\\04.jpg';
    arrayPasta['sigap'] = [];
    arrayPasta['sigap'][0] = 'images\\projetos\\sigap\\01.jpg';
    arrayPasta['sigap'][1] = 'images\\projetos\\sigap\\02.jpg';
    arrayPasta['sigap'][2] = 'images\\projetos\\sigap\\03.jpg';
    arrayPasta['sigap'][3] = 'images\\projetos\\sigap\\04.jpg';
    arrayPasta['sigap'][4] = 'images\\projetos\\sigap\\05.jpg';
    arrayPasta['sigap'][5] = 'images\\projetos\\sigap\\06.jpg';
    arrayPasta['acomp_pedidos'] = [];
    arrayPasta['acomp_pedidos'][0] = 'images\\projetos\\acomp_pedidos\\01.jpg';
    arrayPasta['acomp_pedidos'][1] = 'images\\projetos\\acomp_pedidos\\02.jpg';
    arrayPasta['acomp_pedidos'][2] = 'images\\projetos\\acomp_pedidos\\03.jpg';
    arrayPasta['acomp_pedidos'][3] = 'images\\projetos\\acomp_pedidos\\04.jpg';
    arrayPasta['acomp_pedidos'][4] = 'images\\projetos\\acomp_pedidos\\05.jpg';
    arrayPasta['acomp_pedidos'][5] = 'images\\projetos\\acomp_pedidos\\06.jpg';
    arrayPasta['acomp_pedidos'][6] = 'images\\projetos\\acomp_pedidos\\07.jpg';
    arrayPasta['acomp_pedidos'][7] = 'images\\projetos\\acomp_pedidos\\08.jpg';
    document.querySelector("#album #desk #fotoGrande #img img").src = arrayPasta[pasta][0];
    document.querySelector("#album #desk #fotoGrande #descricao p").innerHTML = nomeAlbum;
    var imgs = "";
    for (var i=0;i<arrayPasta[pasta].length;i++) {
        imgs += "<img src=\""+arrayPasta[pasta][i]+"\" onclick=\"mostraFoto(this);\">\n";
    }
    document.querySelector("#album #desk #fotosPequenas").innerHTML = imgs;
}
function mostraFoto(obj) {
    var url = obj.src;
    document.querySelector("#album #desk #fotoGrande #img img").src = url;
}
function retornaFoto() {
    var url = document.querySelector("#album #desk #fotoGrande #img img").src;
    var foto = document.querySelectorAll("#album #desk #fotosPequenas img");
    var posicao = "";
    for (var i=0;i<foto.length;i++) {
        if (foto[i].src==url) {
            posicao = i-1;
        }
    }
    if (posicao>=0) {
        document.querySelector("#album #desk #fotoGrande #img img").src = foto[posicao].src;
    }
}
function avancaFoto() {
    var url = document.querySelector("#album #desk #fotoGrande #img img").src;
    var foto = document.querySelectorAll("#album #desk #fotosPequenas img");
    var posicao = "";
    for (var i=0;i<foto.length;i++) {
        if (foto[i].src==url) {
            posicao = i+1;
        }
    }
    if (posicao<foto.length) {
        document.querySelector("#album #desk #fotoGrande #img img").src = foto[posicao].src;
    }
}
function fechaAlbum() {
    $(document.querySelector("#album")).fadeOut();
}