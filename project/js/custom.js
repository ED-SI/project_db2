function AddItem(){
	var titulo = $("#titulo").val();
	var nPaginas = $("#npaginas").val();
	var nCopias = $("#ncopias").val();
	var servico = $("#servico").val();
	var data = $("#data").val();
	var valor = $("#valor").val();
	var fv = $("#fv").is(':checked');
	
	var tabela = document.getElementById("tabela");//nossa tabela
	var linha = tabela.insertRow(1);//guarda o objeto tabela e insere uma linha
	
	//criar 7 c�lulas vari�veis que representam a quantidade de vari�veis da tabela
	var cell1 = linha.insertCell(0);
	var cell2 = linha.insertCell(1);
	var cell3 = linha.insertCell(2);
	var cell4 = linha.insertCell(3);
	var cell5 = linha.insertCell(4);
	var cell6 = linha.insertCell(5);
	var cell7 = linha.insertCell(6);
	
	//inserir c�digo html na c�lulas conforme a ordem da interface
	//inserir a vari�vel t�tulo etc.
	cell1.innerHTML = titulo;
	cell2.innerHTML = nPaginas;
	cell3.innerHTML = nCopias;
	cell4.innerHTML = servico;
	cell5.innerHTML = fv;
	cell6.innerHTML = data;
	cell7.innerHTML = valor;
	
	exibirMsg();
}

function exibirMsg(){
	$('#msg').fadeIn();
	setTimeout(function (){
		$('#msg').fadeOut();//esconder
	}, 3000);//tempo que eu quero que ela seja exibida: 3000 milisegundos = 3 segundos
}