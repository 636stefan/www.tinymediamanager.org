<?php

    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }
    // assemble the message from the POST fields

    // getting the captcha
    $captcha = "";
    if (isset($_POST["g-recaptcha-response"]))
        $captcha = $_POST["g-recaptcha-response"];

    if (!$captcha){
        echo "captcha_error";
    }
    // handling the captcha and checking if it's ok
    $secret = "6LflMhYTAAAAAG127A1eG3GOMElM7zWu30E5Hnp6";
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

    // if the captcha is cleared with google, send the mail and echo ok.
    if ($response["success"] == false) {
       echo "captcha_error";
    }
    else {
        // build the email
        $to = "support@tinymediamanager.org";

        $headers = "From: ".$_REQUEST['email'];
        $subject = "Contact: ".$_REQUEST['subject'];

        $message_body = "Name:\n".$_REQUEST['name'];
        $message_body = $message_body."\n\nEmail:\n".$_REQUEST['email'];
        $message_body = $message_body."\n\nSubject:\n".$_REQUEST['subject'];
        $message_body = $message_body."\n\nMessage:\n".$_REQUEST['message'];
        $message_body = $message_body."\n\nSent from: ".$_SERVER['REMOTE_ADDR']." (".gethostbyaddr( $_SERVER['REMOTE_ADDR'] ).")";

        ### Attachment Preparation ###
        $file_attached = false;
        if(isset($_FILES['file_attach'])) { //check uploaded file
            //get file details we need
            $file_tmp_name    = $_FILES['file_attach']['tmp_name'];
            $file_name        = $_FILES['file_attach']['name'];
            $file_size        = $_FILES['file_attach']['size'];
            $file_type        = $_FILES['file_attach']['type'];
            $file_error       = $_FILES['file_attach']['error'];

            //exit script and output error if we encounter any
            if($file_error > 0) {
                $mymsg = array(
                1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
                2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                3=>"The uploaded file was only partially uploaded",
                4=>"No file was uploaded",
                6=>"Missing a temporary folder" );

                echo $file_error;
                exit;
            }

            //read from the uploaded file & base64_encode content for the mail
            $handle = fopen($file_tmp_name, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $encoded_content = chunk_split(base64_encode($content));
            //now we know we have the file for attachment, set $file_attached to true
            $file_attached = true;
        }
        if($file_attached) { //continue if we have the file
            $boundary = md5("sanwebe");
            //header
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From:".$_REQUEST['email']."\r\n";
            $headers .= "Reply-To: ".$_REQUEST['email']."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

            //plain text
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= chunk_split(base64_encode($message_body));

            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $body .= $encoded_content;
        }else{
            //proceed with PHP email.
            $headers = "From:".$_REQUEST['email']."\r\n".
            'Reply-To: '.$_REQUEST['email'].'' . "\n" .
            'X-Mailer: PHP/' . phpversion();
            $body = $message_body;
        }

        @mail($to, $subject, $body, $headers);
        //@mail($email_to, $subject, $finalMsg);

        // the echo goes back to the ajax, so the user can know if everything is ok
        echo "success";
      }
?>
