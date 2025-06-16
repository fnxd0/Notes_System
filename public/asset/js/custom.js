document.addEventListener("DOMContentLoaded", function () {
    const togglePassword = document.querySelectorAll('.toggle-password');

    togglePassword.forEach(btn => {
        btn.addEventListener('click', function (e) {
            const input = document.querySelector(this.getAttribute('toggle'));
            if (input.getAttribute('type') === 'password') {
                input.setAttribute('type', 'text');
                this.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
            } else {
                input.setAttribute('type', 'password');
                this.innerHTML = '<i class="bi bi-eye-fill"></i>';
            }
        });
    });
});
