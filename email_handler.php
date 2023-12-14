<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $organization = $_POST['organization'];
    $violation_time = $_POST['violation_time'];
    $violator_info = $_POST['violator_info'];
    $violation_description = $_POST['violation_description'];
    $violated_law = $_POST['violated_law'];
    $evidence = $_POST['evidence'];
    $retaliatory_risk = ($_POST['retaliatory_risk'] === 'yes') ? 'Da' : 'Ne';
    $retaliatory_measures = $_POST['retaliatory_measures'];
    $legal_options = isset($_POST['legal_options']) ? implode(', ', $_POST['legal_options']) : '';
    $confirmation = isset($_POST['confirmation']) ? ($_POST['confirmation'] === 'on' ? 'Potrjeno' : 'Nepotrjeno') : '';
    $place_date = $_POST['place_date'];
    $other_text = isset($_POST['other_text']) ? $_POST['other_text'] : '';
    $fullName = $_POST['fullname'];
    $connectionType = $_POST['connectionType'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $otherContacts = $_POST['otherContacts'];
    // Check if 'other_option' is selected and replace 'Drugo' with 'other_text' in $legal_options if it is
    if (($key = array_search('Drugo', $legal_options_array)) !== false) {
        $legal_options_array[$key] = $other_text;
        $legal_options = implode(', ', $legal_options_array);
    }
    // Prepare email content
    $to = "janko.jovicic@in-sist.si"; // Change this to your email address
    $subject = "=?UTF-8?B?" . base64_encode("Poročilo o kršitvi - $organization") . "?=";

    // Set necessary headers
    $boundary = md5(uniqid(rand(), true));
    $headers = "From: jankojovicicwork@gmail.com"; // Change this to your email address
    $headers .= "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Process file upload if present
    if (isset($_FILES['evidence_file'])) {
        $file_name = $_FILES['evidence_file']['name'];
        $temp_name = $_FILES['evidence_file']['tmp_name'];
        $file_type = $_FILES['evidence_file']['type'];
        $file_size = $_FILES['evidence_file']['size'];

        if ($file_size > 0) {
            $file_content = file_get_contents($temp_name);
            $file_content = chunk_split(base64_encode($file_content));
            
            // Start building the email body
            $message = "--$boundary\r\n";
            $message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
            $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
            $message .= "Organizacija: $organization\n";
            $message .= "Čas kršitve: $violation_time\n";
            $message .= "Informacije o kršitelju: $violator_info\n";
            $message .= "Opis kršitve: $violation_description\n";
            $message .= "Kršen predpis: $violated_law\n";
            $message .= "Dokazi: $evidence\n";
            $message .= "Tveganje za povračilne ukrepe: $retaliatory_risk\n";
            $message .= "Povračilni ukrepi: $retaliatory_measures\n";
            $message .= "Pravne možnosti: $legal_options\n";
            $message .= "Drugo: $other_text \n";

            $message .= "Potrditev resničnosti informacij: $confirmation\n";
            $message .= "Kraj in datum: $place_date\n\n";
            $message .= "Ime in priimek: $fullName\n";
            $message .= "Vrsta povezave: $connectionType\n";
            $message .= "Naslov: $address\n";
            $message .= "E-pošta: $email\n";
            $message .= "Telefon: $phone\n";
            $message .= "Drugi kontakti: $otherContacts\n";
            // Add the attachment
            $message .= "--$boundary\r\n";
            $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
            $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $message .= $file_content . "\r\n";
            $message .= "--$boundary--\r\n";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                echo json_encode(array("status" => "success"));
            } else {
                echo json_encode(array("status" => "error"));
            }
        }
    }
}
?>
