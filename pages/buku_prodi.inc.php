<?php

use  SLiMS\DB;
if (isset($_POST['simpan'])){
    $statement = DB::getInstance()->prepare(<<<SQL
    insert into `buku_prodi`
        set 
            `judul` = ?,
            `pengarang` = ?,
            `penerbit` = ?,
            `tahunterbit` = ?,
            'prodi' = ?,
            `created_at` = now()
    SQL);

    $statement->execute([
        $_POST['judul'],
        $_POST['pengarang'],
        $_POST['penerbit'],
        $_POST['tahunterbit'],
        $_POST['prodi'],
    ]);
}

?>
<form action="<?= SWB ?>?mod=bibliography" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Judul Buku</label>
        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Judul buku sesuai dengan prodi</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Pengarang Buku</label>
        <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nama pengarang dipisahkan dengan tanda koma</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nama Penerbit Buku</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tahun Terbit</label>
        <input type="text" name="tahunterbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Prodi</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
</form>