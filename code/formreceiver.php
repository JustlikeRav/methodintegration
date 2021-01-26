<table>
<?php 

$dataTable = "";
    foreach ($_POST as $key => $value) {
        $dataTable = "<tr>".$dataTable;
        $dataTable = "<td>".$dataTable;
        $dataTable = $key.$dataTable;
        $dataTable = "</td>".$dataTable;
        $dataTable = "<td>".$dataTable;
        $dataTable = $value.$dataTable;
        $dataTable = "</td>".$dataTable;
        $dataTable = "</tr>".$dataTable;
    }

echo $dataTable;

?>
</table>