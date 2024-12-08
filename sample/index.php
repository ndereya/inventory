<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offline-First Contact Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Offline-First Contact Manager</h1>

    <form id="contactForm">
      <div class="form-group">
        <label for="name1">Name 1:</label>
        <input type="text" id="name1" name="name1" required>
      </div>
      <div class="form-group">
        <label for="email1">Email 1:</label>
        <input type="email" id="email1" name="email1" required>
      </div>
      <div class="form-group">
        <label for="name2">Name 2:</label>
        <input type="text" id="name2" name="name2" required>
      </div>
      <div class="form-group">
        <label for="email2">Email 2:</label>
        <input type="email" id="email2" name="email2" required>
      </div>
      <button type="submit">Save Contacts</button>
    </form>

    <div id="offline-indicator" class="offline-indicator">You are currently offline.</div>
  </div>

  <script src="script.js"></script>
</body>
</html>