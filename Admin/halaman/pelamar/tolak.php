<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../Assets/library/phpmailer/src/Exception.php';
require '../../../Assets/library/phpmailer/src/PHPMailer.php';
require '../../../Assets/library/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $query1 = "SELECT * FROM smtp_mail join tentang WHERE tentang.id = '1'";
    $sql1 = mysqli_query($koneksi,$query1);
    $smtp = mysqli_fetch_array($sql1);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $smtp['host'];  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $smtp['email'];                 // SMTP username
        $mail->Password = $smtp['password'];                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $smtp['port'];                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('hirekaryawan@gmail.com', 'Pendaftaran');
        $mail->addAddress($email, $nama);     // Add a recipient
        $mail->addReplyTo('hirekaryawan@gmail.com', 'Pendaftaran');
        // $mail->addCC($smtp['email']);
        // $mail->addBCC($smtp['email']);

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = '<h2 style="color:green;">Pendaftaran Berhasil</h2><br>Hi '.$nama.',
        <br><br>Terima kasih telah mendaftar di '.$smtp['nama_web'].'<br><br>Silahkan klik link dibawah ini untuk melakukan login akun anda<br><br>
        <a href="'.login().'">Masuk Akun</a><br><br>
        Berikut detail akun kamu:<br><br>
        Email : '.$email.'<br>
        Password : '.$_POST['password'].'<br><br>
        Salam,<br>
        '.$smtp['nama_web'].'<br>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

?>
