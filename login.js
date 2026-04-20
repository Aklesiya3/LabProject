function handleLogin(e) {
    e.preventDefault();

    const username = document.querySelector('input[type="text"]').value.trim();
    const password = document.querySelector('input[type="password"]').value.trim();

    if (!username || !password) {
        alert("Please fill in both username and password.");
        return;
    }

    alert(Login successful! Welcome ${username});
    document.querySelector("form").reset();
}

function initLogin() {
    const form = document.querySelector("form");
    form.addEventListener("submit", handleLogin);
}

initLogin();