<?php
class data
{
	function data_jadwal()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "select * from jadwal");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function data_medis()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "select * from tenaga_medis");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function data_poli()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "select * from poli");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function data_pasien()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "select * from pasien");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function data_faq()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "select * from pasien");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
}
