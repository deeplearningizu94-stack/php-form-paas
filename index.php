<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Contact Form PaaS</title>
<style>
  /* Background dynamique avec dégradé aléatoire */
  body {
    font-family: Arial, sans-serif;
    background: linear-gradient(
      120deg,
      rgba(135,206,250,0.8),   /* Bleu ciel */
      rgba(192,192,192,0.8),   /* Argent */
      rgba(255,165,0,0.8)      /* Orange */
    );
    animation: bgchange 15s infinite alternate;
    padding: 50px;
  }

  @keyframes bgchange {
    0% { filter: hue-rotate(0deg); }
    100% { filter: hue-rotate(360deg); }
  }

  /* Formulaire centré */
  form {
    max-width: 500px;
    margin: auto;
    background: rgba(255,255,255,0.9);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
  }

  h2 {
    text-align: center;
    color: #1E90FF; /* Bleu ciel */
  }

  label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #FF8C00; /* Orange */
  }

  input, textarea, select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #C0C0C0; /* Argent */
    box-sizing: border-box;
  }

  button {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    background-color: #1E90FF; /* Bleu ciel */
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    cursor: pointer;
  }

  button:hover {
    background-color: #FF8C00; /* Orange au survol */
  }
</style>
</head>
<body>

<form action="form.php" method="post" enctype="multipart/form-data">
  <h2>Contact-Us</h2>

  <label for="name">Name</label>
  <input type="text" id="name" name="name" required>

  <label for="surname">Surname</label>
  <input type="text" id="surname" name="surname" required>

  <label for="country">Country</label>
  <input type="text" id="country" name="country" required>

  <label for="city">City</label>
  <input type="text" id="city" name="city" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="tel">Tel</label>
  <input type="tel" id="tel" name="tel" required>

  <label for="file">Select File</label>
  <input type="file" id="file" name="file">

  <label for="message">Message</label>
  <textarea id="message" name="message" rows="5" required></textarea>

  <button type="submit">Envoyer</button>
</form>

</body>
</html>
