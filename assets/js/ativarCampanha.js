setInterval(function () {
	/* Atualiza notificações a cada 5s */
	$.post("http://[::1]/PINT-Web/api/test/123456", function (data) {
		data = JSON.parse(data);

	});
}, 5000);

function getID() {
	let nodeElement = document.getElementById('#idCampanha').textContent;
	document.getElementById('#codigo').value = nodeElement;
}