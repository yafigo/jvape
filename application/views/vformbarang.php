<? $this->load->view('header');?>
<?
if($aksi=='aksi_add'){
   $id="";
    $kode="";
    $nama="";
    $jenis="";
    $harga="";
    $keterangan="";
    $satuan="";
    $stok="";
}else{
  foreach($qdata as $rowdata){
    $id=$rowdata->kode_brg;
    $kode=$rowdata->barcode;
    $nama=$rowdata->nama_brg;
    $jenis=$rowdata->jenis;
    $harga=$rowdata->harga_brg;
    $keterangan=$rowdata->keterangan;
    $satuan=$rowdata->satuan;
    $stok=$rowdata->stok_brg;
  }
}

?>
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Barang</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>barang/form/<?=$aksi?>" method="post">
       <table class="table table-striped">

         <tr>
          <td style="width:15%;">Kode Barcode</td>
          <td>
            <div class="col-sm-2">
                <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                <input type="text" name="kode" class="form-control" value="<?=$kode?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>Nama Barang</td>
          <td>
            <div class="col-sm-6">
                <input type="text" name="nama" class="form-control" value="<?=$nama?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>Jenis</td>
          <td> <div class="col-sm-5">
          <select name="jenis" required="requreid" class="form-control">
           <option></option>
           <option value="Liquid" <? if($aksi=="aksi_edit"){if($jenis=='Liquid'){echo"selected=selected";}}?>>Liquid</option>
           <option value="Atomizer and Mod" <? if($aksi=="aksi_edit"){if($jenis=='Atomizer and Mod'){echo"selected";}}?>>Atomizer and Mod</option>
           <option value="Toolkit"<? if($aksi=="aksi_edit"){if($jenis=='Toolkit'){echo"selected";}}?>>Toolkit</option>
          </select>
          </div>
          </td>
         </tr>
         <tr>
          <td>Satuan</td>
          <td>
          <div class="col-sm-4">
            <input type="text" name="satuan" class="form-control" value="<?=$satuan?>">
          </div>
          </td>
         </tr>
       <tr>
          <td>Harga Barang</td>
          <td>
           <div class="col-sm-4">
            <input type="text" name="harga" class="form-control" value="<?=$harga?>">
            </div>
           </td>
         </tr>
         <tr>
          <td>Stok</td>
          <td>
            <div class="col-sm-2">
                <input type="text" name="stok" class="form-control" value="<?=$stok?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>Keterangan</td>
          <td>
           <div class="col-sm-6">
            <textarea  name="uraian" class="form-control"><?=$keterangan?></textarea>
           </div>
            </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<? $this->load->view('footer');?>