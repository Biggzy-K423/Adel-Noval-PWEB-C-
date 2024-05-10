<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adel Noval</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="tambah.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#" class="logo">
            <img src="profile-user.png" alt="Profile Image">
            <span class="nav-item">Admin</span>
          </a>
        </li>
        <li>
          <a href="c_dashboardadmin.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Result</span>
          </a>
        </li>
        <li>
          <a href="v_login.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="testbox">
      <form action="c_Create.php" method="POST" enctype="multipart/form-data">
        <div class="item">
          <p>Nama</p>
          <div class="name-item">
            <input type="hidden" id="ID_Pelanggan" name="ID_Pelanggan">
          </div>
          <div class="name-item">
            <input type="text" name="Pelanggan" id="Pelanggan">
          </div>
        </div>
        <div class="item">
          <p>Game</p>
          <select name="Kategori_Game" id="Kategori_Game" id="Kategori_Game">
            <option value="Mobile Legend" >Mobile Legend</option>
            <option value="Aov" >Aov</option>
            <option value="Pubg Mobile">Pubg Mobile</option>
            <option value="genshin">genshin </option>
          </select>
        </div>
        <div class="item">
          <p>No.Hp</p>
          <input type="text" name="Nomor_Hp" id="Nomor_Hp">
        </div>
        <div class="item">
          <p>Perkiraan Selesai</p>
          <input type="text" name="Perkiraan_Selesai">
        </div>
        <div class="item">
          <p>Progres</p>
          <select name="Status" id="Status" id="Status">
            <option value="Selesai" >Selesai</option>
            <option value="Proses" >Proses</option>
            <option value="Dibatalkan">Dibatalkan</option>
          </select>
        </div>
        <div class="item">
        
         Masukkan Bukti Tansfer
        <input type="file" name="bukti_tf" id="fileToUpload">
        <!-- <input type="submit" value="Upload Image" name="submit"> -->
        
        <div class="tambah">
        <button id="submitEntryBtn" type="submit">tambah</button>
        </div>
        
      </form>
    </div>
  </div>