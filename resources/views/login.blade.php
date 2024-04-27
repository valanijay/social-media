<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-control {
            font-size: 20px;
            height: 75px;
        }

        .container {
            margin-top: 185px;
        }

        .img-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .img {
            margin-top: -88px;
            max-width: 500px; /* Adjust the width as needed */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="loginForm" action="#" method="post">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="loginEmail" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>

                <form id="registrationForm" action="#" method="post" style="display: none;">
                    <div class="mb-3">
                        <label for="registrationUserName" class="form-label">User Name</label>
                        <input type="text" name="text" class="form-control" id="registrationUserName" placeholder="User Name">
                    </div>
                    <div class="mb-3">
                        <label for="registrationEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="registrationEmail" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="registrationPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="registrationPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <p id="toggleText">Don't have an account? <a href="#" class="toggleLink">Register here</a></p>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                    <img src="https://previews.123rf.com/images/gmast3r/gmast3r1707/gmast3r170702845/83063883-social-media-icons-connected-with-lines-on-white-background-network-communication-concept-vector.jpg" alt="" class="img">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('toggleLink')) {
                event.preventDefault();
                toggleForms();
            }
        });

        function toggleForms() {
            var loginForm = document.getElementById('loginForm');
            var registrationForm = document.getElementById('registrationForm');
            var toggleText = document.getElementById('toggleText');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registrationForm.style.display = 'none';
                toggleText.innerHTML = "Don't have an account? <a href='#' class='toggleLink'>Register here</a>";
            } else {
                loginForm.style.display = 'none';
                registrationForm.style.display = 'block';
                toggleText.innerHTML = "Already have an account? <a href='#' class='toggleLink'>Login here</a>";
            }
        }
    </script>
</body>

</html>
