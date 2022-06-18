<?
$title = htmlspecialchars($_POST['form_title']);
$name = htmlspecialchars($_POST['form_name']);
$email = htmlspecialchars($_POST["form_email"]);
$message = htmlspecialchars($_POST["form_message"]);
$result = $title . $name . $email . $message;
$output = '';
if (!empty($result)) {
    $output = 'success';
} else {
    $output = 'error';
}
