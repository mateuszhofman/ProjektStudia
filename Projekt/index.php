<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="phone-mockup">
        <div class="login-screen">
            <!-- Formularz logowania -->
            <?php if (!isset($_GET['showRegister']) || $_GET['showRegister'] != 'true'): ?>
            <div class="login-box">
                <h2>Zaloguj się</h2>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Login" required>
                    <input type="password" name="password" placeholder="Hasło" required>
                    <button type="submit">Zaloguj</button>
                </form>
                <p class="register-link">Nie masz konta? <a href="index.php?showRegister=true">Zarejestruj się</a></p>
                <?php
                    if (isset($_GET['error'])) {
                        echo "<p class='error-message'>Błędny login lub hasło.</p>";
                    }
                ?>
            </div>
            <?php endif; ?>

            <!-- Formularz rejestracji, wyświetlany tylko, gdy showRegister=true -->
            <?php if (isset($_GET['showRegister']) && $_GET['showRegister'] == 'true'): ?>
            <div class="login-box">
                <h2>Rejestracja</h2>
                <form action="register.php" method="POST">
                    <input type="text" name="username" placeholder="Nowy login" required />
                    <input type="password" name="password" placeholder="Nowe hasło" required />
                    <button type="submit">Zarejestruj</button>
                </form>
                <p class="register-link">Masz już konto? <a href="index.php">Zaloguj się</a></p>

                <?php if (isset($_GET['registerError'])): ?>
                <p class='error-message'>Użytkownik o tej nazwie już istnieje!</p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>