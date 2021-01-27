<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Form submitted successfully.</strong> Avenview team will contact you soon.</p>
  <hr>
  <p><button class="w3-button w3-red" onclick="location.href='https://avenview.com';">Return To Home Page</button></p>
</div>
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
$subject = 'Form Submission: '.$_POST['formName'];
$message = $dataTable;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: no-reply@avenview.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>