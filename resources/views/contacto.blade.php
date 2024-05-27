<form action="submit.php" method="POST">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Correo:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Celular:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="message">Mensaje:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>
