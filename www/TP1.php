<?php
// BDD
try {
  $pdo = new PDO(
    "pgsql:host=db;dbname=devdb",
    "devuser",
    "devpass",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (PDOException $e) {
  die("Erreur de connexion : " . $e->getMessage());
}

// variables
$firstname = $lastname = $email = "";
$errors = [];

if (!empty($_POST)){

  // Nettoyage/pwd
  $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
  $lastname  = htmlspecialchars(trim($_POST['lastname'] ?? ''));
  $email     = htmlspecialchars(strtolower(trim($_POST['email'] ?? '')));
  $pwd       = $_POST['pwd'] ?? '';
  $pwdConfirm = $_POST['pwdConfirm'] ?? '';

  // Vérifications
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Adresse email invalide.";
  }

  if (strlen($pwd) < 8) {
    $errors[] = "Le mot de passe doit contenir 8 caractères au moins";
  }

  if ($pwd !== $pwdConfirm) {
    $errors[] = "Les mots de passe ne correspondent pas";
  }

  // unicité email
  if (empty($errors)) {
    $req = $pdo->prepare("SELECT 1 FROM users WHERE email = ?");
    $req->execute([$email]);
    if ($req->fetch()) {
      $errors[] = "Cet email est déjà utilisé !!";
    }
  }

  // Insertion
  if (empty($errors)) {
    $hash = password_hash($pwd, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$firstname, $lastname, $email, $hash]);
    $success = true;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    h1 {
      margin-bottom: 30px;
      color: #2c3e50;
    }

    form {
      background: white;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 350px;
    }

    label {
      display: block;
      text-align: left;
      font-weight: bold;
      color: #444;
      margin-bottom: 5px;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
    }

    button:hover { background-color: #45a049; }

    ul.errors {
      list-style: none;
      padding: 0;
      margin-bottom: 15px;
      color: #c0392b;
      font-weight: bold;
    }

    .success {
      background: #dff0d8;
      color: #2d572c;
      padding: 15px;
      border-radius: 5px;
      text-align: center;
      width: 350px;
    }
  </style>
</head>
<body>

  <h1>Créer un compte</h1>

  <?php if (!empty($errors)): ?>
    <ul class="errors">
      <?php foreach ($errors as $err): ?>
        <li><?= htmlspecialchars($err) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php if (!empty($success)): ?>
    <div class="success">
      Inscription réussie !<br>
      Bienvenue <?= htmlspecialchars($firstname ?: $email) ?>.
    </div>
  <?php else: ?>
    <form method="POST">
      <label>Prénom :</label>
      <input type="text" name="firstname" value="<?= htmlspecialchars($firstname) ?>">

      <label>Nom :</label>
      <input type="text" name="lastname" value="<?= htmlspecialchars($lastname) ?>">

      <label>Email :</label>
      <input type="email" name="email" required value="<?= htmlspecialchars($email) ?>">

      <label>Mot de passe :</label>
      <input type="password" name="pwd" required>

      <label>Confirmer le mot de passe :</label>
      <input type="password" name="pwdConfirm" required>

      <button type="submit">S'inscrire</button>
    </form>
  <?php endif; ?>
</body>
</html>