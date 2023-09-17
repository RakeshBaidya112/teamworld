<?php



require_once('./Emailer.php');



if ($_POST) {

    $origin = $_POST['origin'];

    $destination = $_POST['destination'];

    $cargo_ready_date = $_POST['cargo_ready_date'];

    $ct_20GP = $_POST['ct_20GP'];

    $ct_40GP = $_POST['ct_40GP'];

    $ct_40HC = $_POST['ct_40HC'];

    $ct_45HC = $_POST['ct_45HC'];

    $cargo_detail = $_POST['cargo_detail'];

    $commodity = $_POST['commodity'];

    $temp_range = isset($_POST['temp_range']) ? $_POST['temp_range'] : "";

    $un_no = isset($_POST['un_no']) ? $_POST['un_no'] : "";

    $imco_range = isset($_POST['imco_range']) ? $_POST['imco_range'] : "";

    $note = $_POST['note'];

    $name = $_POST['name'];

    $email = $_POST['email'];

    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "-";



    if (empty($_POST['g-recaptcha-response'])) {

        $captcha_error = 'Captcha is required';

        header('HTTP/1.1 500 ' . $captcha_error);

        header('Content-Type: application/json; charset=UTF-8');

        die(json_encode(array('message' => $captcha_error, 'code' => 900)));

    } else {

        $secret_key = '6Ld67WwgAAAAAPgzmxWzQsm0FYzZ8qd0LTheSPL7';

        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);



        $response_data = json_decode($response);



        if (!$response_data->success) {

            $captcha_error = 'Captcha verification failed';

            header('HTTP/1.1 500 ' . $captcha_error);

            header('Content-Type: application/json; charset=UTF-8');

            die(json_encode(array('message' => $captcha_error, 'code' => 901)));

        }

    }



    $emailer = new Emailer('FCL Web Enquiry');



    $refid = time() . rand(10 * 45, 100 * 98);



    $email_content = "<html><body><h4>Reference Number: $refid</h4>";

    $email_content .= "<table style='font-family: Arial;'><tbody>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Name</td><td style='background: #eee; padding: 10px;'>$name</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Email</td><td style='background: #eee; padding: 10px;'>$email</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Mobile</td><td style='background: #eee; padding: 10px;'>$mobile</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Origin</td><td style='background: #eee; padding: 10px;'>$origin</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Destination</td><td style='background: #eee; padding: 10px;'>$destination</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Cargo Ready Date</td><td style='background: #eee; padding: 10px;'>$cargo_ready_date</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>20GP</td><td style='background: #eee; padding: 10px;'>$ct_20GP</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>40GP</td><td style='background: #eee; padding: 10px;'>$ct_40GP</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>40HC</td><td style='background: #eee; padding: 10px;'>$ct_40HC</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>45HC</td><td style='background: #eee; padding: 10px;'>$ct_45HC</td></tr>";

    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Commodity</td><td style='background: #eee; padding: 10px;'>$commodity</td></tr>";

    if ($cargo_detail == "Hazardous") {

        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>UN No.</td><td style='background: #eee; padding: 10px;'>$un_no</td></tr>";

        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>IMCO Range</td><td style='background: #eee; padding: 10px;'>$imco_range</td></tr>";

    }

    if ($cargo_detail == "Reefer") {

        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Temp Range</td><td style='background: #eee; padding: 10px;'>$temp_range</td></tr>";

    }

    $email_content .= "</tbody></table>";

    $email_content .= "<p style='font-family: Arial;'><strong>Note : (Shipping Reference)</strong><i> $note</i>.</p>";

    $email_content .= '</body></html>';



    // echo $email_content;

    $emailer->sendMail($email_content, $refid);

}

