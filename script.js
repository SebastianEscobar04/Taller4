document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        const formMessage = document.getElementById('formMessage');
        formMessage.innerHTML = '<p style="color: green;">Formulario enviado con éxito.</p>';
    } else {
        const formMessage = document.getElementById('formMessage');
        formMessage.innerHTML = '<p style="color: red;">Por favor, completa todos los campos.</p>';
    }
});
