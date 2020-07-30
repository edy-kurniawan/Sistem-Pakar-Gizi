<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
<h2>KONSULTASI</h2>
<p>vvvvvvvvv</p>
<hr></br>

			<?php 
				$answer		= $_GET['answer'];
				$tblData	= "data t2";
		
				if(!$answer) $answer = 1;
		
				$tampil="select id_data, pertanyaan, ifyes, ifno, t1.id_perawatan, keterangan
						from perawatan t1, {$tblData}
						where t1.id_perawatan=t2.id_perawatan and id_data='{$answer}'";
				$hasil=mysqli_query($tampil);
				if(mysqli_num_rows($hasil))
				{
					$row 		= mysqli_fetch_array($hasil);
					$pertanyaan = nl2br($row['pertanyaan']);
					$keterangan = nl2br($row['keterangan']);
					echo ($pertanyaan);
			?>
			</span>
			
			<?php
				if($row['ifyes'] != "0" && $row['ifno'] != "0")
				{
					echo("<a href=\"?menu=konsul&answer={$row['ifyes']}\">Ya </a>
					&nbsp;<a href=\"?menu=konsul&answer={$row['ifno']}\">Tidak</a>");
				}
			
				else
				{
					echo"</br><a href=home.php?menu=konsul>Back</a>";
				}
			}
			?>
		</span>
		<div align="justify"><?php echo ($keterangan);?></div></td>

