<?php
error_reporting(0);
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
		integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<title>Unggah Musik</title>
	<link rel="icon" href="assets/verified-white.png">


	<!-- 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
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
						<a href="uploads.php"
							class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home
							</a>
					</li>
					<li>
						<a href="upload.php"
							class="block py-2 pl-3 pr-4 text-violet-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-violet-700 md:p-0">Unggah
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



	<h1
		class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-5xl lg:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
		Selamat Datang Kelompok 1</h1>
	<hr class="my-8 w-96 mx-auto h-1 bg-gradient-to-r from-pink-500 to-violet-500 rounded border-0">
	<p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48"></p>
	<a href="uploads.php"
		class="flex justify-center mx-auto w-44 py-3 px-5 text-base font-medium text-center text-slate-900 bg-white border border-slate-900 rounded-xl hover:text-white hover:border-0 hover:bg-gradient-to-r hover:from-pink-500 hover:to-violet-500">
		Lihat
		<svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd"
				d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
				clip-rule="evenodd"></path>
		</svg>
	</a>

	<hr class="my-8 w-full mx-auto h-1 bg-gray-200 rounded border-0">

	<?php
	if (isset($_GET['success'])) {
				
	?>
		<div id="alert-additional-content-1" class="p-4 mb-4 border border-blue-300 rounded-lg bg-blue-50 mx-64"
			role="alert">
			<div class="flex items-center">
				<svg aria-hidden="true" class="w-5 h-5 mr-2 text-blue-900" fill="currentColor" viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
						clip-rule="evenodd"></path>
				</svg>
				<span class="sr-only">Info</span>
				<h3 class="text-lg font-medium text-blue-900">Berhasil Mengunggah!!</h3>
			</div>
			<div class="mt-2 mb-4 text-sm text-blue-900">
				More info about this info alert goes here. This example text is going to run a bit longer so that you can see
				how spacing within an alert works with this kind of content.
			</div>
			<div class="flex">
				<a href="uploads.php" type="button"
					class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-blue-800 dark:hover:bg-blue-900">
					<svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
						<path fill-rule="evenodd"
							d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
							clip-rule="evenodd"></path>
					</svg>
					Lihat Hasil Unggahan
				</a>
				<button type="button"
					class="text-blue-900 bg-transparent border border-blue-900 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-blue-800 dark:text-blue-800 dark:hover:text-white"
					data-dismiss-target="#alert-additional-content-1" aria-label="Close">
					Close
				</button>
			</div>
		</div>
	<?php
	}elseif (isset($_GET['error'])) {
				
	?>
		<div id="alert-additional-content-3" class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200"
			role="alert">
			<div class="flex items-center">
				<svg aria-hidden="true" class="w-5 h-5 mr-2 text-green-700 dark:text-green-800" fill="currentColor"
					viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
						clip-rule="evenodd"></path>
				</svg>
				<span class="sr-only">Gagal Mengunggah</span>
				<h3 class="text-lg font-medium text-green-700 dark:text-green-800">This is a success alert</h3>
			</div>
			<div class="mt-2 mb-4 text-sm text-green-700 dark:text-green-800">
				More info about this info success goes here. This example text is going to run a bit longer so that you can
				see how spacing within an alert works with this kind of content.
			</div>
			<div class="flex">
				<button type="button"
					class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-green-800 dark:hover:bg-green-900">
					<svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
						<path fill-rule="evenodd"
							d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
							clip-rule="evenodd"></path>
					</svg>
					View more
				</button>
				<button type="button"
					class="text-green-700 bg-transparent border border-green-700 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-green-800 dark:text-green-800 dark:hover:text-white"
					data-dismiss-target="#alert-additional-content-3" aria-label="Close">
					Dismiss
				</button>
			</div>
		</div>
	<?php
			}else{

			}
			?>

	<form class="mx-24 grid grid-cols-2 gap-x-4 mb-36" method="post" action="action.php" enctype="multipart/form-data">

		<div class="mb-6 lg:col-span-2">
			<label class="block mb-2 text-sm font-medium text-gray-900">Judul Lagu</label>
			<input type="text" name="song_name"
				class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
				required>
		</div>

		<div class="mb-6 lg:col-span-1">
			<label class="block mb-2 text-sm font-medium text-gray-900 " for="multiple_files">Unggah File Musik</label>
			<input
				class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
				id="multiple_files" type="file" name="song_file" accept="audio/*" required >
		</div>

		<div class="mb-6 lg:col-span-1">
			<label  class="block mb-2 text-sm font-medium text-gray-900 " for="multiple_files">Unggah Cover Musik</label>
			<input
				class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
				id="multiple_files" type="file" name="cover_art" accept="image/*" required >
		</div>

		<div class="mb-6 lg:col-span-1">
			<label for="artise_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Pencipta</label>
			<input type="text" required
				class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
			 name="artise_name">
		</div>

		<div class="mb-6 lg:col-span-1">
			<label for="song_uploader" class="block mb-2 text-sm font-medium text-gray-900">Nama Pengunggah</label>
			<input type="text" required
				class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
			 name="song_uploader" >
		</div>

		<div class="mb-6 lg:col-span-2">
			<button type="submit" name="btn-upload"
				class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Upload</button>
		</div>
	</form>


	
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
		integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
	</script>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>