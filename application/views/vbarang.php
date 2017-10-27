<? $this->load->view('header');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Daftar Barang</b></div>
  <div class="panel-body">
    <p><?=$this->session->flashdata('pesan')?> </p>
      <a href="<?=base_url()?>barang/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>

       <table class="table table-striped">
        <thead>
         <tr>
         <th>No</th>
         <th>Barcode</th>
         <th>Nama</th>
         <th>Harga</th>
         <th>Jenis</th>
         <th>Satuan</th>
         <th>Stok</th>
         <th></th>
         </tr>
        </thead>
        <tbody>
        <? if(empty($qbarang)){ ?>
         <tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>
        <? }else{
          $no=0;
          foreach($qbarang as $rowbarang){ $no++;?>
         <tr>
          <td><?=$no?></td>
          <td><?=$rowbarang->barcode?></td>
          <td><?=$rowbarang->nama_brg?></td>
          <td><?=$rowbarang->harga_brg?></td>
          <td><?=$rowbarang->jenis?></td>
          <td><?=$rowbarang->satuan?></td>
          <td><?=$rowbarang->stok_brg?></td>
          <td>
           <a href="<?=base_url()?>barang/form/edit/<?=$rowbarang->kode_brg?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
           <a href="<?=base_url()?>barang/detail/<?=$rowbarang->kode_brg?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
           <a href="<?=base_url()?>barang/hapus/<?=$rowbarang->kode_brg?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
         </tr>
        <? }}?>
        </tbody>
       </table>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<? $this->load->view('footer');?>