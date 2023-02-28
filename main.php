$email = "example@example.com"; // replace with the email address you want to validate

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email";
} else {
    echo "Invalid email";
}

echo "this is the test part";