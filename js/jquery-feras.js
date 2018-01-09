// Call the dataTables jQuery plugin

 $(document).ready(function(){
 	var table = $("#dataTable").DataTable();
	var row_delete = "";
 	var row_edit = "";

 	$('body').on('click','#feras-button-cadastrar',function(){

	 	var vproduto = $("#feras-cadastro-produto").val();
		var vdescricao = $("#feras-cadastro-descricao").val();
		var vquantidade = $("#feras-cadastro-quantidade").val();
		var vvista = $("#feras-cadastro-vista").val();
		var vprazo = $("#feras-cadastro-prazo").val();

		if(vproduto&&vdescricao&&vquantidade&&vvista&&vprazo){
				$.ajax({
				type: "GET",
				url: "salvarproduto.php",
				data: {produto:vproduto,descricao:vdescricao,quantidade:vquantidade,vista:vvista,prazo:vprazo},
				success: function(response){
					if(response="success_save"){
						table.row.add([vproduto,vdescricao,vquantidade,vvista,vprazo,"<td class='text-center'><div><a class='btn btn-danger button-delete' data-toggle='modal' data-target='#modalExcluir' href=''><i class='fa fa-fw fa-close'></i></a> <a  class='btn btn-primary button-edit' data-toggle='modal' data-target='#modalEditar' href=''><i class='fa fa-fw fa-edit'></i></a></div></td>"]);
						table.draw();
						$("#feras-cadastro-produto").val('');
						$("#feras-cadastro-descricao").val('');
						$("#feras-cadastro-quantidade").val('');
						$("#feras-cadastro-vista").val('');
						$("#feras-cadastro-prazo").val('');
					}
				}
			});
		}
 	});

 	$('body').on('click','.button-delete',function(){
 		// console.log('delete');
 		row_delete = $($(this).parent().parent().parent());
 	});

 	$('body').on('click','.button-edit',function(){
 		// console.log('edit');
 		row_edit = $($(this).parent().parent().parent());

 		$('#feras-editar-produto').val($(row_edit.children()[0]).text());
 		$('#feras-editar-descricao').val($(row_edit.children()[1]).text());
 		$('#feras-editar-quantidade').val($(row_edit.children()[2]).text());
 		$('#feras-editar-vista').val($(row_edit.children()[3]).text());
 		$('#feras-editar-prazo').val($(row_edit.children()[4]).text());
 	});

 	$('body').on('click','#feras-confirma-delete',function(){

 		var bproduto = $(row_delete.children()[0]).text();
 		var bdescricao = $(row_delete.children()[1]).text();
 		var bquantidade = $(row_delete.children()[2]).text();
 		var bvista = $(row_delete.children()[3]).text();
 		var bprazo = $(row_delete.children()[4]).text();

 		$.ajax({
				type: "GET",
				url: "deletarproduto.php",
				data: {produto:bproduto,descricao:bdescricao,quantidade:bquantidade,vista:bvista,prazo:bprazo},
				success: function(response){
					// alert(response);
					if(response=="success_delete"&&row_delete){
						table.row(row_delete).remove();
						table.draw();
						row_delete='';
					}
				}
				
			});

 	});

 	$('body').on('click','#feras-editar-modal-salvar',function(){
 			// console.log('editar');

 			var vbproduto = $(row_edit.children()[0]).text();
	 		var vbdescricao = $(row_edit.children()[1]).text();
	 		var vbquantidade = $(row_edit.children()[2]).text();
	 		var vbvista = $(row_edit.children()[3]).text();
	 		var vbprazo = $(row_edit.children()[4]).text();

	 		var vproduto = $('#feras-editar-produto').val();
	 		var vdescricao = $('#feras-editar-descricao').val();
	 		var vquantidade = $('#feras-editar-quantidade').val();
	 		var vvista = $('#feras-editar-vista').val();
	 		var vprazo = $('#feras-editar-prazo').val();

	 		if(vproduto&&vdescricao&&vquantidade&&vvista&&vprazo){

		 			$.ajax({
						type: "GET",
						url: "editarproduto.php",
						data: {bproduto:vbproduto,bdescricao:vbdescricao,bquantidade:vbquantidade,bvista:vbvista,bprazo:vbprazo,produto:vproduto,descricao:vdescricao,quantidade:vquantidade,vista:vvista,prazo:vprazo},

						success: function(response){
							// alert(response);
							if(response=="success_edit"&&row_edit){
								table.row.add([vproduto,vdescricao,vquantidade,vvista,vprazo,"<td class='text-center'><div><a class='btn btn-danger button-delete' data-toggle='modal' data-target='#modalExcluir' href=''><i class='fa fa-fw fa-close'></i></a> <a  class='btn btn-primary button-edit' data-toggle='modal' data-target='#modalEditar' href=''><i class='fa fa-fw fa-edit'></i></a></div></td>"]);
								table.row(row_edit).remove();
								table.draw();
								row_edit='';
							}
							
						}
						
					});
	 		}
 	});

 	$('body').on('click','#feras-button-validate-id',function(){

 		var vusuario = $("#feras-validate-login-usuario").val();
		var vsenha = $("#feras-validate-login-senha").val();

		// console.log(vusuario+vsenha);

		$.ajax({
				type:"POST",
				url:"validateLogin.php",
				data: {usuario:vusuario,senha:vsenha},
				success: function(response){
					if(response=="success_login"){
						document.getElementById("feras-form-login").submit();
					}
					else{
						document.getElementById("feras-alert-login-id").style.display="block";
					}
				}
			});

 	});


 });

 
