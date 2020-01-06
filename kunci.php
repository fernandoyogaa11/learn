<?php
	include "koneksi.php";

	if(isset($_POST['submit'])){
		$pilihan = $_POST["pilihan"];
		$id_soal = $_POST["id"];
		$jumlah = $_POST["jumlah"];

		$score = 0;
		$benar = 0;
		$salah = 0;
		$kosong = 0;

		for($i=0;$i<$jumlah;$i++){
			$nomor = $id_soal[$i]; // id nomor soal

			// jika user tidak memilih jawaban
			if(empty($pilihan[$nomor])){
				$kosong++;
			} else {
				// jika memilih
				$jawaban = $pilihan[$nomor];

				// cocokan jawaban dengan yang ada didatabase
				$sql = "SELECT * FROM tbl_soal WHERE id='$nomor' AND kunci='$jawaban'";
				$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

				$cek = mysqli_num_rows($query);

				if($cek){
					// jika jawaban cocok (benar)
					$benar++;
				} else {
					// jika salah
					$salah++;
				}

			}
			/*
				----------
				Nilai 100
				----------
				Hasil = 100 / jumlah soal * Jawaban Benar
			*/

			$sql = "SELECT * FROM tbl_soal WHERE aktif='Y'";
			$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
			$jumlah_soal = mysqli_num_rows($query);
			$score = 100 / $jumlah_soal * $benar;
			$hasil = number_format($score,1);
		}
	}

    // Simpan kedalam database
    $x=20;
	echo "Jumlah Jawaban Benar: $benar"."<br>";
	echo "Jumlah Jawaban Salah: $salah"."<br>";
    echo "Jumlah Jawaban Kosong: $kosong"."<br>";

    echo "nilai anda"."<br>";
    echo $benar * $x;
    
?>