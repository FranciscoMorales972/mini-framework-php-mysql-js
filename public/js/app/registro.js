window.onload = () => {
    const btnRegistrar = document.querySelector("#btnRegistrar");
    const formRegister = document.querySelector("#formRegistrar");
    const username = document.querySelector("#username");
    const userEmail = document.querySelector("#userEmail");
    const userPass = document.querySelector("#userPass");
    const userPassConfirm = document.querySelector("#userPassConfirm");


    const url = `${BASE_URL}Registro/save`;

    btnRegistrar.addEventListener("click", function (e) {
        e.preventDefault();
        if (username.value !== "" || userEmail.value !== "" || userPass.value !== "" || userPassConfirm.value !== "") {
            //validamos que los campos no esten vacios, luego que el correo sea valido y que las contraseñas sean iguales
            if (validate_email(userEmail.value)) {
                if (userPass.value === userPassConfirm.value) {
                    let formdata = new FormData(formRegister)
                    save(formdata);
                    formRegister.reset();
                } else {
                    showError("las contraseñas son diferentes");
                    formRegister.reset();
                }
            } else {
                showError('Ingrese un correo valido.');
            }
        } else {
            showError("todos los campos debe estar llenos");
            formRegister.reset();
        }
    })



    async function save(datos) {
        try {
            const respuesta = await fetch(url, {
                method: "POST",
                body: datos
            });


            const resultado = await respuesta.json();


            console.log(resultado);

        } catch (error) {
            console.log(error);
        }
    }



    function showError(msg) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: msg
        })
    }
    function validate_email(email) {
        const re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
        if (!re.exec(email)) {
            return false;
        }

        return true;
    }
}