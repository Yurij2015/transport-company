<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/validation_functions.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // Обработка формы
    $name = mysql_prep($_POST["name"]);
    $message = mysql_prep($_POST["message"]);
    $phonenumber = mysql_prep($_POST["phonenumber"]);
    $email = mysql_prep($_POST["email"]);
    // проверка заполнения формы
    $required_fields = array("name", "message", "phonenumber", "email");
    validate_presences($required_fields);
    // сравнение данных
    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("contact-form.php");
    }
    $query = "INSERT INTO contactform (";
    $query .= "  name, message, phonenumber, email ";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$message}', '{$phonenumber}', '{$email}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Успешно
        $_SESSION["message"] = "Вопрос отправлен";
        redirect_to("contact-form.php");
    } else {
        // Ошибка
        $_SESSION["message"] = "Ошибка отравки вопроса";
        redirect_to("contact-form.php");
    }
} else {
    redirect_to("contact-form.php");
}
?>
<?php
if (isset($connection)) {
    mysqli_close($connection);
}
