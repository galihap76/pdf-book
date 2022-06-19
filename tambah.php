<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Pdf</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--        <link href="styles.css" rel="stylesheet" />-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    
    <body>
        <nav class="navbar navbar-dark bg-primary shadow mb-5">
      <div class="container-fluid">
       <a class="navbar-brand"><i class="bi bi-file-pdf"></i> Pdf Book</a>
      </div>
    </nav>
        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><i class="bi bi-file-pdf"></i>Tambah Pdf</h3></div>
                                    <div class="card-body">
                                        <form action="index.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="small mb-1" for="judul_file_pdf">Judul Pdf</label>
                                                <input class="form-control py-4" id="judul_file_pdf" name="judul_file_pdf" type="text" placeholder="Judul" autocomplete="off" required/>                       
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="nama_file_pdf">File Pdf</label>
                                               <div class="input-group mb-3">                                        
                                              <input type="file" class="form-control" id="nama_file_pdf" name="nama_file_pdf" required>
                                            </div>                                        
                                            </div>                          
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                                            </div>
                                           
                                        </form>
                                    </div>
                                      <div class="card-footer text-center">
                                        <div class="small"><a href="index.php">Kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>