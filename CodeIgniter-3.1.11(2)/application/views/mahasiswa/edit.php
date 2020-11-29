<div  class="container">
    <div class="row mt-4">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
</div>
<div class="card-body">
    <?php if (validation_errors()): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo validation_errors()?>
</div>
<?php endif ?>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $mahasiswa['id'];?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama'];?>">
</div>
<div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim'];?>">
</div>
<div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email'];?>">
</div>
<div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" name="jurusan">
            <?php foreach($jurusan as $key): ?>
            <?php if($key == $mahasiswa['jurusan']):?>
                <option value="<?php echo $key ?>"selected><?php echo $key ?></option>
            <?php else : ?>
                <option value="<?php echo $key ?>"><?php echo $key ?></option>
            <?php endif; ?>
            <?php endforeach; ?>
        </select>
</div>
<div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <select class="form-control" id="matkul" name="matkul" name="matkul">
                <?php foreach($matkul as $mk):?>
                    <?php if($mk['nama_matkul'] == $mahasiswa['nama_matkul']):?>
                        <option value="<?php echo $mk['id_matkul'] ?>"selected><?php echo $mk['nama_matkul'] ?></option>
                    <?php else : ?>
                        <option value="<?php echo $mk['id_matkul'] ?>"><?php echo $mk['nama_matkul'] ?></option>
                    <?php endif; ?>
                <?php endforeach ?>
        </select>
</div>
<div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas" name="kelas">
                <?php foreach($kelas as $kls):?>
                    <?php if($kls['nama_kelas'] == $mahasiswa['nama_kelas']):?>
                    <option value="<?php echo $kls['id_kelas'] ?>"selected><?php echo $kls['nama_kelas'] ?></option>
            <?php else : ?>
                <option value="<?php echo $kls['id_kelas'] ?>"><?php echo $kls['nama_kelas'] ?></option>
            <?php endif; ?>
                <?php endforeach ?>
        </select>
</div>
<button type="submit" name="submit" class="btn btn-primary float-right">Edit</button>
</form>
</div>
</div>
</div>
</div>
</div>