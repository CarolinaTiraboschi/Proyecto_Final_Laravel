// Capturo el formulario
var elFormu = document.querySelector('form');

// Capturo los campos del formulario y convirtiendo a un array
var losCampos = Array.from(elFormu.elements);

// Sacando al último elemento de un array
losCampos.pop();


// Objeto que acumula los errores
var errores = {};

// Asignando el evento blur a TODOS los campos del array
losCampos.forEach(function (unCampo) {
	// div del error
	var divError = null;

	// capturo al div del mensaje de error de éste campo
	if (unCampo.type !== 'file') {
		divError = unCampo.nextElementSibling;
	} else {
		divError = unCampo.parentElement.nextElementSibling;
	}

	unCampo.addEventListener('blur', function () {
		// capturo el value del campo
		var valorDelCampo = unCampo.value.trim();

		// valido si el campo está vacío
		if (valorDelCampo === '') {
			this.classList.add('is-invalid'); // agrego clase is-invalid
			divError.style.display = 'block'; // muestro el div del error
			divError.innerText = `El campo ${this.name} es obligatorio`; // seteo el texto del error en si

			// Sumar una key al objeto de errores
			errores[this.name] = true;
		} else {
			// Si no está vacío revierto lo anterior
			this.classList.remove('is-invalid');
			divError.style.display = 'none';
			divError.innerText = '';

			// Si no hay error elimino la key en el objeto de errores
			delete errores[this.name];
			}
		}

		console.log(errores);
	});
