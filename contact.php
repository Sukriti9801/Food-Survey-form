<?php
$name = $_POST['name'];
$email = $_POST['email'];
$age= $_POST['age'];
$dropdown = $_POST['dropdown'];
$userrecommend = $_POST['user-recommend'];
$likely = $_POST['likely'];
$answer = $_POST['answer'];
$comments = $_POST['comments'];
$submit = $_POST['submit'];
if(empty($name) || empty($email) || empty($age) || empty($dropdown) || empty($userrecommend) || empty($likely) || empty($answer) || empty($comments) || empty($submit))
{
  echo "Please fill all the fields";
}
else {
mail("Sukritishrivastav302@gmail.com","Food survey form", $name, $email, $age, $dropdown, $userrecommend, $likely, $answer, $comments, $submit, "From: $name <$email>" );
echo "<script type= 'text/javascript'> alert('Your message has been sent successfully');
window.history.log(-1);
</script>";
}
 ?>
