<?php
header("content-type: application/octet-stream");
header("content-disposition: attachment; filename=laporan_kegiatan.xls");
header("pragma: no-cache");
header("expires:0");
?>

<table border="0">
<?php echo "Arsip Kegiatan Perpustakaan Universitas Gadjah Mada";?>
    
</table>


<table border="1">
                            <thead>
                                <tr>

                                    <th>No.</th>
                                    <th>Judul Kegiatan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($record as $excel){ ?>

                                    <tr>

                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $excel['subjek']; ?></td>
                                        <td><?php echo $excel['tgl_kegiatan']; ?></td>
                                    </tr>
                                    <?php $no++; ?>
                                   
                              <?php } ?>
                            </tbody>

</table>