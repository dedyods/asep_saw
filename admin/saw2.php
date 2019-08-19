<?php include 'header.php';
$id=$_GET['id'];
echo $id;
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Penilaian Siswa</h4>
		</div>
		<div class="panel-body">

			<a href="siswa_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
			
			<br/>
			<br/>

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
				$data = mysqli_query($koneksi,"select * from nilai_siswa where id='$id'");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php 
						
						echo $d['nama_siswa']; ?></td>
						<td><?php echo 
						$mtk= $d['mtk'];
						$d['mtk']; ?></td>
						<td><?php
						 $b_ind= $d['b_ind'];
						echo $d['b_ind']; ?></td>
						<td><?php 
						$b_inggris= $d['b_inggris'];
						echo $d['b_inggris']; ?></td>
						<td><?php 
						$ipa=$d['ipa'];
						echo $d['ipa']; ?></td>
                        <td>
							<a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php 
				}
				?>
			</table>
		</div>
	</div>


	<!-- Tabel Rating Kecocokan-------------------------------------------------------------------------------------------------- -->
	<div class="panel">
		<div class="panel-heading">
			<h4>Rating Kecocokan</h4>
		</div>
		<div class="panel-body">

			
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Jurusan</th>
                    <th>C1 Matematika</th>
					<th>C2 Bahasa Indonesia</th>
                    <th>C3 Bahasa Inggris</th>
                    <th>C4 IPA</th>
                   
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				?>
					<tr>
					<td><?php echo $no++; ?>
					<td>Akuntansi</td>
					
					<td><?php $mtk_a1 = $mtk;
					if( $mtk_a1 > 80){
					 echo	$mtk_a1=0.75;
					}

					elseif ($mtk_a1 >70 && $mtk_a1 <=80){
					echo	$mtk_a1=0.5;
					}

					elseif ($mtk_a1 >60 && $mtk_a1 <=70){
						echo	$mtk_a1=0.25;
						}
					
					elseif ($mtk_a1 >50 && $mtk_a1 <=60){
							echo	$mtk_a1=0.25;
							}
					else{
								echo $mtk_a1=0;
							}

					?></td>
				
				
					<td>
					<?php $bind_a1 = $b_ind;
					if( $bind_a1 > 80){
					 echo	$bind_a1=0.75;
					}

					elseif ($bind_a1 >70 && $bind_a1 <=80){
					echo	$bind_a1=0.5;
					}

					elseif ($bind_a1 >60 && $bind_a1 <=70){
						echo	$bind_a1=0.25;
						}
					
					elseif ($bind_a1 >50 && $bind_a1 <=60){
							echo	$bind_a1=0.25;
							}
					else{
								echo $bind_a1=0;
							}

					?>
					</td>

					<td>
					<?php $b_inggris_a1 = $b_inggris;
					if( $b_inggris_a1 > 80){
					 echo	$b_inggris_a1=0.75;
					}

					elseif ($b_inggris_a1 >70 && $b_inggris_a1 <=80){
					echo	$b_inggris_a1=0.5;
					}

					elseif ($b_inggris_a1 >60 && $b_inggris_a1 <=70){
						echo	$b_inggris_a1=0.25;
						}
					
					elseif ($b_inggris_a1 >50 && $b_inggris_a1 <=60){
							echo	$b_inggris_a1=0.25;
							}
					else{
								echo $b_inggris_a1=0;
							}

					?>
					</td>
					<td><?php echo $ipa;?></td>
					</td>
						<tr><td><?php echo $no++; ?></td><td>Multimedia</td>
					
					<!-- Nilai Kepentingan MTK Multimedia -->
					<td><?php $mtk_a2 = $mtk;
					if( $mtk_a2 > 80){
					 echo	$mtk_a2=1;
					}

					elseif ($mtk_a2 >70 && $mtk_a2 <=80){
					echo	$mtk_a2=0.5;
					}

					elseif ($mtk_a2 >60 && $mtk_a2 <=70){
						echo	$mtk_a2=0.25;
						}
					
					elseif ($mtk_a2 >50 && $mtk_a2 <=60){
							echo	$mtk_a2=0.25;
							}
					else{
								echo $mtk_a2=0;
							}

					?></td>


<td>
					<?php $bind_a2 = $b_ind;
					if( $bind_a2 > 80){
					 echo	$bind_a2=1;
					}

					elseif ($bind_a2 >70 && $bind_a2 <=80){
					echo	$bind_a2=0.5;
					}

					elseif ($bind_a2 >60 && $bind_a2 <=70){
						echo	$bind_a2=0.25;
						}
					
					elseif ($bind_a2 >50 && $bind_a2 <=60){
							echo	$bind_a2=0.25;
							}
					else{
								echo $bind_a2=0;
							}

					?>
					</td>
					<td><?php  $b_inggris_a2 = $b_inggris;
					if( $b_inggris_a2 > 80){
					 echo	$b_inggris_a2=1;
					}

					elseif ($b_inggris_a2 >70 && $b_inggris_a2 <=80){
					echo	$b_inggris_a2=0.5;
					}

					elseif ($b_inggris_a2 >60 && $b_inggris_a2 <=70){
						echo	$b_inggris_a2=0.25;
						}
					
					elseif ($b_inggris_a2 >50 && $b_inggris_a2 <=60){
							echo	$b_inggris_a2=0.25;
							}
					else{
								echo $b_inggris_a2=0;
							}

					?></td>
					<td><?php echo $ipa;?></td></tr>
					<tr><td><?php echo $no++; ?></td><td>TSM</td>
					<!-- Nilai Kepentingan MTK TSM -->
					<td><?php $mtk_a3 = $mtk;
					if( $mtk_a3 > 80){
					 echo	$mtk_a3=1;
					}

					elseif ($mtk_a3 >70 && $mtk_a3 <=80){
					echo	$mtk_a3=1;
					}

					elseif ($mtk_a3 >60 && $mtk_a3 <=70){
						echo	$mtk_a3=0.5;
						}
					
					elseif ($mtk_a3 >50 && $mtk_a3 <=60){
							echo	$mtk_a3=0.25;
							}
					else{
								echo $mtk_a3=0;
							}

					?></td>

<td>
					<?php $bind_a3 = $b_ind;
					if( $bind_a3 > 80){
					 echo	$bind_a3=1;
					}

					elseif ($bind_a3 >70 && $bind_a3 <=80){
					echo	$bind_a3=0.5;
					}

					elseif ($bind_a3 >60 && $bind_a3 <=70){
						echo	$bind_a3=0.25;
						}
					
					elseif ($bind_a3 >50 && $bind_a3 <=60){
							echo	$bind_a3=0.25;
							}
					else{
								echo $bind_a3=0;
							}

					?>
					</td>

					<td><?php  $b_inggris_a3 = $b_inggris;
					if( $b_inggris_a3 > 80){
					 echo	$b_inggris_a3=1;
					}

					elseif ($b_inggris_a3 >70 && $b_inggris_a3 <=80){
					echo	$b_inggris_a3=1;
					}

					elseif ($b_inggris_a3 >60 && $b_inggris_a3 <=70){
						echo	$b_inggris_a3=0.5;
						}
					
					elseif ($b_inggris_a3 >50 && $b_inggris_a3 <=60){
							echo	$b_inggris_a3=0.25;
							}
					else{
								echo $b_inggris_a3=0;
							}

					?></td>
					<td><?php echo $ipa;?></td></tr>
					<tr><td><?php echo $no++; ?></td><td>TKJ</td>
					<!-- Nilai Kepentingan MTK TKJ -->
					<td><?php $mtk_a4 = $mtk;
					if( $mtk_a4 > 80){
					 echo	$mtk_a4=1;
					}

					elseif ($mtk_a4 >70 && $mtk_a4 <=80){
					echo	$mtk_a4=0.75;
					}

					elseif ($mtk_a4 >60 && $mtk_a4 <=70){
						echo	$mtk_a4=0.25;
						}
					
					elseif ($mtk_a4 >50 && $mtk_a4 <=60){
							echo	$mtk_a4=0.25;
							}
					else{
								echo $mtk_a4=0;
							}

					?></td>

					
<td>
					<?php $bind_a4 = $b_ind;
					if( $bind_a4 > 80){
					 echo	$bind_a4=1;
					}

					elseif ($bind_a4 >70 && $bind_a4 <=80){
					echo	$bind_a4=0.5;
					}

					elseif ($bind_a4 >60 && $bind_a4 <=70){
						echo	$bind_a4=0.25;
						}
					
					elseif ($bind_a4 >50 && $bind_a4 <=60){
							echo	$bind_a4=0.25;
							}
					else{
								echo $bind_a4=0;
							}

					?>
					</td>
					<td><?php  $b_inggris_a4 = $b_inggris;
					if( $b_inggris_a4 > 80){
					 echo	$b_inggris_a4=1;
					}

					elseif ($b_inggris_a4 >70 && $b_inggris_a4 <=80){
					echo	$b_inggris_a4=0.75;
					}

					elseif ($b_inggris_a4 >60 && $b_inggris_a4 <=70){
						echo	$b_inggris_a4=0.25;
						}
					
					elseif ($b_inggris_a4 >50 && $b_inggris_a4 <=60){
							echo	$b_inggris_a4=0.25;
							}
					else{
								echo $b_inggris_a4=0;
							}

					?></td>



					<td><?php echo $ipa;?></td></tr>
					</tr>
			<?php $max_c1= max($mtk_a1,$mtk_a2,$mtk_a3,$mtk_a4); 
				  $max_c2= max($bind_a1,$bind_a2,$bind_a3,$bind_a4); 
				  $max_c3= max($b_inggris_a1,$b_inggris_a2,$b_inggris_a3,$b_inggris_a4); 
				  
			?>

			</table>
		</div>
	</div>




	<!-- Tabel Normalisasi===========================================================================================================  -->
	
	<div class="panel">
		<div class="panel-heading">
			<h4>Normaliasi</h4>
		</div>
		<div class="panel-body">

			
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Jurusan</th>
                    <th>C1 Matematika</th>
					<th>C2 Bahasa Indonesia</th>
                    <th>C3 Bahasa Inggris</th>
                    <th>C4 IPA</th>
                   
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				?>
					<tr>
					<td><?php echo $no++; ?>
					<td>Akuntansi</td>
					
					<td><?php $mtk_a1 = $mtk;
					if( $mtk_a1 > 80){
					 echo	$mtk_a1=0.75/$max_c1;
					}

					elseif ($mtk_a1 >70 && $mtk_a1 <=80){
					echo	$mtk_a1=0.5/$max_c1;
					}

					elseif ($mtk_a1 >60 && $mtk_a1 <=70){
						echo	$mtk_a1=0.25/$max_c1;
						}
					
					elseif ($mtk_a1 >50 && $mtk_a1 <=60){
							echo	$mtk_a1/$max_c1=0.25;
							}
					else{
								echo $mtk_a1/$max_c1=0;
							}

					?></td>
				
				
					<td>
					<?php $bind_a1 = $b_ind;
					if( $bind_a1 > 80){
					 echo	$bind_a1=0.75;
					}

					elseif ($bind_a1 >70 && $bind_a1 <=80){
					echo	$bind_a1=0.5;
					}

					elseif ($bind_a1 >60 && $bind_a1 <=70){
						echo	$bind_a1=0.25;
						}
					
					elseif ($bind_a1 >50 && $bind_a1 <=60){
							echo	$bind_a1=0.25;
							}
					else{
								echo $bind_a1=0;
							}

					?>
					</td>

					<td>
					<?php $b_inggris_a1 = $b_inggris;
					if( $b_inggris_a1 > 80){
					 echo	$b_inggris_a1=0.75/$max_c3;
					}

					elseif ($b_inggris_a1 >70 && $b_inggris_a1 <=80){
					echo	$b_inggris_a1=0.5/$max_c3;
					}

					elseif ($b_inggris_a1 >60 && $b_inggris_a1 <=70){
						echo	$b_inggris_a1=0.25/$max_c3;
						}
					
					elseif ($b_inggris_a1 >50 && $b_inggris_a1 <=60){
							echo	$b_inggris_a1=0.25/$max_c3;
							}
					else{
								echo $b_inggris_a1=0/$max_c3;
							}

					?>
					</td>
					<td><?php echo $ipa;?></td>
					</td>
						<tr><td><?php echo $no++; ?></td><td>Multimedia</td>
					
					<!-- Nilai Kepentingan MTK Multimedia -->
					<td><?php $mtk_a2 = $mtk;
					if( $mtk_a2 > 80){
					 echo	$mtk_a2=1/$max_c1;
					}

					elseif ($mtk_a2 >70 && $mtk_a2 <=80){
					echo	$mtk_a2=0.5/$max_c1;
					}

					elseif ($mtk_a2 >60 && $mtk_a2 <=70){
						echo	$mtk_a2=0.25/$max_c1;
						}
					
					elseif ($mtk_a2 >50 && $mtk_a2 <=60){
							echo	$mtk_a2=0.25/$max_c1;
							}
					else{
								echo $mtk_a2=0/$max_c1;
							}

					?></td>


<td>
					<?php $bind_a2 = $b_ind;
					if( $bind_a2 > 80){
					 echo	$bind_a2=1;
					}

					elseif ($bind_a2 >70 && $bind_a2 <=80){
					echo	$bind_a2=0.5;
					}

					elseif ($bind_a2 >60 && $bind_a2 <=70){
						echo	$bind_a2=0.25;
						}
					
					elseif ($bind_a2 >50 && $bind_a2 <=60){
							echo	$bind_a2=0.25;
							}
					else{
								echo $bind_a2=0;
							}

					?>
					</td>
					<td><?php  $b_inggris_a2 = $b_inggris;
					if( $b_inggris_a2 > 80){
					 echo	$b_inggris_a2=1/$max_c3;
					}

					elseif ($b_inggris_a2 >70 && $b_inggris_a2 <=80){
					echo	$b_inggris_a2=0.5/$max_c3;
					}

					elseif ($b_inggris_a2 >60 && $b_inggris_a2 <=70){
						echo	$b_inggris_a2=0.25/$max_c3;
						}
					
					elseif ($b_inggris_a2 >50 && $b_inggris_a2 <=60){
							echo	$b_inggris_a2=0.25/$max_c3;
							}
					else{
								echo $b_inggris_a2=0;
							}

					?></td>
					<td><?php echo $ipa;?></td></tr>
					<tr><td><?php echo $no++; ?></td><td>TSM</td>
					<!-- Nilai Kepentingan MTK TSM -->
					<td><?php $mtk_a3 = $mtk;
					if( $mtk_a3 > 80){
					 echo	$mtk_a3=1/$max_c1;
					}

					elseif ($mtk_a3 >70 && $mtk_a3 <=80){
					echo	$mtk_a3=1/$max_c1;
					}

					elseif ($mtk_a3 >60 && $mtk_a3 <=70){
						echo	$mtk_a3=0.5/$max_c1;
						}
					
					elseif ($mtk_a3 >50 && $mtk_a3 <=60){
							echo	$mtk_a3=0.25/$max_c1;
							}
					else{
								echo $mtk_a3=0/$max_c1;
							}

					?></td>

<td>
					<?php $bind_a3 = $b_ind;
					if( $bind_a3 > 80){
					 echo	$bind_a3=1;
					}

					elseif ($bind_a3 >70 && $bind_a3 <=80){
					echo	$bind_a3=0.5;
					}

					elseif ($bind_a3 >60 && $bind_a3 <=70){
						echo	$bind_a3=0.25;
						}
					
					elseif ($bind_a3 >50 && $bind_a3 <=60){
							echo	$bind_a3=0.25;
							}
					else{
								echo $bind_a3=0;
							}

					?>
					</td>

					<td><?php  $b_inggris_a3 = $b_inggris;
					if( $b_inggris_a3 > 80){
					 echo	$b_inggris_a3=1;
					}

					elseif ($b_inggris_a3 >70 && $b_inggris_a3 <=80){
					echo	$b_inggris_a3=1;
					}

					elseif ($b_inggris_a3 >60 && $b_inggris_a3 <=70){
						echo	$b_inggris_a3=0.5;
						}
					
					elseif ($b_inggris_a3 >50 && $b_inggris_a3 <=60){
							echo	$b_inggris_a3=0.25;
							}
					else{
								echo $b_inggris_a3=0;
							}

					?></td>
					<td><?php echo $ipa;?></td></tr>
					<tr><td><?php echo $no++; ?></td><td>TKJ</td>
					<!-- Nilai Kepentingan MTK TKJ -->
					<td><?php $mtk_a4 = $mtk;
					if( $mtk_a4 > 80){
					 echo	$mtk_a4=1/$max_c1;
					}

					elseif ($mtk_a4 >70 && $mtk_a4 <=80){
					echo	$mtk_a4=0.75/$max_c1;
					}

					elseif ($mtk_a4 >60 && $mtk_a4 <=70){
						echo	$mtk_a4=0.25/$max_c1;
						}
					
					elseif ($mtk_a4 >50 && $mtk_a4 <=60){
							echo	$mtk_a4=0.25/$max_c1;
							}
					else{
								echo $mtk_a4=0/$max_c1;
							}

					?></td>

					
<td>
					<?php $bind_a4 = $b_ind;
					if( $bind_a4 > 80){
					 echo	$bind_a4=1;
					}

					elseif ($bind_a4 >70 && $bind_a4 <=80){
					echo	$bind_a4=0.5;
					}

					elseif ($bind_a4 >60 && $bind_a4 <=70){
						echo	$bind_a4=0.25;
						}
					
					elseif ($bind_a4 >50 && $bind_a4 <=60){
							echo	$bind_a4=0.25;
							}
					else{
								echo $bind_a4=0;
							}

					?>
					</td>
					<td><?php  $b_inggris_a4 = $b_inggris;
					if( $b_inggris_a4 > 80){
					 echo	$b_inggris_a4=1;
					}

					elseif ($b_inggris_a4 >70 && $b_inggris_a4 <=80){
					echo	$b_inggris_a4=0.75;
					}

					elseif ($b_inggris_a4 >60 && $b_inggris_a4 <=70){
						echo	$b_inggris_a4=0.25;
						}
					
					elseif ($b_inggris_a4 >50 && $b_inggris_a4 <=60){
							echo	$b_inggris_a4=0.25;
							}
					else{
								echo $b_inggris_a4=0;
							}

					?></td>



					<td><?php echo $ipa;?></td></tr>
					</tr>
			<?php $max_c1= max($mtk_a1,$mtk_a2,$mtk_a3,$mtk_a4); ?>

			</table>
		</div>
	</div>

	<!-- Batas Normalisasi -->
</div>

<?php include 'footer.php'; ?>