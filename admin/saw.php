<?php include 'header.php';
$id = $_GET['id'];
echo $id;
?>

<?php include 'function/function_matematika.php' ?>
<?php include 'function/function_bind.php' ?>
<?php include 'function/function_bing.php' ?>
<?php include 'function/function_ipa.php' ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Penilaian Siswa</h4>
		</div>
		<div class="panel-body">

			<a href="siswa_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>

			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama Siswa</th>
					<th>Nilai MTK</th>
					<th>Nilai B. Indonesia</th>
					<th>Nilai B. Inggris</th>
					<th>IPA</th>
					<th width="15%">OPSI</th>
				</tr>

				<?php
				// koneksi database
				include '../koneksi.php';

				// mengambil data siswa dari database
				$data = mysqli_query($koneksi, "select * from nilai_siswa where id='$id'");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				foreach ($data as $d) :
					?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php

							echo $d['nama_siswa']; ?></td>
					<td><?php echo

								$d['mtk']; ?></td>
					<td><?php

							echo $d['b_ind']; ?></td>
					<td><?php

							echo $d['b_inggris']; ?></td>
					<td><?php

							echo $d['ipa']; ?></td>
					<td>

					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>


	<!-- Tabel Rating Kecocokan-------------------------------------------------------------------------------------------------- -->
	<div class="panel">
		<div class="panel-heading">
			<h4>Rating Kecocokan</h4>
		</div>
		<div class="panel-body">



			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Jurusan</th>
					<th>C1 Matematika</th>
					<th>C2 Bahasa Indonesia</th>
					<th>C3 Bahasa Inggris</th>
					<th>C4 IPA</th>

				</tr>

				<?php $no = 1; ?>
				<tr>
					<td><?php echo $no++; ?>
					<td>Akuntansi</td>

					<td><?= $mtk_a1 = mtk_a1($d['mtk']); ?></td>
					<td><?= bind_a1($d['b_ind']); ?></td>
					<td><?= bing_a1($d['b_inggris']); ?></td>
					<td><?= ipa_a1($d['ipa']); ?></td>
					</td>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Teknik Komputer Jaringan</td>

					<!-- Nilai Kepentingan MTK Multimedia -->
					<td><?= mtk_a2($d['mtk']); ?></td>
					<td><?= bind_a2($d['b_ind']); ?></td>
					<td><?= bing_a2($d['b_inggris']); ?></td>
					<td><?= ipa_a2($d['ipa']); ?></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Multimedia</td>
					<!-- Nilai Kepentingan MTK TSM -->
					<td><?= mtk_a3($d['mtk']); ?></td>
					<td><?= bind_a3($d['b_ind']); ?></td>
					<td><?= bing_a3($d['b_inggris']); ?></td>
					<td><?= ipa_a3($d['ipa']); ?></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Teknik Audio Video</td>
					<!-- Nilai Kepentingan MTK TKJ -->
					<td><?= mtk_a4($d['mtk']); ?></td>
					<td><?= bind_a4($d['b_ind']); ?></td>
					<td><?= bing_a4($d['b_inggris']); ?></td>
					<td><?= ipa_a4($d['ipa']); ?></td>
				</tr>
				</tr>
			</table>
		</div>
	</div>
	<!-- Batas rating kecocokan -->


	<!-- Tabel Normalisasi-------------------------------------------------------------------------------------------------- -->
	<div class="panel">
		<div class="panel-heading">
			<h4>Matriks Normalisasi</h4>
		</div>
		<div class="panel-body">



			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Jurusan</th>
					<th>C1 Matematika</th>
					<th>C2 Bahasa Indonesia</th>
					<th>C3 Bahasa Inggris</th>
					<th>C4 IPA</th>

				</tr>

				<?php $no = 1; ?>
				<?php
				$max_c1 = max(mtk_a1($d['mtk']), mtk_a2($d['mtk']), mtk_a3($d['mtk']), mtk_a4($d['mtk'])) . "<br>";
				$max_c2 = max(bind_a1($d['b_ind']), bind_a2($d['b_ind']), bind_a3($d['b_ind']), bind_a4($d['b_ind'])) . "<br>";
				$max_c3 = max(bing_a1($d['b_inggris']), bing_a2($d['b_inggris']), bing_a3($d['b_inggris']), bing_a4($d['b_inggris'])) . "<br>";
				$max_c4 = max(ipa_a1($d['ipa']), ipa_a2($d['ipa']), ipa_a3($d['ipa']), ipa_a4($d['ipa'])) . "<br>";
				?>

				<tr>
					<td><?php echo $no++; ?>
					<td>Akuntansi</td>

					<td><?= mtk_a1($d['mtk']) / $max_c1; ?></td>
					<td><?= bind_a1($d['b_ind']) / $max_c1; ?></td>
					<td><?= bing_a1($d['b_inggris']) / $max_c1; ?></td>
					<td><?= ipa_a1($d['ipa']) / $max_c1; ?></td>
					</td>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Multimedia</td>

					<!-- Nilai Kepentingan MTK Multimedia -->
					<td><?= mtk_a2($d['mtk']) / $max_c2; ?></td>
					<td><?= bind_a2($d['b_ind']) / $max_c2; ?></td>
					<td><?= bing_a2($d['b_inggris']) / $max_c2; ?></td>
					<td><?= ipa_a2($d['ipa']) / $max_c2; ?></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>TSM</td>
					<!-- Nilai Kepentingan MTK TSM -->
					<td><?= mtk_a3($d['mtk']) / $max_c3; ?></td>
					<td><?= bind_a3($d['b_ind']) / $max_c3; ?></td>
					<td><?= bing_a3($d['b_inggris']) / $max_c3; ?></td>
					<td><?= ipa_a3($d['ipa']) / $max_c3; ?></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>TKJ</td>
					<!-- Nilai Kepentingan MTK TKJ -->
					<td><?= mtk_a4($d['mtk']) / $max_c4; ?></td>
					<td><?= bind_a4($d['b_ind']) / $max_c4; ?></td>
					<td><?= bing_a4($d['b_inggris']) / $max_c4; ?></td>
					<td><?= ipa_a4($d['ipa']) / $max_c4; ?></td>
				</tr>
				</tr>
			</table>
		</div>
	</div>
	<!-- Batas Normalisasi -->



	<!-- Tabel Perangkingan-------------------------------------------------------------------------------------------------- -->
	<div class="panel">
		<div class="panel-heading">
			<h4>Matriks Perangkingan</h4>
		</div>
		<div class="panel-body">



			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Jurusan</th>
					<th>C1 Matematika</th>
					<th>C2 Bahasa Indonesia</th>
					<th>C3 Bahasa Inggris</th>
					<th>C4 IPA</th>
					<th>Vi</th>

				</tr>

				<?php $no = 1; ?>


				<tr>
					<td><?php echo $no++; ?>
					<td>Akuntansi</td>

					<td><?= $v1_1 = (mtk_a1($d['mtk']) / $max_c1) * 0.35; ?></td>
					<td><?= $v1_2 = (bind_a1($d['b_ind']) / $max_c1) * 0.25; ?></td>
					<td><?= $v1_3 = (bing_a1($d['b_inggris']) / $max_c1) * 0.25; ?></td>
					<td><?= $v1_4 = (ipa_a1($d['ipa']) / $max_c1) * 0.15; ?></td>
					<td><?php echo $v1_1 + $v1_2 + $v1_3 + $v1_4 ?></td>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Teknik Komputer Jaringan</td>

					<!-- Nilai Kepentingan MTK Multimedia -->
					<td><?= $v2_1 = (mtk_a2($d['mtk']) / $max_c2) * 0.35; ?></td>
					<td><?= $v2_2 = (bind_a2($d['b_ind']) / $max_c2) * 0.25; ?></td>
					<td><?= $v2_3 = (bing_a2($d['b_inggris']) / $max_c2) * 0.25; ?></td>
					<td><?= $v2_4 = (ipa_a2($d['ipa']) / $max_c2) * 0.15; ?></td>
					<td><?php echo $v2_1 + $v2_2 + $v2_3 + $v2_4 ?></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Multimedia</td>
					<!-- Nilai Kepentingan MTK TSM -->
					<td><?= (mtk_a3($d['mtk']) / $max_c3) * 0.35; ?></td>
					<td><?= (bind_a3($d['b_ind']) / $max_c3) * 0.25; ?></td>
					<td><?= (bing_a3($d['b_inggris']) / $max_c3) * 0.25; ?></td>
					<td><?= (ipa_a3($d['ipa']) / $max_c3) * 0.15; ?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Teknik Audio Video</td>
					<!-- Nilai Kepentingan MTK TKJ -->
					<td><?= (mtk_a4($d['mtk']) / $max_c4) * 0.35; ?></td>
					<td><?= (bind_a4($d['b_ind']) / $max_c4) * 0.25; ?></td>
					<td><?= (bing_a4($d['b_inggris']) / $max_c4) * 0.25; ?></td>
					<td><?= (ipa_a4($d['ipa']) / $max_c4) * 0.15; ?></td>
					<td><?php ?></td>
				</tr>
				</tr>
			</table>
		</div>
	</div>
	<!-- Batas Perangkingan -->
	<?php include 'footer.php'; ?>