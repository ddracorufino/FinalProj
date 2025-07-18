<?php include('includes/header.php'); ?>
<main>
    <h2>Support Us</h2>
    <form action="process_donation.php" method="post">
        <input type="text" name="donor_name" placeholder="Full Name" required><br>
        <input type="number" name="amount" placeholder="Donation Amount" required><br>
        <button type="submit">Donate Now</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
