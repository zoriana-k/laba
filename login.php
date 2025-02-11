<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма реєстрації</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <h1>Форма реєстрації нового користувача</h1>
    <div class="form-container">
        <form id="registrationForm">
            <fieldset>
                <legend>Реєстраційні дані</legend>
                <label for="username">Ім'я користувача:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" required><br>
                <label for="confirmPassword">Підтвердити пароль:</label><br>
                <input type="password" id="confirmPassword" name="confirmPassword" required><br>
            </fieldset>
            <fieldset>
                <legend>Персональні дані</legend>
                <label for="firstName">Ім'я:</label><br>
                <input type="text" id="firstName" name="firstName" required><br>
                <label for="lastName">Прізвище:</label><br>
                <input type="text" id="lastName" name="lastName" required><br>
                <label for="email">Електронна пошта:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="dob">Дата народження:</label><br>
                <input type="date" id="dob" name="dob" required><br>
            </fieldset>
            <button type="submit">Зареєструватися</button>
        </form>
        <p id="result"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>