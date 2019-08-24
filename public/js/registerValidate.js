// Capturo el formulario
var elFormu = document.querySelector('form');

// Capturo los campos del formulario y convirtiendo a un array
var losCampos = Array.from(elFormu.elements);

// Sacando al último elemento de un array
losCampos.pop();

// Regex para email
var regexEmail = /\S+@\S+\.\S+/;

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

			// Si el campo es el de email
			if (this.name === 'email') {
				// valido que el texto sea un formato de email válido
				if (!regexEmail.test(valorDelCampo)) {
					this.classList.add('is-invalid'); // agrego clase is-invalid
					divError.style.display = 'block'; // muestro el div del error
					divError.innerText = `Ingresá un email válido`; // seteo el texto del error en si

					// Sumar una key al objeto de errores
					errores[this.name] = true;
				} else {
					// Si es un formato de email válido
					this.classList.remove('is-invalid');
					divError.style.display = 'none';
					divError.innerText = '';
				}
			}
		}

		console.log(errores);
	});

	// Si el campo es el de avatar
	if (unCampo.name === 'avatar') {
		unCampo.addEventListener('change', function () {
			// obtenemos el nombre del archivo
			var nombreArchivo = this.value.split('\\').pop();
			this.nextElementSibling.innerText = nombreArchivo

			// sacamos la extensión del archivo
			var extensionArchivo = this.value.split('.').pop();

			// Array de extensiones permitidas
			var extensionesAceptadas = ['jpg', 'jpeg', 'png'];
			/*
				Buscamos la extensión del archivo actual en nuestro array de extensiones permitidas
				Si no se encuentra la extensión dentro de nuestro array retorna undefined
			*/
			var extensionEncontrada = extensionesAceptadas.find(function (ext) {
				return ext === extensionArchivo;
			});

			// Validamos la extensión
			if (extensionEncontrada === undefined) {
				// Si la extensión no es ninguna de la permitida
				this.classList.add('is-invalid');
				divError.style.display = 'block';
				divError.innerText = 'Formato inválido. Los formatos soportados son jpg, jpeg y png';

				// Sumar una key al objeto de errores
				errores[this.name] = true;
			} else {
				this.classList.remove('is-invalid');
				divError.style.display = 'none';
				divError.innerText = '';

				// Elimino la key al objeto de errores
				delete errores[this.name];
			}
		})
	}
});


// Valido cuando se envíe el formulario
elFormu.addEventListener('submit', function (event) {
	losCampos.forEach(function (unCampo) {
		var valorFinalDelCampo = unCampo.value.trim();

		if (valorFinalDelCampo === '') {
			errores[unCampo.name] = true;
		}
	});

	if (Object.keys(errores).length > 0) {
		alert('Campos vacíos');
		console.log(errores);
		event.preventDefault();
	}
})