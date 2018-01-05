
function passToEdit(produto,descricao,quantidade,vista,prazo,id){
	document.getElementById('feras-editar-produto').value=produto;
    document.getElementById('feras-editar-descricao').value=descricao;
    document.getElementById('feras-editar-quantidade').value=quantidade;
    document.getElementById('feras-editar-vista').value=vista;
    document.getElementById('feras-editar-prazo').value=prazo;
    document.getElementById('feras-editar-id').value=id;

};

function cadastrarProduto(){
	var xhttp = new XMLHttpRequest();
	var produto = document.getElementById("feras-cadastro-produto").value;
	var descricao = document.getElementById("feras-cadastro-descricao").value;
	var quantidade = document.getElementById("feras-cadastro-quantidade").value;
	var vista = document.getElementById("feras-cadastro-vista").value;
	var prazo = document.getElementById("feras-cadastro-prazo").value;

	// xhttp.onreadystatechange = function(){
	// 	if (this.readyState == 4 && this.status == 200) {
 //                console.log(this.responseText)
 //            }
	// };
	xhttp.open("GET","salvarproduto.php?produto="+produto+"&descricao="+descricao+"&quantidade="+quantidade+"&vista="+vista+"&prazo="+prazo,true);
	xhttp.send();



	document.getElementById("feras-cadastro-produto").value = "";
	document.getElementById("feras-cadastro-descricao").value = "";
	document.getElementById("feras-cadastro-quantidade").value = "";
	document.getElementById("feras-cadastro-vista").value = "";
	document.getElementById("feras-cadastro-prazo").value = "";
};

function listaproduto(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabela-feras-body").innerHTML = this.responseText;
                document.getElementById("feras-atualizacao-data").innerHTML = "Atualizado em " + new Date().toLocaleString();
            }
	};
	xhttp.open("GET","listar.php",true);
	xhttp.send();

};

function cadastrarelistar(){
	cadastrarProduto();
	listaproduto();
};

function changehideninputid(id){
	document.getElementById("feras-input-deletar").value = id;
};



function deletarprodutobanco(){
	var xhttp = new XMLHttpRequest();
	var id = document.getElementById("feras-input-deletar").value;
	xhttp.open("GET","deletarproduto.php?id="+id,true);
	xhttp.send();
}

function deletarproduto(){
	deletarprodutobanco();
	listaproduto();
}

function updateProduto(){

	var produto = document.getElementById('feras-editar-produto').value;
    var descricao = document.getElementById('feras-editar-descricao').value;
    var quantidade = document.getElementById('feras-editar-quantidade').value;
    var vista = document.getElementById('feras-editar-vista').value;
    var prazo = document.getElementById('feras-editar-prazo').value;
    var id = document.getElementById('feras-editar-id').value;

    var xhttp = new XMLHttpRequest();

    xhttp.open("GET","editarproduto.php?id="+id+"&produto="+produto+"&descricao="+descricao+"&quantidade="+quantidade+"&vista="+vista+"&prazo="+prazo,true);
    xhttp.send();
};

function editarProduto(){
	updateProduto();
	listaproduto();
};

function validateLogin(){

	var usuario = document.getElementById("feras-validate-login-usuario").value;
	var senha = document.getElementById("feras-validate-login-senha").value;
;

	var xhttp = new XMLHttpRequest();

	

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
                if(!this.responseText){
                	document.getElementById("feras-alert-login-id").style.display="block";
                }
                else{
                	document.getElementById("feras-form-login").submit();
                }
            }
	};
	xhttp.open("POST","validateLogin.php",true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("usuario="+usuario+"&senha="+senha);
};

