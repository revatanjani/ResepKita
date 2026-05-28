<?php
include 'auth.php';
include 'koneksi.php';

$query = "
SELECT resep.*, users.username
FROM resep
JOIN users ON resep.id = users.id
ORDER BY resep.created_at DESC
";

$result = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index-ResepKita</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class=" bg-[length:300px_auto] bg-center bng-repeat bg-fixed" style="background-image: url('assets/card.png')">
  <nav
    class="flex justify-between fixed z-100 w-full mx-auto rounded- shadow-xl py-5 px-8 border-b border-neutral-900 bg-repeat bg-[length:300px_auto]"
    style="background-image: url('assets/navbg.jpg')">
    <img src="assets/mega1.png" alt="" class="absolute right-44 -top-9 w-21 h-15 scale-150 z-100">
    <img src="assets/mega1.png" alt="" class="absolute left-44 top-13 w-21 h-15 scale-150 z-100">
    <img src="assets/mega3.png" alt="" class="absolute -left-2 -top-12 w-21 h-15 scale-160 z-100">
    <img src="assets/mega2.png" alt="" class="absolute -right-8 top-15 w-21 h-15 scale-130 z-100">
  <!-- Div Logo -->
  <div class="w-70">
          <a href="index.php"
            class="font-bold font-[fredoka] text-3xl text-yellow-950">

            Resep Kita

          </a>
        </div>
        <!-- start div menu -->
<div class= "w-160 flex justify-evenly items-center font-[Merryweather] text-xl">
  <a href="index.php"
          class="font-bold text-yellow-950 hover:text-yellow-700 transition">
          Beranda
        </a>

        <a href="kategori.php"
          class="font-bold text-yellow-950 hover:text-yellow-700 transition">
          Kategori
        </a>


        <a href="create.php"
          class="font-bold text-yellow-950 hover:text-yellow-700 transition">
          Tambah Resep
        </a>

       
</div>
      <!-- start Div navigasi -->
    <div class="w-90 flex items-center justify-end-safe gap-10 font">


         <a href="search.php"
          class="font-bold text-yellow-950 hover:text-yellow-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-6">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
        </svg>
        </a>
          <span class="font-[Merryweather] text-lg text-yellow-950">
            Halo,
            <?= htmlspecialchars($_SESSION['username']); ?>
          </span>
          <a href="logout.php" class="bg-orange-900 text-white px-4 py-2 rounded-full hover:scale-110 hover:bg-yellow-900 font-[Merryweather] duration-300">

            Logout
          </a>
    </div>

  </nav>

  <!-- POSTER istilahnya -->

  <div class="relative h-screen top-4 border-b border-yellow-900 mx-auto w-full"
    style="background-image: url('assets/card.png')";>

    <!-- asset -->
  
    <img src="assets/wayang.png" alt="" class=" absolute -left-9 top-80 w-21 h-32 scale-340 rotate-7">
    <img src="assets/pawayangan.png" alt="" class=" absolute -right-2 top-90 w-21 h-45 scale-250 -rotate-10">
    

    <section class="w-full min-h-screen flex items-center justify-center px-10 gap-90">
      <div class="max-w-7xl w-full flex items-center">
        <div class="w-[35%] relative">
          <h1 class="text-[80px] font-black font-[Merryweather] uppercase text-black tracking-tight leading-tight ">
            Nikmati 

           <text class="pl-10 "> Cita Rasa </text>
            
            <text class="text-yellow-700 italic ">Nusantara</text>
          </h1>
          <p class="mt-8 text-xl text-black font-[fredoka] leading-relaxed">
            Temukan berbagai resep masakan Indonesia yang lezat, mudah dibuat,
            dan cocok untuk hidangan keluarga setiap hari.
          </p>

          <!-- BUTTON -->
          <button class="mt-10 outline-3 outline-yellow-700 text-yellow-900 px-10 py-4 rounded-full text-lg hover:scale-105 hover:bg-yellow-700 hover:text-white font-[fredoka] duration-300">
            LIHAT RESEP
          </button>
        </div>

          <figure class="w-[65%] h-[550px] overflow-hidden rounded-[40px] ml-20 hover-gallery">
          <img src="assets/makanan1.jpg" alt="Makanan1" class="w-full h-full ">
          <img src="assets/makanan3.jpg" alt="makanan3">
          <img src="assets/makanan4.jpg" alt="makanan4">
          </figure>
        </section>
      </div>
    
<!-- batas -->

</div>
  <section class=" h-170 shadow-xl mx-auto px-10 w-full py-9 bg-repeat bg-[length:300px_auto]" style="background-image: url('assets/navbg.jpg')">

    <h1 class="text-4xl shadow-xl font-[Merryweather] font-bold mb-8 text-[#D4AF37] text-center uppercase italic bg-[#2D1B12] rounded-xl" >
      Resep Terbaru
    </h1>
    <!-- GRID CARD -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <?php while ($data = mysqli_fetch_assoc($result)) : ?>

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition bg-bottom" style="background-image: url('assets/card.png')">

          <!-- GAMBAR -->
          <img
            src="uploads/<?= $data['foto']; ?>"
            alt="<?= $data['judul']; ?>"
            class="w-full h-52 object-cover">

          <!-- ISI CARD -->
          <div class="p-5">

            <!-- JUDUL -->
            <h2 class="text-xl font-[fredoka] font-bold text-yellow-950 mb-2">
              <?= htmlspecialchars($data['judul']); ?> 
            </h2>

            <!-- USER -->
            <div class="flex items-center gap-2 text-gray-500 font-[fredoka] text-sm mb-4">

              <span>Oleh :</span>

              <img src="./assets/profil.png" alt="Profil" class="w-4 h-4 object-contain">

              <span class="font-semibold">
                <?= htmlspecialchars($data['username']); ?>
              </span>

            </div>

            <!-- BUTTON -->
            <a href="detail.php?id=<?= $data['id_resep']; ?>"
              class="inline-block font-[fredoka] bg-yellow-950 hover:bg-yellow-800 text-white px-4 py-2 rounded">

              Lihat Resep

            </a>

            <a href="update.php?id=<?= $data['id_resep']; ?>"
              class="inline-block font-[fredoka] bg-yellow-950 hover:bg-yellow-800 text-white px-4 py-2 rounded">

              Edit

            </a>

            <a href="delete.php?id=<?= $data['id_resep']; ?>"
              class="inline-block font-[fredoka] bg-orange-900 hover:bg-yellow-700 text-white px-4 py-2 rounded"
              onclick="return confirm('Hapus resep ini?')">

              Hapus

            </a>

          </div>

        </div>

      <?php endwhile; ?>

    </div>

  </section>
  <!-- footer -->
  <section class="w-full h-130 shadow-xl py-7 px-20 bg-[length:300px_auto] "  style="background-image: url('assets/background.png')">
    <footer class="relative h-full bg-[#2D1B12] rounded-xl overflow-hidden" >
      <div class="absolute inset-0 bg-repeat bg-[length:300px_auto] opacity-10 z-0" style="background-image: url('assets/navbg.jpg')"></div>
       <!-- hiasan -->
         <div class="absolute -top-5 0 flex justify-center pt-6 relative z-10">
          <img class="absolute w-30 " src="assets/mega1.png" alt="hiasan">
         </div>
         <!-- isi -->
          <div class="grid grid-cols-3 mx-auto h-full px-30 gap-10 py-20 z-10">
            <!-- nama -->
            <div class="">
              <h1 class="font-[Merryweather] text-[#D4AF37] font-bold text-4xl">Resep Kita</h1>
              <p class="pt-3 text-olive-100">Temukan berbagai resep makanan Indonesia yang lezat, mudah dibuat, dan cocok untuk hidangan keluarga setiap hari</p>
            </div>
            <!-- navugasi -->
            <div>
              <h1 class="font-[Merryweather] text-[#D4AF37] font-bold text-2xl">Navigasi</h1>
            <div class="grid grid-cols-1 gap-1 pt-3">
              <a href="index.php" class="text-olive-100 hover:text-olive-600">Beranda</a>
              <a href="create.php" class="text-olive-100">Tambah Resep</a>
              <a href="create.php" class="text-olive-100">Kategori</a>    
              </div>
            </div>
            <!-- credit -->
           <div >
              <h1 class="font-[Merryweather] text-[#D4AF37] font-bold text-2xl">Pembuat</h1>
            <div class="grid grid-cols-1 gap-1 pt-3">
              <p class="text-olive-100">Elo</p>
              <p class="text-olive-100">Reva</p>    
              </div>
            </div>
             <div class="absolute inset-0 top-70 z-10 flex items-center justify-center gap-5">
        <div class="w-32 h-[1px] bg-[#D4AF37]"></div>
        <img src="assets/mega2.png" class="w-20 opacity-70">
        <div class="w-32 h-[1px] bg-[#D4AF37]"></div>

    </div>
          </div>
    </footer>
  </div>
  </section>
</body>

</html>