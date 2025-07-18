<?php include('includes/header.php'); ?>
<main>
    <h2>Volunteer With Us</h2>
    <form action="volunteer_signup.php" method="post">
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <button type="submit">Join Now</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
