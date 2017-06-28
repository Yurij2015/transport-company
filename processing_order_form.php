<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/validation_functions.php'; ?>
<?php
if (isset($_POST['submit'])) {
    // Обработка формы
    $firstname = mysql_prep($_POST["firstname"]);
    $secondname = mysql_prep($_POST["secondname"]);
    $email = mysql_prep($_POST["email"]);
    $cargoname = mysql_prep($_POST["cargoname"]);
    $weight = mysql_prep($_POST["weight"]);
    $height = mysql_prep($_POST["height"]);
    $length = mysql_prep($_POST["length"]);
    $width = mysql_prep($_POST["width"]);
    $transportfrom = mysql_prep($_POST["transportfrom"]);
    $transportto = mysql_prep($_POST["transportto"]);
    $address = mysql_prep($_POST["address"]);
    $phonenumber = mysql_prep($_POST["phonenumber"]);
    $description = mysql_prep($_POST["description"]);
    // проверка заполнения формы
    $required_fields = array("firstname", "secondname", "email", "cargoname", "weight", "height", "length", "width", "transportfrom", "transportto", "address", "phonenumber", "description");
    validate_presences($required_fields);
    // сравнение данных
    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("orderform.php");
    }
    $query = "INSERT INTO orderform (";
    $query .= "  firstname, secondname, email, cargoname, weight, height, length, width, transportfrom, transportto, address, phonenumber, description ";
    $query .= ") VALUES (";
    $query .= "  '{$firstname}','{$secondname}','{$email}', '{$cargoname}', '{$weight}', '{$height}', '{$length}','{$width}','{$transportfrom}','{$transportto}','{$address}','{$phonenumber}','{$description}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Успешно
        $_SESSION["message"] = "Заявка отправлена";
        redirect_to("orderform.php");
    } else {
        // Ошибка
        $_SESSION["message"] = "Ошибка добавления заявки";
        redirect_to("orderform.php");
    }
} else {
    redirect_to("orderform.php");
}
?>
<?php
if (isset($connection)) {
    mysqli_close($connection);
}
