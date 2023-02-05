$(function () {
    $('#register').click(function (e) {
        var valid = this.form.checkValidity();
        if (valid) {
            document.getElementById("modal-trigger-center").checked = false;
            var username = $('#username').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var passwordagain = $('#passwordagain').val();
            if (password.length < 6) {
                Swal.fire({
                    'title': 'ERROR!',
                    'text': 'Minimum 6 karakter legyen a jelszó! 😒',
                    'type': 'error'
                });
                return false;
            } else if (password !== passwordagain) {
                Swal.fire({
                    'title': 'ERROR!',
                    'text': 'A jelszavaknak egyeznie! 😒',
                    'type': 'error'
                });
                return false;
            } else{
/*             else if (password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$/)) {
                Swal.fire({
                    'title': 'HIBA!',
                    'text': 'A jelszónak tartalmaznia kell: \nkis,nagy betűket illetve számokat! 😒',
                    'type': 'error'
                })
                return false;
            } */
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: { username: username, email: email, password: password },
                success: function (data) {
                    if (data) {
                        Swal.fire({
                            'title': 'Siker!❤',
                            'text': "Üdvözlünk az oldalon \n\n" + username + " !",
                            'type': 'success'
                        });
                    } else {
                        $('#username').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#passwordagain').val('');
                        Swal.fire({
                            'title': 'HIBA!',
                            'text': 'Ez a felhasználónév, vagy email\nmár foglalt!! 😒',
                            'type': 'error'
                        });
                    }
                }
            });
        }
        } else {
        }
    });
});
