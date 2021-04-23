<?php



if (!isset($_SESSION)) {

    session_start();
}



include '../../../include.php';



$username = (string) filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$password = (string) filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$arr = array();



$passwordFIlteCode = explode("+", $password)[0];



if ($passwordFIlteCode === "CSHLTD") {



    $password = str_replace('CSHLTD+', '', $password);
    // var_dump($password);
    // dd(password_hash($password, PASSWORD_DEFAULT));


    $user_found = User::findUser($username, true);



    if ($user_found) {



        $user_id = (int) $user_found['id'];

        $hash = (string) $user_found['password'];
        $email = (string) $user_found['email'];
        // $email = 'kavininisansala96@gmail.com';
        // $email1 = 'coralsands@stmail.lk';
        // $email2 = 'accountant.coralsands@stmail.lk';
        // $email3 = 'coralsands@sltnet.lk';

        if (password_verify($password, $hash)) {



            $authcode = User::random_str();



            if (User::setAuth($user_id, $authcode) === TRUE) {



                $_SESSION['user_id'] = $user_id;

                $_SESSION['authcode'] = $authcode;
                $_SESSION['is_verified'] = 0;


                $rand = User::GenarateCode($user_id);
                if ($rand) {
                    $resetcode = $rand;

                    date_default_timezone_set('Asia/Colombo');

                    $todayis = date("l, F j, Y, g:i a");

                    $subject = 'Coral Sands Hotel | Account Verification';
                    $from = 'info@coralsandshotel.com'; // give from email address


                    $headers = "From: " . $from . "\r\n";
                    $headers .= "Reply-To: " . $email . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $html = "<table style='border:solid 1px #F0F0F0; font-size: 15px; font-family: sans-serif; padding: 0;'>";

                    // $html .= "<tr><th colspan='3' style='font-size: 18px; padding: 30px 25px 0 25px; color: #fff; text-align: center; background-color: #4184F3;'><h2>Account Verification</h2> </th> </tr>";

                    $html .= "<tr><td colspan='3' style='font-size: 16px; padding: 20px 25px 10px 25px; color: #333; text-align: left; background-color: #fff;'><b>Please use below code to verify your account.</b> </td> </tr>";

                    $html .= "<tr><td colspan='3' style='font-size: 14px; padding: 5px 25px 10px 25px; color: #666; background-color: #fff; line-height: 25px;'><h3>Verification Code: " . $resetcode . "</h3></td></tr>";

                    // $html .= "<tr><td colspan='3' style='font-size: 14px; background-color: #FAFAFA; padding: 25px; color: #333; font-weight: 300; text-align: justify; '>Thank you</td></tr>";

                    $html .= "</table>";

                    if (mail($email, $subject, $html, $headers)) {
                        // if (
                        //     mail($email1, $subject, $html, $headers) && 
                        // mail($email2, $subject, $html, $headers) && 
                        // mail($email3, $subject, $html, $headers)
                        // ) {
                        $arr['status'] = 'success';
                    } else {
                        $arr['status'] = 'error';
                    }
                }
            } else {

                $arr['error'] = 'Authorization';
            }
        } else {

            $arr['error'] = 'Password';
        }
    } else {

        $arr['error'] = 'Username';
    }
}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);
