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
		$data_tampil = mysqli_query($koneksi, "select * from faq");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function data_detail()
	{
		include('../../core/koneksi.php');
		$data_tampil = mysqli_query($koneksi, "SELECT detail_pasien.`id_detail_pasien`,detail_pasien.keluhan, pasien.`nama`, pasien.`jk`,tenaga_medis.`nama`,tenaga_medis.`no_str`,tenaga_medis.`profesi`, jadwal.`jadwal_mulai`
		FROM detail_pasien
		JOIN tenaga_medis ON detail_pasien.`id_tenagamedis` = tenaga_medis.`id_tenagamedis`
		JOIN pasien ON detail_pasien.`id_pasien` = pasien.`id_pasien`
		JOIN jadwal ON detail_pasien.`id_jadwal` = jadwal.`id_jadwal`");
		while ($d = mysqli_fetch_array($data_tampil)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
}
error_reporting(0);
