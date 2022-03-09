<?php
	if (isset($_POST['kirim'])) {
	$nama 		= $_POST['nama'];
	$email 		= $_POST['email'];
	$bank 		= $_POST['bank'];
	$pengirim 	= $_POST['pengirim'];
	$tanggal 	= $_POST['tanggal'];
	$jumlah 	= $_POST['jumlah'];
	$nohp 		= $_POST['nohp'];
	$pesan 		= $_POST['pesan'];
	header("location:https://api.whatsapp.com/send?phone=$nohp&text=%D8%A8%D9%90%D8%B3%D9%92%D9%85%D9%90%20%D8%A7%D9%84%D9%84%D9%91%D9%87%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%92%D9%85%D9%8E%D9%86%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%90%D9%8A%D9%92%D9%85%D9%90%0A%20_Assalamu%E2%80%99alaikum%20Warrahmatullah%20Wabarrakatuh_%20%0A%0ASaya%20ingin%20mengirimkan%20bukti%20transfer%20donasi%20saya.%20%0A%0A*Form%20Konfirmasi*%0ANama%20%3A%20$nama%0AEmail%20%3A%20$email%0ABank%20Pengirim%20%3A%20$bank%0AAtas%20nama%20rekening%20pengirim%20%3A%20$pengirim%20%0ATanggal%20%3A%20$tanggal%0AJumlah%20yang%20di%20transfer%20%3A%20Rp.%20$jumlah%0APesan%20%3A%20$pesan%0A%20%0AJazakumullah%20Khairan%20Katsiran%20%0A%20%0A%20_Wassalaamu%E2%80%99alaikum%20warrahmatullaah%20wabarakaatuh_");
	} else {
		echo "
		<script>
			window.location=history.go(-1);
		</script>
		"; 
	}
?>