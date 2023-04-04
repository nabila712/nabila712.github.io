<html>

<head>
  <title>Data User</title>
  <script language="javascript" src="../js/validasi.js"></script>
  <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui-1.9.2.custom.js"></script>
  <script src="../javascript/validasi.js"></script>

</head>

<body>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      Dashboard
    </li>
    <li class="breadcrumb-item active">Tambah User</li>
  </ol>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Tambah Data Pelayanan</div>
    <div class="card-body">
      <div class="table-responsive">
        <form role="form" method="post" action="setting/proses_tambah.php" name="forminputuser" id="forminputuser" onsubmit="return kosong_user()" enctype="multipart/form-data">
          <table cellpadding="0" cellspacing="0" border="0" width="567">
            <tr>
              <td height="15"></td>
            </tr>
            <tr>
              <td width="200" height="30">&nbsp;&nbsp;<label>Nama User</label></td>
              <td width="306"><input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" /></td>
              <td width="15"></td>
            </tr>
            <tr>
              <td height="15"></td>
            </tr>
            <tr>
              <td width="200" height="30">&nbsp;&nbsp;<label>Username</label></td>
              <td width="306"><input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" /></td>
              <td width="15"></td>
            </tr>
            <tr>
              <td height="15"></td>
            </tr>
            <tr>
              <td width="189" height="30">&nbsp;&nbsp;<label>Password</label></td>
              <td width="317"><input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" /></td>
            </tr>
            <tr>
              <td height="15"></td>
            </tr>
            <tr>
              <td width="189" height="30">&nbsp;&nbsp;<label>Level</label></td>
              <td width="317">
                <select name="level" id="level" class="form-control">
                  <option value="0" selected>- Pilih Level User -</option>
                  <option value="admin">Admin</option>
                  <option value="pendaftaran">Pendaftaran</option>
                  <option value="menejemen">Menejemen</option>
                </select>
              </td>
            </tr>
            <tr>
              <td height="15"></td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2"><input type="submit" name="proses" value="Simpan" class="btn btn-primary" onClick="kosong_user(); return false;">&nbsp;
                <input type="reset" name="reset" value="Reset" class="btn btn-default"></td>
            </tr>
            <tr>
              <td height="15"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</body>

</html>