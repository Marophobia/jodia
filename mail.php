<?php
// Basic contact form handler for Jodia Energies & Logistics Ltd
// Expects POST fields: name, email, subject, phone, message

// Deny non-POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$isAjax = (isset($_POST['quform_ajax']) && $_POST['quform_ajax'] == '1')
    || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

function sanitize_header($value) {
    return trim(str_replace(["\r", "\n"], ' ', (string)$value));
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

// Basic validation
$errors = [];
if ($name === '') { $errors[] = 'name'; }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'email'; }
if ($subject === '') { $errors[] = 'subject'; }
if ($message === '') { $errors[] = 'message'; }

if (!empty($errors)) {
    if ($isAjax) {
        header('Content-Type: application/json; charset=UTF-8');
        $elementErrors = [];
        foreach ($errors as $field) {
            $elementErrors[$field] = [
                'errors' => ['This field is required.']
            ];
        }
        echo json_encode([
            'type' => 'error',
            'error' => '',
            'elementErrors' => $elementErrors
        ]);
        exit;
    }
    header('Location: contact.php?success=0');
    exit;
}

$to = 'info@jodiaenergies.com';
$mailSubject = 'Website Contact: ' . sanitize_header($subject);

$bodyLines = [
    'You have a new contact form submission from Jodia Energies & Logistics Ltd website.',
    '',
    'Name: ' . $name,
    'Email: ' . $email,
    'Phone: ' . $phone,
    'Subject: ' . $subject,
    '',
    'Message:',
    $message,
];
$body = implode("\n", $bodyLines);

$headers = [];
$headers[] = 'From: ' . sanitize_header($name) . ' <no-reply@jodiaenergies.com>';
$headers[] = 'Reply-To: ' . sanitize_header($email);
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'X-Mailer: PHP/' . phpversion();

@mail($to, $mailSubject, $body, implode("\r\n", $headers));

if ($isAjax) {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode([
        'type' => 'success',
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);
    exit;
}

header('Location: contact.php?success=1');
exit;
?>


