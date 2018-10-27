<?php echo form_open_multipart('user/pesan');?>
    <legend> Form Pemesanan</legend>
    <?php echo validation_errors(); ?>

<table border="0">
<tr>
    <td> Nama Pemesan </td>
    <td> : </td>
    <td colspan="7"> <input type="text" readonly class="form-control" id="nama" name="nama"> </td>
</tr>

<tr>
    <td> Jenis Wisatawan </td>
    <td> : </td>
    <td colspan="7"> <select name="Jenis_wisatawan">
                    <option value="1" selected="selected"> - </option>
                    <option value="2"> Domestic </option>
                    <option value="3"> Luar Negeri </option></select></td>
</tr>
<tr>
    <td> Note </td>
    <td> : </td>
    <td colspan="7"> <input type="text" class="form-control" id="note" name="note" placeholder="Note"> </td>
</tr>
<tr>
    <td> Check In</td>
    <td> : </td>
    <td><input type="date" class="form-control" id="checkin" name="checkin" placeholder="Check In" size="10"> </td> 
</tr>
<tr>
    <td> check Out</td>
    <td> : </td>
    <td><input type="date" class="form-control" id="checkout" name="checkout" placeholder="Check Out" size="10"> </td> 
</tr>
<tr>

      <td><label for="">Bukti Transfer</label></td>
        <td>:</td>
     <td> <input type="file" name="userfile" size="20"></td>

</tr>
<tr>
    <td colspan="9" align="right"><button type="submit" class="btn btn-primary">Submit</button></td>
    
</tr>
</table>
</body>
