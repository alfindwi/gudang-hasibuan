<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Registrasi</title>
</head>
<body>
    <h2>Registrasi</h2>
    <form action="proses_registrasi.php" method="post">
        <div class="form-group">
            <label for="nama">Username:</label>
            <input type="nama" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="password">Re-Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <button a href="index.php"type="submit">Simpan</button>
    </form>
</body>
</html>
