<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <style>

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f9;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.contact-container {
  width: 100%;
  max-width: 500px;
  background: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-container h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

.contact-form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #555;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #007BFF;
  outline: none;
}

.contact-form button {
  width: 100%;
  padding: 10px;
  background: #007BFF;
  color: #fff;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.contact-form button:hover {
  background: #0056b3;
}

  </style>
</head>
<body>
  <div class="contact-container">
    <h1>Contact Us</h1>
    <form action="Taskcrudinsert_post.php" method="post" class="contact-form">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name">
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email">
      
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" placeholder="phone">
      
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Your Message" rows="6"></textarea>
      
      <button type="submit">Send Message</button>
    </form>
  </div>
</body>
</html>
