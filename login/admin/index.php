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

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<a class="nav-link" href="logout.php">Logout</a>
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
						<a href="uploads.php"
							class="block py-2 pl-3 pr-4 text-violet-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-700 md:p-0">Home</a>
					</li>
					<li>
						<a href="upload.php"
							class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Unggah
							Musik</a>
					</li>
					<li>
						<a href="#"
							class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Preview</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>



<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-5xl lg:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Selamat Datang Kelompok 1</h1>
<hr class="my-8 w-96 mx-auto h-1 bg-gradient-to-r from-pink-500 to-violet-500 rounded border-0">
<p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48"></p>
<a href="upload.php" class="flex justify-center mx-auto w-44 py-3 px-5 text-base font-medium text-center text-slate-900 bg-white border border-slate-900 rounded-xl hover:text-white hover:border-0 hover:bg-gradient-to-r hover:from-pink-500 hover:to-violet-500">
    Unggah
    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</a>

<hr class="my-8 w-full mx-auto h-1 bg-gray-200 rounded border-0">

	
<footer class="p-4 shadow bg-white border-t-4 text-slate-900 md:flex md:items-center md:justify-between md:p-6 ">
    <span class="text-sm text-slate-900 sm:text-center">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™ & Kelompok1</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>

</body>

</html>