<?php include_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>
    <main class="content container mt-5">
        <h1>Contact Me</h1>
        <form class="p-4 border rounded">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <div class="contact-details">
            <h3>Contact Details</h3>
            <p>Email: <a href="mailto:edukim89s@gmail.com">edukim89s@gmail.com</a></p>
            <p>Phone: +254 790 613220</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/edwin-kimuruae" target="_blank">linkedin.com/in/edwin-kimuruae</a></p>
        </div>
    </main>
    <?php include_once("templates/footer.php");?>
