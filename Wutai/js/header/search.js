

function pesquisar(texto) {
	$.ajax({
		type: "post",
		url: "pesquisar.act.php",
		data: { texto: texto },
		success: function (response) {
			$("#searchInput").html(response);
		},
	});
};