<?php
foreach ($surat_undangan as $su) : ?>
    <p style="text-align: center;"><strong>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</strong></p>
    <img src="assets/img/poltek.jpg" align="left" width="20%">
    <img src="assets/img/kan2.png" align="right" width="15%">
    <p style="text-align: center;"><strong>POLITEKNIK NEGERI MALANG</strong></p>
    <p style="text-align: center;"><strong>Jalan Soekarno Hatta 9 PO. BOX 04 Malang &ndash; 65141</strong></p>
    <p style="text-align: center;"><strong>Telp (0341)404424-404425 Fax. (0341)404420</strong></p>
    <p style="text-align: center;"><strong>Laman//www.polinema.ac.id</strong></p>
    <br><br>
    <hr><br><br>
    <p>Nomer Agenda&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->id_undang ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>Ketua Pelaksana&nbsp;&nbsp; : <?= $su->kapel_und ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>Tanggal Terima&nbsp;&nbsp;&nbsp;: <?= $su->tgl_buat_srt_und ?></p>
    <p>Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->tanggal_und ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->hari_und ?></p>
    <p>No Surat &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->no_surat_und ?></p>
    <p>Dari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->kepada_und ?></p>
    <p>Perihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->perihal_und ?></p>
    <p>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $su->tempat_und ?></p>
    <p>Acara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->kegiatan_und ?></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Catatan :</p>
    <p>__________________________________________________________________________________</p>
    <p>__________________________________________________________________________________</p>
    <p>__________________________________________________________________________________</p>
    <p>__________________________________________________________________________________</p>
    <p>__________________________________________________________________________________</p>
    <p>&nbsp;</p>
<?php endforeach; ?>