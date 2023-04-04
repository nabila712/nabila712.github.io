<html>
<head>
<link href="../css/style1.css" rel="stylesheet">
<head>
<body>
<div align="center">
<div class="panel panel-default">
    <div class="panel-heading">
        <font color="#000" size="4"><b>Ganti Password</b></font>
    </div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form method="POST" action="setting/aksi_pass.php" name="forminputpass" id="forminputpass" onSubmit="return kosong_pass()">
<table width="577" class="bayang2" border="0">
<tr><td height="15"></td></tr>
<tr>
	<td width="174" height="30"><label>&nbsp;&nbsp;Password Lama</label></font></td>
	<td width="383"><input type="password" size="30" maxlength="30" name="pass_lama" id="pass_lama" class="form-control" placeholder="Masukkan Password Lama"></td>
	<td width="25"></td>
</tr>
<tr><td height="5"></td></tr>
<tr>
	<td><label>&nbsp;&nbsp;Password Baru</label></td>
	<td><input type="password" size="30" maxlength="30" name="pass_baru" id="pass_baru" class="form-control" placeholder="Masukkan Password Baru"></td>
	<td width="15"></td>
</tr>
<tr><td height="5"></td></tr>
<tr>
	<td><label>&nbsp;&nbsp;Masukkan Lagi</label></td>
	<td><input type="password" size="30" maxlength="30" name="pass_ulangi" id="pass_ulangi" class="form-control" placeholder="Masukkan Password Kembali"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
	<td></td>
	<td colspan="2"><input type="submit" name="proses" value="Proses" class="btn btn-primary" onClick="kosong_pass(); return false;">
	<input type="button" name="batal" value="Batal" class="btn btn-default" onClick="self.history.back()"></td>
</tr>
<tr><td height="15"></td></tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>