if (
  typeof window.localStorage.getItem("username") == "undefined" ||
  window.localStorage.getItem("username") == null
) {
  let newName;
  do {
    newName = prompt("please enter a name");
  } while (newName == null);

  window.localStorage.setItem("username", newName);
}

const socket = io(connectionInfo);

let prompt = document.getElementById("prompt");

window.onload = () => {
  prompt.focus();
};

let chat = document.getElementById("chat");

function scrollToBottom(id) {
  let div = document.getElementById(id);
  div.scrollTop = div.scrollHeight - div.clientHeight;
}

prompt.addEventListener("keyup", (event) => {
  if (event.key === "Enter") {
    let m = {
      username: window.localStorage.getItem("username"),
      message: prompt.value,
    };
    socket.emit("message", m);
    prompt.value = "";
  }
});

socket.on("message", (e) => {
  let messageElement = document.createElement("p");
  messageElement.innerHTML = e.username + " : " + e.message;
  messageElement.className = "message";
  chat.appendChild(messageElement);
  scrollToBottom("chat");
});
