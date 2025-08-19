<?php include 'header.php'; ?>
 
<section class="contact">
  <h1>Contact Us</h1>
  <p>📍 Address: Galaxy Campus, Learning Orbit, Karachi, Pakistan</p>
  <p>📧 Email: hello@rehanschool.net</p>
  <p>📞 Phone: +92 300 1234567</p>
 
  <form action="scripts/form-handler.php" method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message 🚀</button>
  </form>
</section>
 
<?php include 'footer.php'; ?>
 
