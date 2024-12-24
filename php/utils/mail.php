<?php
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6LcZRZ4jAAAAAC3w-ODFMR48MekVPoBpXzu19qO6',
    'response' => $_POST['g-recaptcha-response'],
    'remoteip' => $_SERVER['REMOTE_ADDR']
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result);

if ($response->success) {
    if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['email']) || empty($_POST['message'])) {
        header('Location: ../../index.php?menu=6&failSubmit=1');
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        $to = 'alaisney7@gmail.com';
        $body = 'De : ' . $name . ' (' . $email . ')' . "\n\n" . $message;
        mail($to, $subject, $body);

        header('Location: ../../index.php?menu=6&succes=1');
    }
}else{
    header('Location: ../../index.php?menu=6&failCaptcha=1');
}
?>