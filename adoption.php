<?php include('includes/header.php'); ?>
<main>
    <h2>Adoption Center</h2>
    <form action="process_adoption.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" placeholder="Why do you want to adopt?"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
