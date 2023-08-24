let form = document.querySelector(".typing-area");
let textInput = document.querySelector(".input-field");
let actionButton = document.querySelector(".action");
let messages = document.querySelector(".messages-section");

form.onsubmit = (e) => {
  e.preventDefault();
};

const scrollToBottom = () => {
  messages.scrollTop = messages.scrollHeight;
};

messages.onmouseenter = () => {
  messages.classList.add("active");
};
messages.onmouseleave = () => {
  messages.classList.remove("active");
};

actionButton.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/insert-chats.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        textInput.value = "";
        scrollToBottom();
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/get-chats.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        messages.innerHTML = data;
        if (!messages.classList.contains("active")) {
          scrollToBottom();
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}, 500);
