    <?php
    
    if(!isset($_POST['phone']) and !isset($_POST['email']) and !isset($_POST['phone2'])){
        ?>
        <?php
    } else {
        
        $fio = $_POST['phone'];
        $email = $_POST['email'];
        $fio = htmlspecialchars($fio);
        $email = htmlspecialchars($email);
        $fio = urldecode($fio);
        $email = urldecode($email);
        $fio = trim($fio);
        $email = trim($email);
        if (mail("example@mail.ru", "phone:".$phone, "phone2:".$phone2," E-mail: ".$email ,"From: example2@mail.ru \r\n")){
        echo "<script>alert('Сообщение удачно отправлено')</script>";
        } else {
        echo "При отправке сообщения возникли ошибки";
        }
    }
    ?>

