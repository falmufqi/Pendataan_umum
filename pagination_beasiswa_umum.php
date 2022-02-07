<?php
include('koneksi.php');
$data_beasiswa   = mysqli_query($koneksi, "SELECT * FROM siswa_beasiswa");
$nomor = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container mt-4" id="tabel">
        <h1 align="center">Tabel Data Siswa Beasiswa</h1>

        <table id="tabel-data">
            <thead>
                <tr>
                    <th><b>No</b></th>
                    <th><b>NISN</b></th>
                    <th><b>Nama Siswa</b></th>
                    <th><b>Jenis Kelamin</b></th>
                    <th><b>Agama</b></th>
                    <th><b>Jurusan</b></th>
                    <th><b>Program</b></th>
                    <th><b>Keterangan</b></th>
                    <th><b>Tanggal Lahir</b></th>
                    <th class="no-print"><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($data_beasiswa)) {
                ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['nisn_bea']; ?></td>
                        <td><?php echo $data['nama_siswa_bea']; ?></td>
                        <td><?php echo $data['jenis_kel_bea']; ?></td>
                        <td><?php echo $data['agama_bea']; ?></td>
                        <td><?php echo $data['jurusan_bea']; ?></td>
                        <td><?php echo $data['program_bea']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                        <td><?php echo $data['tgl_lahir_bea']; ?></td>
                        <td class="no-print">
                            <a href="update_beasiswa_umum.php?nisn_bea=<?php echo $data['nisn_bea'] ?>" class="btn btn-success no-print">Update</a>
                            <a href="delete_beasiswa_umum.php?nisn_bea=<?php echo $data['nisn_bea'] ?>" class="btn btn-danger no-print">Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <a onclick="PrintDoc()" class="btn btn-warning no-print">Print Data</a>
    <a onclick="tableHtmlToExcel('tabel', 'Data Beasiswa')" class="btn btn-primary no-print">Export To Excel</a>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });

         //Print Function//
         function PrintDoc() {
  
  var toPrint = document.getElementById('tabel');
  var popupWin = window.open('');
   
  popupWin.document.open();
   
  popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="css/print.css" /></head><body onload="window.print()">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
  }
// Export To Excel Function//
function tableHtmlToExcel(tabel, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tabel);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
   
    filename = filename?filename+'.xls':'excel_data.xls';
   
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
   
        downloadLink.download = filename;
       
        downloadLink.click();
    }
}
    </script>
</body>

</html>