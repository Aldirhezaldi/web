<?php
foreach ($surat_peminjaman as $sp) : ?>
    <p style="text-align: center;"><strong>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</strong></p>
    <img src="assets/img/poltek.jpg" align="left" width="20%">
    <img src="assets/img/kan2.png" align="right" width="15%">
    <p style="text-align: center;"><strong>POLITEKNIK NEGERI MALANG</strong></p>
    <p style="text-align: center;"><strong>Jalan Soekarno Hatta 9 PO. BOX 04 Malang &ndash; 65141</strong></p>
    <p style="text-align: center;"><strong>Telp (0341)404424-404425 Fax. (0341)404420</strong></p>
    <p style="text-align: center;"><strong>Laman//www.polinema.ac.id</strong></p>
    <br><br>
    <hr><br><br>
    <p>Nomer Agenda&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->id_pinjam ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>Ketua Pelaksana&nbsp;&nbsp; : <?= $sp->kapel_pjm ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p>Tanggal Terima&nbsp;&nbsp;&nbsp;: <?= $sp->tgl_buat_srt_pjm ?></p>
    <p>Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->tgl_pjm ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->hari_pjm ?></p>
    <p>No Surat &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->no_surat_pjm ?></p>
    <p>Dari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->kepada_pjm ?></p>
    <p>Perihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->perihal_pjm ?></p>
    <p>Pinjam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $sp->pinjam ?></p>
    <p>Acara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $sp->kegiatan_pjm ?></p>
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