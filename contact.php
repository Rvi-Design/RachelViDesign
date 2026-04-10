<?php

require('includes/connection.php');

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name       = trim(strip_tags($_POST['name'] ?? ''));
    $email      = trim(strip_tags($_POST['email'] ?? ''));
    $reason     = trim(strip_tags($_POST['reason'] ?? ''));
    $esd        = trim(strip_tags($_POST['esd'] ?? ''));
    $social     = trim(strip_tags($_POST['social'] ?? ''));

    if (empty($name))                        $errors[] = "Name is required.";
    if (empty($email))                       $errors[] = "Email is required.";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please enter a valid email address.";
    if (empty($reason))                      $errors[] = "Please include a reason for contact.";

    if (empty($errors)) {

        // --------------------Insert into DB---------------
        $stmt = $conn->prepare(
            "INSERT INTO contacts (name, email, reason, esd, social_media)
             VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("sssss", $name, $email, $reason, $esd, $social);
        $stmt->execute();
        $stmt->close();

        $to      = "rachelvipayette@gmail.com";
        $subject = "New Contact Form Submission — Rachel Vi Design";

        $body  = "You have a new message from your website contact form.\n\n";
        $body .= "Name:               $name\n";
        $body .= "Email:              $email\n";
        $body .= "Reason for contact: $reason\n";
        $body .= "Estimated start:    " . ($esd ?: "Not provided") . "\n";
        $body .= "Social media:       " . ($social ?: "Not provided") . "\n";

        $headers = "From: noreply@rachelvipayette.com\r\n";
        $headers .= "Reply-To: $email\r\n";

        mail($to, $subject, $body, $headers);

        $success = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachel Vi Design || Contact</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <?php include 'includes/requiredLinks.inc'; ?>
</head>
<body>

<?php include 'includes/nav.inc'; ?>

<main>

    <div id="contactHeader">
        <?php include 'inclludes/backbttn.inc'; ?>
        <h1 class="category">Contact Me</h1>
    </div>

    <section id="contactSection">

        <h2>Please Complete the Form Below</h2>

        <?php if ($success): ?>
            <p class="formSuccess">Thank you, <?= htmlspecialchars($name) ?>! I'll be in touch within 10 business days.</p>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
            <ul class="formErrors">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!$success): ?>
        <form method="POST" action="contact.php" id="contactForm" novalidate>

            <div class="formRow">
                <div class="formGroup">
                    <label for="name">First and Last Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Jane Doe"
                        value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                        maxlength="80"
                        required>
                </div>

                <div class="formGroup">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="JaneD@gmail.com"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        maxlength="100"
                        required>
                </div>
            </div>

            <div class="formGroup">
                <label for="reason">Reason for Contact</label>
                <textarea
                    id="reason"
                    name="reason"
                    placeholder="I am a small business and would like to have a website built."
                    rows="6"
                    maxlength="2000"
                    required><?= htmlspecialchars($_POST['reason'] ?? '') ?></textarea>
            </div>

            <div class="formRow">
                <div class="formGroup">
                    <label for="esd">Estimated Start Date</label>
                    <input
                        type="text"
                        id="esd"
                        name="esd"
                        placeholder="e.g. May 2025"
                        value="<?= htmlspecialchars($_POST['esd'] ?? '') ?>"
                        maxlength="40">
                </div>

                <div class="formGroup">
                    <label for="social">Social Media <span class="optional">(optional)</span></label>
                    <input
                        type="text"
                        id="social"
                        name="social"
                        placeholder="@yourhandle or profile URL"
                        value="<?= htmlspecialchars($_POST['social'] ?? '') ?>"
                        maxlength="100">
                </div>
            </div>

            <div id="submitRow">
                <button type="submit" class="bannerButton" id="submitBtn">Submit</button>
            </div>

        </form>
        <?php endif; ?>

        <p id="responseNote">I will try and get back to you within 10 business days.</p>

    </section>

</main>

<?php include 'includes/footer.inc'; ?>

<script src="menuToggle.js"></script>

</body>
</html>
