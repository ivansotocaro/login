let email = document.getElementById("email");
let password = document.getElementById("password");
let errorEmail = document.getElementById("error-message");
let errorPassword = document.getElementById("error-password");
let eyeInput = document.getElementById("eye");
let buttonForm = document.getElementById("buttonForm");
let loginForm = document.getElementById("loginForm");

// buttonForm.disabled = true;
errorEmail.style.display = "none";

loginForm.addEventListener("submit", function (e) {
  e.preventDefault();

  if(isValidForm()){
    HoldOn.open({
      theme: "sk-cube-grid",
    });
    let formData = new FormData(this);

    fetch("login/signIn", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {

        if (data.status === 200) {

          setTimeout(function () {
            window.location.href = "http://localhost/login/user";
          }, 2000);

        } else {
          HoldOn.close();
          alert(response.message);

        }

      })
      .catch((error) => console.log("Error:", error));

  }

});


function isValidForm() {

  let isValid = true;
  let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (email.value === "") {

    errorEmail.textContent = "El correo es obligatorio.";
    errorEmail.style.display = "block";
    email.classList.add("invalid");
    isValid = false;
  } else if (!emailPattern.test(email.value)) {

    errorEmail.textContent = "Por favor, ingresa un correo válido";
    errorEmail.style.display = "block";
    email.classList.add("invalid");
    isValid = false;

  } else {
    errorEmail.textContent = "";
    errorEmail.style.display = "none";
    email.classList.remove("invalid");
  }

  if (password.value.length < 6) {

    errorPassword.textContent =
      "La contraseña debe tener al menos 6 caracteres.";
    errorPassword.style.display = "block";
    password.classList.add("invalid");
    eyeInput.classList.add("invalid");
    isValid = false;

  } else {
    errorPassword.textContent = "";
    errorPassword.style.display = "none";
    password.classList.remove("invalid");
    eyeInput.classList.remove("invalid");
  }

  return isValid;

}

