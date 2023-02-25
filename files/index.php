/*<?php
header('Content-Type: text/html; charset=UTF-8');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  print_r($_POST);
  }
?>*/

<?php
$comment = "не определен";
if(isset($_POST["comment"])){
    $comment = $_POST["comment"];
}
echo "Comment: $comment";
?>
