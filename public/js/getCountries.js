// 1. Capturo al select de países
var selectPaises = document.querySelector('[name=country]');

fetch('https://restcountries.eu/rest/v2/all')
	.then(function (response) {
		return response.json();
	})
	.then(function (data) {
		for (var pais of data) {
			selectPaises.innerHTML += `<option value="${pais.alpha2Code}">${pais.name}</option>`;
		}
	})
	.catch(function (error) {
		console.log(error);
	});

// Forma de insertar países al select - long version
/*
	var elOption = document.createElement('option');
	var nombrePais = document.createTextNode(pais.name)
	elOption.value = pais.alpha2Code;
	elOption.append(nombrePais);
	selectPaises.appendChild(elOption);
*/

// Forma de insertar países al select - short version
// selectPaises.innerHTML += '<option value=' + pais.alpha2Code + '>' + pais.name + '</option>';
