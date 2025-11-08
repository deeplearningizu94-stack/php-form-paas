<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Form - PaaS Demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h3>Contactez-nous</h3>
    <form action="send.php" method="POST" class="mt-3">
      <input type="text" name="name" placeholder="Votre nom" class="form-control mb-2" required>
      <input type="email" name="email" placeholder="Votre email" class="form-control mb-2" required>
      <textarea name="message" placeholder="Votre message" class="form-control mb-2" required></textarea>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
</body>
</html>
