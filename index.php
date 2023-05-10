<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SITAMU</title>

	<link rel="stylesheet" type="text/css" href="assets/css/output.css">

</head>
<body class="bg-gray-400">

<div class="container mx-auto p-2">
	<div class="bg-gray-300 p-4">
		<h4 class="text-2xl text-center">SI-TAMU (Formulir Digital Konsultasi Tatap Muka)</h4>
		<h6 class="text-lg text-center">
			Direktorat Pengawasan Peredaran Pangan Olahan, Badan Pengawas Obat dan Makanan
		</h6>

		<div class="w-full">
			<label class="label">Tanggal (Date)*</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="date" name="tanggal_konsultasi">
		</div>
		<div class="form-control w-full">
			<label class="label">Nama Perusahaan (Company Name) *</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="text" name="nama_perusahaan">
		</div>
		<div class="form-control w-full">
			<label class="label">Alamat Perusahaan (Company Address) *</label>
			<textarea class="textarea textarea-bordered bg-gray-100 border-4 border-gray-400 w-full" name="alamat_perusahaan"></textarea>
		</div>
		<div class="form-control w-full">
			<label class="label">Nama Pemohon (Applicant's Name) *</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="text" name="nama_pemohon">
		</div>
		<div class="form-control w-full">
			<label class="label">Jabatan Pemohon (Applicant's Position) *</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="text" name="jabatan_pemohon">
		</div>
		<div class="form-control w-full">
			<label class="label">Nomor Telepon (Phone) *</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="text" name="telepon_perusahaan">
		</div>
		<div class="form-control w-full">
			<label class="label">Email (E-mail) *</label>
			<input class="input input-bordered bg-gray-100 border-4 border-gray-400 w-full" type="email" name="email_perusahaan">
		</div>
		<div class="form-control w-full">
			<label class="label">Topik Konsultasi (Consultation Topic) *</label>
			<select class="select select-bordered bg-gray-100 border-4 border-gray-400 w-full" name="topik_konsultasi">
				<option value="ski">Surat Keterangan Impor (SKI)</option>
				<option value="ske">Surat Keterangan Ekspor (SKE)</option>
				<option value="sas">Special Access Scheme (SAS)</option>
				<option value="iklan">Iklan</option>
				<option value="kendala">Kendala sistem</option>
				<option value="labelpenandaaan">Label dan penandaan</option>
				<option value="pemeriksaan">Pemeriksaan sarana</option>
				<option value="akun">Pendaftaran Akun/Perubahan data akun E-BPOM</option>
				<option value="pendaftaran">Pendaftaran pangan olahan</option>
				<option value="cppob">Sertifikasi CPPOB</option>
				<option value="hs">Sertifikasi HS</option>
				<option value="smkpo">SMKPO</option>
			</select>
		</div>
		<div class="form-control w-full">
			<label class="label">Hal Yang Dikonsultasikan (Consulted Issue) *</label>
			<textarea class="textarea textarea-bordered bg-gray-100 border-4 border-gray-400 w-full" name="hal_konsultasi"></textarea>
			<small>Tulis dan uraikan permasalahan yang ingin dikonsultasikan dengan jelas dan detail</small>
		</div>
		<div class="form-control w-full">
			<label class="label">Tanda Tangan (Signature) *</label>
			<canvas width=400 height=200></canvas>
			<small>Lakukan tanda tangan pada kotak di atas dengan benar. Jika terjadi kesalahan silahkan klik clear/hapus dan lakukan tanda tangan kembali di kotak tersebut.</small>
		</div>


		<div class="text-base text-center my-2">
			Berdasarkan Peraturan Kepala Badan POM Nomor 24 Tahun 2018 tentang Perubahan Atas Peraturan Kepala Badan Pengawas Obat Makanan Nomor 20 Tahun 2017 tentang Pengendalian Gratifikasi di Lingkungan Badan Pengawas Obat dan Makanan. <br>

			“Petugas tidak menerima bingkisan/hadiah dalam bentuk apapun” <br>

			Apabila mengetahui adanya pelanggaran mohon melaporkan melalui email wblows.peredaranpangan@gmail.com
		</div>

		<div class="text-base text-center my-2">
			<i>Based on Regulation Head of Indonesian Food and Drug Authority Number 24 In 2018 concerning Amendments to the Regulation Head of Indonesian Food and Drug Authority Number 20 of 2017 concerning Gratification Control within Indonesian Food and Drug Authority <br>
		 
			"Officers do not accept any gifts" <br>

			If you know of a violation, please report it via email wblows.peredaranpangan@gmail.com
		</i>
		</div>

		<button class="btn btn-block my-5" id="simpanBtn">Simpan</button>

		<h3 class="text-lg text-center my-2">
			DIREKTORAT PENGAWASAN PEREDARAN PANGAN OLAHAN BADAN PENGAWAS OBAT DAN MAKANAN
		</h3>
		<p class="text-center">
			Email: peredaranpangan@pom.go.id
		</p>

	</div>
	
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>