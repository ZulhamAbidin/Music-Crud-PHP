<?php
error_reporting(0);
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="icon" href="assets/verified-white.png">
	<title>List Musik</title>
</head>

<body>
	<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2 border-b-2 mb-10">
		<div class="container flex flex-wrap items-center justify-between mx-auto">
			<a href="https://flowbite.com/" class="flex items-center">
				<img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
				<span class="self-center text-xl whitespace-nowrap font-extrabold text-violet-700 ">KAMAR MUSIK</span>
			</a>
			<button data-collapse-toggle="navbar-default" type="button"
				class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
				aria-controls="navbar-default" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
						clip-rule="evenodd"></path>
				</svg>
			</button>
			<div class="hidden w-full md:block md:w-auto" id="navbar-default">
				<ul
					class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
					<li>
						<a href="login/admin/uploads.php"
							class="block py-2 pl-3 pr-4 text-violet-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-700 md:p-0">Home</a>
					</li>
					<li>
						<a href="login/index.php"
							class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

 <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "logout"){
            echo '<div id="alert-1" class="flex p-4 m-6 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
   Anda berhasil logout
  </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-dismiss-target="#alert-1" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
';
          }else if($_GET['pesan'] ==  "belum_login"){
            echo "a";
          }
        }
  ?>



<div class="header">
	<h1 class="mb-4 font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-5xl lg:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Selamat Datang</h1>
<hr class="my-8 hidden lg:flex lg:w-96 mx-auto h-1 bg-gradient-to-r from-pink-500 to-violet-500 rounded border-0">
<p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48"></p>

</div>

<hr class="my-8 w-full mx-auto h-1 bg-gray-200 rounded border-0">


	<div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-x-4 gap-y-6 mx-10 mt-16 mb-24">

		<?php	
				include "login/admin/database.php";
				$sql = "SELECT * FROM tbl_songs ORDER BY songID DESC Limit 20";
				 
				// menangkap data id yang di kirim dari url
				$row = $_GET['id'];
				
				
				// menghapus data dari database
				mysqli_query($conn,"delete from tbl_songs where songID='$row'");
				
 
				$result = $conn->query($sql);
				// include"function.time-ago.php";
				if ($result->num_rows > 0) {
			 	while($row = $result->fetch_assoc()) {
			 		($row['songDate']);
		?>
		<div class="w-full  col-span-3 mx-auto md:col-span-2 lg:col-span-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow-md ">
			<div class="flex flex-col items-center pb-6 mt-10">
				<img class="w-24 h-24 mb-3 rounded-full shadow-lg"  src="login/admin/uploads/cover/<?php echo $row['songCover'];?>" alt="Bonnie image"/>
				<h5 class="mb-1 text-xl font-medium text-gray-900"><?php echo $row['songName'];?></h5>
				<span class="text-sm text-gray-500 "><?php echo $row['songArtist'];?></span>
			</div>
			<div class="flex justify-center">
				<a href="download.php?music=<?php echo $row['songID'];?>" type="button" class=" hover:text-white hover:border-0 hover:bg-gradient-to-r hover:from-pink-500 hover:to-violet-500  py-2.5 px-5 mr-2 mb-14 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-200">Lihat</a>
			</div>
		</div>

		<?php
				}
				} else {
			?>
				<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-3xl text-justify">Tidak Ada List Musik Silahkan Unggah Terlebih Dahulu</h1>
			<?php
				}
		?>
	</div>

	
<footer class="p-4 shadow bg-white border-t-4 text-slate-900 md:flex md:items-center md:justify-between md:p-6 ">
    <span class="text-sm text-slate-900 sm:text-center">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™ & Kelompok1</a>. All Rights Reserved.
    </span>
</footer>

</body>

</html>