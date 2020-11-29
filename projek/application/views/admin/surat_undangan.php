<?php
foreach ($surat_undangan as $su) : ?>
    <p style="text-align: center;"><strong>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</strong></p>
    <img src="assets/img/polinema.png" align="left" width="15%">
    <img src="assets/img/hmti.png" align="right" width="15%">
    <p style="text-align: center;"><strong>POLITEKNIK NEGERI MALANG</strong></p>
    <p style="text-align: center;"><strong>HIMPUNAN MAHASISWA TEKNOLOGI INFORMASI</strong></p>
    <p style="text-align: center;"><strong>Jalan Soekarno Hatta 9 PO. BOX 04 Malang &ndash; 65141</strong></p>
    <p style="text-align: center;"><strong>Telp (0341)404424-404425 Fax. (0341)404420</strong></p>
    <p style="text-align: center;"><strong>Laman//www.polinema.ac.id</strong></p>
    <br><br>
    <hr><br><br>
    <p>Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->no_surat_und ?></p>
    <p>Lampiran&nbsp;&nbsp; : <?= $su->lampiran_und ?></p>
    <p>Perihal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->perihal_und ?></p>
    <p>&nbsp;</p>
    <p>Yth. <b><?= $su->kepada_und ?></b></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Politeknik Negeri Malang</b></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Di Tempat</b></p>
    <p>&nbsp;</p>
    <p>Dengan Hormat,</p>
    <p>&nbsp;</p>
    <p>Sehubungan dengan diselenggarakannya kegiatan &ldquo;<b><?= $su->kegiatan_und ?></b>&rdquo;, maka dengan ini kami mengharap kehadiran Bapak/Ibu pada:</p>
    <p>&nbsp;</p>
    <p>Hari/Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $su->hari_und ?>/<?= $su->tanggal_und ?></p>
    <p>Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $su->pukul_und ?></p>
    <p>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $su->tempat_und ?></p>
    <p>Acara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?= $su->kegiatan_und ?></b></p>
    <p>&nbsp;</p>
    <p>Demikian surat undangan kami buat. Mengigat pentingnya acara, besar harapan kami Saudata berkenan hadir pada acara tersebut, Atas perhatiannya disampaikan terima kasih</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
    <p>Ketua Umum</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><?= $su->kapel_und ?></p>
    <p><b>NIM.<?= $su->nim_und ?></b></p>
<?php endforeach; ?>