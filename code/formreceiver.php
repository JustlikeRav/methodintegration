<?php 

$dataTable = "<table>";
    foreach ($_POST as $key => $value) {
        $dataTable = $dataTable."<tr>";
        $dataTable = $dataTable."<td>";
        $dataTable = $dataTable.$key;
        $dataTable = $dataTable."</td>";
        $dataTable = $dataTable."<td>";
        $dataTable = $dataTable.$value;
        $dataTable = $dataTable."</td>";
        $dataTable = $dataTable."</tr>";
    }

$dataTable = $dataTable."</table>";

$to      = 'ravneet@avenview.com';
$subject = 'Form Submission '.$_POST['formName'];
$message = $dataTable;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: no-reply@avenview.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>