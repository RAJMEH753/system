<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
                <h3 class="text-center" style="color: #2E368F;">Login</h3>

                <form action="./backend/authenticate.php" method="POST">
                    <div class="mb-3">
                        <label for="username_or_email" class="form-label">Username or Email:</label>
                        <input type="text" class="form-control" id="username_or_email" name="username_or_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <? $hashed_password = password_hash("$2y$10$abcdefghijklmnopqrstuv", PASSWORD_BCRYPT); 
                            echo $hashed_password; ?>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #FDD306; color: black;">Login</button>
                </form>
                
                <p class="text-center mt-3">Don't have an account? <a href="register.php" style="color: #2E368F;">Sign up</a></p>
            </div>
        </div>
    </body>
</html>
