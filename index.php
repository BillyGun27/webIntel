<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Put it here">
    <meta name="application-name" content="AppName">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Billy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="30">-->

<title>Data Management</title>

<link rel="stylesheet" href="css/font-awesome.min.css">  
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/design.css" rel="stylesheet">
<style>

/****/

.headbar{
  background: rgb(0, 223, 211);
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  margin: 0;
  padding: 0;
}
</style>

</head>
<body>

<div class="headbar">
  <div class="container">
     <center> <h1>Data Management</h1> </center>
      
  </div>
</div>

<div class="container" style="margin-top:100px">
    <center>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>NRP</th>
              <th>Nama</th>
			  <th>Tanggal Lahir</th>
			  <th>Alamat</th>
              <th>Dosen</th>             
             </tr>
          </thead>
          <tbody>
            <tr  class="info">
              <td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
              <td class="nrp">00000</td>
              <td class="nama">nama</td>
              <td class="dosen">dosen</td>
              <td class="tgl">2018-02-09</td>
              <td class="tgl">2018-02-09</td>
            </tr>
            <tr>
                <td><i class="fa " aria-hidden="true"></i></td>
                <td class="nrp">00000</td>
                <td class="nama">nama</td>
                <td class="dosen">dosen</td>
                <td class="tgl">2018-02-09</td>
				<td class="tgl">2018-02-09</td>
            </tr>
            <tr>
                <td><i class="fa " aria-hidden="true"></i></td>
                <td class="nrp">00000</td>
                <td class="nama">nama</td>
                <td class="dosen">dosen</td>
                <td class="tgl">2018-02-09</td>
				<td class="tgl">2018-02-09</td>
            </tr>
            <tr>
                <td><i class="fa " aria-hidden="true"></i></td>
                <td class="nrp">00000</td>
                <td class="nama">nama</td>
                <td class="dosen">dosen</td>
                <td class="tgl">2018-02-09</td>
				<td class="tgl">2018-02-09</td>
            </tr>
            <tr>
                <td><i class="fa " aria-hidden="true"></i></td>
                <td class="nrp">00000</td>
                <td class="nama">nama</td>
                <td class="dosen">dosen</td>
                <td class="tgl">2018-02-09</td>
				<td class="tgl">2018-02-09</td>
            </tr>
          </tbody>
        </table>
          
        </div>
        
        </center>
</div>
<center>
<button onclick="up()" class="btn btn-info"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
<button onclick="down()" class="btn btn-info"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
<button onclick="left()" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
<button onclick="right()" class="btn btn-info"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
<button onclick="ins()" class="btn btn-success">add</button>
<button onclick="edit()" class="btn btn-primary">edit</button>
<button onclick="del()" class="btn btn-danger">delete</button>
</center>

<!-- The Modal -->
<div id="myModal" class="modal">
   
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Data</h2>
    </div>
    <form  class="form-horizontal" id="former" method="post" >
    <div class="modal-body">
       
          <div class="form-group">
            <label class="control-label col-sm-3">NRP:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nrp"  name="nrp" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Nama:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nama"  name="nama" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Dosen Wali:</label>
            <div class="col-sm-5">
                <select class="form-control" id="dosen" name="dosen" required>
                 <!--   <option value="">Pilih</option>
                    <option value="M. Hilmi Taqiyyuddin">New</option>
                    <option value="Top Up">Top Up</option>-->
                  </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" >Tgl Lahir:</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="tgl"  name="tgl" required>
            </div>
          </div>
        
    </div>
    <div class="modal-footer">
      <input type="submit"  name="submit" class="btn btn-success" value="submit" >
    </div>
  </form>
  </div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navigate.js"></script>

</body>
</html> 