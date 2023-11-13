<div class="container">
    <h1 class="text-center mt-4 mb-4">Tugas CRUD CodeIgniter</h1>

    <div class="text-center mb-4">
        <a href="<?= base_url('home/create') ?>" class="btn btn-primary">Tambah</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Golongan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($karyawan as $item) {?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $item->nama ?></td>
                    <td><?= $item->nohp ?></td>
                    <td><?= date('d-m-Y', strtotime($item->tgllahir)) ?></td>
                    <td><?= $item->golongan ?></td>
                    <td>
                        <a href="<?= base_url('home/update/' . $item->id) ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('home/delete/' . $item->id) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>