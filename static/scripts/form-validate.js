(function() {
    'use strict';
    const user = {
        login: 'Denis',
        password: '12345'
    };

    window.addEventListener('load', function() {
        let forms = document.getElementsByClassName('needs-validation');
        let validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                const login = document.getElementById('login') && document.getElementById('login').value;
                const password = document.getElementById('password') && document.getElementById('password').value;

                if (login && password) {
                    if (user.login !== login || user.password !== password) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        document.getElementById('nextPage').classList.remove('isDisabled');
                        event.preventDefault();
                        event.stopPropagation();
                    }
                }

                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
