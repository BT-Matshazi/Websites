<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    function post_captcha($user_response) 
    {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lf5PbgdAAAAAJ4e-G6NXDhtF0bIFBLiq97jYO-q',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) 
    {
        // What happens when the CAPTCHA wasn't checked
        // echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
        header("Location:reca-error.html");
    }
    else 
    {
        $name = $_POST['name'];
        $email= $_POST['email'];
        $subjects = $_POST['phonenumber'];
        $message= $_POST['message'];
        $to = "bekithembamatshazi@gmail.com";
        $subject = "Mail From website";
        $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone Number=" . $subjects. "\r\n Message =" . $message;
        $headers = "From: noreply@yoursite.com" . "\r\n" .
        "CC: somebodyelse@example.com";

        if($email!=NULL)
        {
            mail($to,$subject,$txt,$headers);
        }

        header("Location:reca-thankyou.html");
    } 
}
?>

