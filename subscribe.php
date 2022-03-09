<?php
	if (isset($_POST['kirim'])) {
	$telegram 	= $_POST['telegram'];
	$nohp 		= $_POST['nohp'];
	header("location:https://api.whatsapp.com/send?phone=$nohp&text=%D8%A8%D9%90%D8%B3%D9%92%D9%85%D9%90%20%D8%A7%D9%84%D9%84%D9%91%D9%87%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%92%D9%85%D9%8E%D9%86%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%90%D9%8A%D9%92%D9%85%D9%90%0A%20_Assalamu%E2%80%99alaikum%20Warrahmatullah%20Wabarrakatuh_%20%0A%0ASaya%20ingin%20berlangganan%20postingan%20update%20terbaru.%20%0A%0A*Form%20Subscribe*%0ATelegram%20%3A%20$telegram%0A%0AJazakumullah%20Khairan%20Katsiran%20%0A%20%0A%20_Wassalaamu%E2%80%99alaikum%20warrahmatullaah%20wabarakaatuh_");
	} else {
		echo "
		<script>
			window.location=history.go(-1);
		</script>
		"; 
	}
?>
