<?php 
require_once "../config/koneksi.php";

$page = $_GET['page'];


if( $page == 'item_toko'){
  ?>
  <br>
  <div class="site-section">
          <div class="container">
            <?php 
            if(isset($_GET['brand'])){
              $brand = $_GET['brand'];
              $query = "SELECT * FROM barang WHERE brand = '$brand' order by tgl_buka asc";
            }else {
              $query = "SELECT * FROM barang WHERE kategori='1' order by tgl_buka asc";
            }

           
            ?>
            <div class="row">
              <div class="col-md-3">
                               
              </div>
              
              <div class="col-md-9">
                <div class="row auctions-entry">

                <?php 
                  
                  $execute = mysqli_query($koneksi,$query);

                  while($data = mysqli_fetch_array($execute)){
                ?>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="item">
                      <div>
                        
                        <a href="main.php?page=item&id=<?=$data['id']?>"><img width="300px" src="../img/<?=$data['foto']?>" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-4">
                        <h3><a href="main.php?page=item&id=<?=$data['id']?>"><?=$data['brand']?></a></h3>
                        <div class="d-flex mb-2">
                          <span><?=$data['brand']?></span>
                          <span class="ml-auto">Rp. <?=number_format($data['harga_buka'])?></span>
                        </div>
                        <a href="main.php?page=item&id=<?=$data['id']?>" class="btn  btn-primary">Cek Barang</a>
                      </div>

                    </div>
                  </div>
                <?php } ?>
                  
                 
                </div>
            </div>

          </div>
        </div>
  <?php
}

if( $page == 'barang'){
  ?>
  <br>
  <div class="site-section">
          <div class="container">
            <?php 
            if(isset($_GET['brand'])){
              $brand = $_GET['brand'];
              $query = "SELECT * FROM barang WHERE brand = '$brand' order by tgl_buka asc";
            }else {
              $query = "SELECT * FROM barang WHERE kategori='0' order by tgl_buka asc";
            }

            // $mtr = mysqli_query($koneksi,"SELECT * FROM barang WHERE kategori = 'motor'");
            // $mbl = mysqli_query($koneksi,"SELECT * FROM barang WHERE kategori = 'mobil'");
            
            // $jml_mobl = mysqli_num_rows($mbl);
            // $jml_motr = mysqli_num_rows($mtr); //var_dump($jml_motr);
            ?>
            <div class="row">
              <div class="col-md-3">
                               
              </div>
              
              <div class="col-md-9">
                <div class="row auctions-entry">

                <?php 
                  
                  $execute = mysqli_query($koneksi,$query);

                  while($data = mysqli_fetch_array($execute)){
                ?>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="item">
                      <div>
                        
                        <a href="main.php?page=item&id=<?=$data['id']?>"><img width="300px" src="../img/<?=$data['foto']?>" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-4">
                        <h3><a href="main.php?page=item&id=<?=$data['id']?>"><?=$data['brand']?></a></h3>
                        <div class="d-flex mb-2">
                          <span><?=$data['brand']?></span>
                          <span class="ml-auto">Rp. <?=number_format($data['harga_buka'])?></span>
                        </div>
                        <a href="main.php?page=item&id=<?=$data['id']?>" class="btn  btn-primary">Input Penawaran</a>
                      </div>

                    </div>
                  </div>
                <?php } ?>
                  
                  
                 
                </div>
            </div>

          </div>
        </div>
  <?php
}

if($page == 'login'){
  ?>
    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <h2 class="mb-5 text-black"><strong>Log In</strong></h2>
              <form method="post" action="../config/login.php">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="useremail">Email</label>
                    <input required type="email" id="useremail" name="useremail" class="form-control form-control-lg">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="passlogin">Password</label>
                    <input required type="password" id="passlogin" name="password" class="form-control form-control-lg">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12">
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg px-5">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-5">
              <h2 class="mb-5 text-black"><strong>Registrasi</strong></h2>

              <form method="POST" action="../config/register.php">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Nama Lengkap</label>
                    <input required type="text" id="name" name="name" class="form-control form-control-lg">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="hp">Nomor HP/WA</label>
                    <input required type="text" id="hp" name="hp" class="form-control form-control-lg">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="femail">Email</label>
                    <input required type="email" id="email" name="email" class="form-control form-control-lg">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="address">Alamat</label>
                    <input required type="text" id="address" name="alamat" class="form-control form-control-lg">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="fpass">Password</label>
                    <input minlength="6" oninvalid="this.setCustomValidity('Minimal 6 Karakter')" oninput="this.setCustomValidity('')" required type="password" id="fpass" name="password" class="form-control form-control-lg">
                    <!-- <div id="error_msg" style="color : red;"></div> -->
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="fpass2">Re-type Password</label>
                    <input required minlength="6" type="password" id="fpass2" name="password2" class="form-control form-control-lg">  
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Register" id="submit_btn" class="btn btn-primary btn-lg px-5">
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
  <?php
    if($_GET['message'] == 'failregis')
    {
      echo "<script>
        alert('Registrasi Gagal');
      </script>";
    }
}

if($page == 'info-toko') {
  ?>
    <?php 
    
      $kontak = mysqli_query($koneksi,"SELECT * FROM info_toko LIMIT 1");
      $list = mysqli_fetch_array($kontak);
    
    ?>
   <div class="site-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-3">
            
          </div>
            <div class="col-lg-6">
              <div class="mb-3 bg-white">
                <h3 class="mb-5 text-black">Info Toko</h3>
                <p class="mb-0 font-weight-bold text-black">Nama Toko</p>
                <p class="mb-4 text-black"><?=$list['nama']?></p>

                <p class="mb-0 font-weight-bold text-black">Telfon/WA</p>
                <p class="mb-4"><a href="https://api.whatsapp.com/send?phone=<?=$list['no_hp']?>"><?=$list['no_hp']?></a></p>

                <p class="mb-0 font-weight-bold text-black">Email</p>
                <p class="mb-4 text-black"><?=$list['email']?></p>

                <p class="mb-0 font-weight-bold text-black">IG</p>
                <p class="mb-4 text-black"><?=$list['socmed']?></p>

                <p class="mb-0 font-weight-bold text-black">Alamat</p>
                <p class="mb-4 text-black"><?=$list['alamat']?></p>


              </div>
            </div>
            <div class="col-lg-3">
            
            </div>
          </div>
          
        </div>
      </div>
  <?php
}

if($page == 'info-lelang') {
  ?>
    <?php 
    
      $info = mysqli_query($koneksi,"SELECT * FROM info_lelang LIMIT 1");
      $list = mysqli_fetch_array($info);
    
    ?>
   <div class="site-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-3">
            
          </div>
            <div class="col-lg-6">
              <div class="mb-3 bg-white">
                
                <img class="mb-3" align="center" width="100%" src="../img/<?=$list['banner']?>" > 
                
                <h3 class="mb-1 text-black">Info Lelang</h3>
                <p class="mb-4 text-black"><?=$list['deskripsi']?></p>


              </div>
            </div>
            <div class="col-lg-3">
            
            </div>
          </div>
          
        </div>
      </div>
  <?php
}

if($page == 'item'){
  ?>
    <?php 
      $id = $_GET['id'];
      $query = "SELECT * FROM barang  WHERE id = '$id' ORDER BY id";
      $execute = mysqli_query($koneksi,$query); 
      $item = mysqli_fetch_array($execute);

      $query2 = "SELECT * FROM t_lelang JOIN barang  ON t_lelang.barang_id = barang.id JOIN user ON t_lelang.user_id = user.id WHERE barang.id = $id ORDER BY t_lelang.harga_tawar DESC";
      $execute2 = mysqli_query($koneksi,$query2);
      
      $query3 = "SELECT * FROM t_lelang WHERE barang_id = $id AND pending = '1'"; 
      $check = mysqli_query($koneksi,$query3);

      $status = '';
      $terima = mysqli_num_rows($check);
      
      $mulai = date('Y-m-d'); 
      $expr = $item['tgl_tutup']; 
      if ($mulai >= $expr) {
        $exp = 1;
      } else {
        $exp = 0;
      }

      
      if($terima > 0 || $exp > 0){
        $status = 'disabled';
      }

      $selectQuery = "SELECT nama FROM user WHERE role = '1' AND status = '1'";
      $executeQuery = mysqli_query($koneksi,$selectQuery);
      $user = mysqli_fetch_assoc($executeQuery);

    ?>
    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-lg-2">
              <div class="side-box mb-4">
                <p>
                  <table>
                    <?php 
                      if($item['kategori'] == '0')
                      {
                        ?>
                        <tr>
                          <td>Harga Buka</td><td>: <strong class="text-black">Rp. <?=number_format($item['harga_buka'])?></strong></td>
                        </tr>
                        <tr>
                          <td>Tanggal Tutup</td><td>: <strong class="text-black"><?=date('d/m/Y',strtotime($item['tgl_tutup']))?></strong></td>
                        </tr>
                        <?php
                      }
                      else
                      {
                        ?>
                        <tr>
                          <td>Harga</td><td>: <strong class="text-black">Rp. <?=number_format($item['harga_buka'])?></strong></td>
                        </tr>
                        <tr>
                            <?php 
                              $kontak = mysqli_query($koneksi,"SELECT * FROM info_toko LIMIT 1");
                              $list = mysqli_fetch_array($kontak);
                            ?>

                            <td colspan="2"> <a href="https://api.whatsapp.com/send?phone=<?=$list['no_hp']?>" class="btn btn-block btn-primary">Kontak Admin (WA)</a></td>
                        </tr>
                        <?php
                      } 

                    ?>
                    <!-- <tr>
                      <td>Jumlah Kandidat</td><td>: <strong class="text-black">4</strong></td>  
                    </tr> -->
                  </table>
                </p>
                <?php 
                  if($item['kategori'] == '0')
                  {
                    ?>
                    <form action="bid.php" method="post">
                      <div class="mb-4">
                        <input type="hidden" name="idBarang" value="<?=$_GET['id']?>">
                        <input type="number" min="<?=$item['harga_buka']?>" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Harga Tawaran Harus Melebihi Harga Lelang')" name="harga_tawaran" class="form-control mb-2" placeholder="Nilai Tawaran" required>
                        <?php 
                              if(isset($_SESSION['role']) && $_SESSION['role'] == '0') {
                          ?>
                            <button type="submit" class="btn btn-block btn-primary" <?=$status?>>Tawar</button>
                          <?php
                              } else {
                                ?>
                                <a href="main.php?page=login" class="btn btn-block btn-primary">Login/Register</a>
                                <?php
                              }
                        ?>
                          
                      </div>
                    </form>
                    <?php
                  }
                ?>
              </div>
              <div class="side-box text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                <h3 class="h5 text-black"><?=$user['nama']?></h3>
                <span class="mb-3 d-block text-muted">Owner</span>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil repudiandae recusandae, incidunt possimus provident vel facilis!</p> -->
              </div>
            </div>
            <div class="col-lg-8 pr-lg-5">
              <div class="owl-carousel slide-one-item mb-5">
                <img src="../img/<?=$item['foto']?>" alt="Image" class="img-fluid mb-54">
                <img src="../img/<?=$item['foto2']?>" alt="Image" class="img-fluid mb-54">
                <img src="../img/<?=$item['foto3']?>" alt="Image" class="img-fluid mb-54">
              </div>
              <?=$item['keterangan']?>
              <?php 
                  if(!empty($item['video'])) {
                    ?>
                    <video src="../img/<?=$item['video']?>" alt="Video" class="img-fluid mb-54" controls></video>
                    <?php
                  }
                ?>

              <h2 class="my-4">Peserta Lelang</h2>
              <?php $no = 1; while($bidders = mysqli_fetch_array($execute2)){?>
              <ul class="list-unstyled bidders">
                <li class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <span class="mr-2"><?=$no++?>.</span>
                    <div class="d-flex align-items-center">
                      <span><?=$bidders['nama']?> - [<?=$bidders['pending'] == '0' ? 'Pending':'Terpilih'?>]</span>
                      <span></span>
                    </div>
                  </div>
                  <span class="price">Rp. <?=number_format($bidders['harga_tawar'])?></span>
                </li>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
  <?php
}

if($page == ''){
  ?>
   <div class="site-section">
          <div class="container">
            <div id="lelangItems">
                <div class="row mb-4">
                  <div class="col-md-7 mb-5 text-center mx-auto">
                    <span class="caption">Lelang</span>
                    <h2 class="text-black">Daftar <strong>Lelang</strong></h2>
                  </div>
                </div>
                <div class="row auctions-entry">
                <?php 
                      $query = "SELECT * FROM barang WHERE kategori = '0' ORDER BY tgl_buka ASC";
                      $execute = mysqli_query($koneksi,$query);

                      while($data = mysqli_fetch_array($execute)){
                    ?>
                      <div class="col-6 col-md-4 col-lg-4">
                        <div class="item">
                          <div>
                            
                            <a href="main.php?page=item&&id=<?=$data['id']?>"><img width="300px" src="../img/<?=$data['foto']?>" alt="Image" class="img-fluid mb-54"></a>
                          </div>
                          <div class="p-4">
                            <h3><a href="main.php?page=item&&id=<?=$data['id']?>"><?=$data['brand']?></a> <br> <span class="ml-auto">Rp. <?=number_format($data['harga_buka'])?></span></h3>
                            <div class="d-flex mb-2">
                              tanggal tutup : <?=date('d-m-Y',strtotime($data['tgl_tutup']))?>
                            </div>
                            <a href="main.php?page=item&&id=<?=$data['id']?>" class="btn  btn-primary">Input Penawaran</a>
                          </div>

                        </div>
                      </div>
                    <?php } ?>
                </div>
            </div>
            <div id="tokoItems">
              <div class="row mb-4">
                  <div class="col-md-7 mb-5 text-center mx-auto">
                    <span class="caption">Toko</span>
                    <h2 class="text-black">Daftar <strong>Barang</strong></h2>
                  </div>
                </div>
                <div class="row auctions-entry">
                <?php 
                      $query_barang = "SELECT * FROM barang WHERE kategori = '1' ORDER BY tgl_buka ASC";
                      $execute_barang = mysqli_query($koneksi,$query_barang);

                      while($barang = mysqli_fetch_array($execute_barang)){
                    ?>
                      <div class="col-6 col-md-4 col-lg-4">
                        <div class="item">
                          <div>
                            
                            <a href="main.php?page=item&&id=<?=$barang['id']?>"><img width="300px" src="../img/<?=$barang['foto']?>" alt="Image" class="img-fluid mb-54"></a>
                          </div>
                          <div class="p-4">
                            <h3><a href="main.php?page=item&&id=<?=$barang['id']?>"><?=$barang['brand']?></a> <br> <span class="ml-auto">Rp. <?=number_format($barang['harga_buka'])?></span></h3>
                            <div class="d-flex mb-2">
                            
                            </div>
                            <a href="main.php?page=item&&id=<?=$barang['id']?>" class="btn  btn-primary">Cek Barang</a>
                          </div>

                        </div>
                      </div>
                    <?php } ?>
                </div>
              </div>
            </div>
      </div>
  <?php
}

?>