<?php
if(isset($_POST['submit'])){
	$captcha		= $_POST['g-recaptcha-response'];
	$secretKey		= "6LchzuIbAAAAAGCqng64GSskFlnR6JZ_zU8SEX-v"; //key buat encryption captcha nya misal success baru diizinkan lanjut
	$ip 			= $_SERVER['REMOTE_ADDR']; //alamat penghubung ke server
	$response		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip); //klo berhasil response nya ke API nya google ini
	$responseKeys	= json_decode($response,true); //ini nge decode hasil response

	if(intval($responseKeys["success"]) !== 1) { //jika proses validasi captcha tidak berhasil
		//pesan jika reCAPTCHA tidak di centang
		echo '<h2>Helloo... Spam detected...</h2>';
	}else{ //jika proses validasi captcha berhasil
        $database = file_get_contents("data/loginData.json"); //untuk membaca isi file ke dalam string
        $database = json_decode($database, TRUE);
        if(isset($_POST['username']) && isset($_POST['password'])) {
            for($i=0; $i < count($database); $i++) {
                if($database[$i]['username'] == $_POST['username']) {
                    if($database[$i]['password'] == $_POST['password']) {
                        $success = TRUE;
                        break;
                    } else {
                        $success = FALSE;
                    }
                } else {
                    $success = FALSE;
                }
            }
        } else {
            echo "Harap isi semua kolom yang tersedia";
        }
        if($success == TRUE) {
            header("location: datatables.php");
        } else {
            echo "Username/Password Salah";
        }
        
	}
}
?>