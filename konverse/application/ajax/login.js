let form = document.querySelector("form");
let actionButton = document.querySelector(".action");
let errorMessage = document.querySelector(".error-text");

form.onsubmit = (e) => {
  e.preventDefault();
};

actionButton.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if (data === "success") {
          location.href = "users.php";
        } else {
          errorMessage.style.display = "block";
          errorMessage.textContent = data;
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
