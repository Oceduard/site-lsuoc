<?php
  $nume = $_POST['nume'];
  $email = $_POST['email'];
  $mesaj = $_POST['mesaj'];
  $to = "edy200111@gmail.com";
  $subject = "Mesaj nou de la $nume";
  $message = "Nume: $nume\nEmail: $email\nMesaj: $mesaj";
  $headers = "From: $email";
  $send_email = mail($to, $subject, $message, $headers);
  if($send_email){
    echo "<script>
    alert('Mesajul a fost trimis cu succes');
    window.location.href = 'contact.html';
    </script>";
  }else{
    echo "<script>
    alert('A aparut o eroare la trimiterea mesajului');
    </script>";
  }
?>
