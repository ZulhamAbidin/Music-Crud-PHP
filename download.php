<?php
include "database.php";

if (isset($_POST['btn-download'])) {
	$id = $_POST['music'];
	$sql = "SELECT * FROM tbl_songs WHERE songID='$id'"; 
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$file_name = $row['songFile'];
		$file_url = 'uploads/audio/' . $file_name;
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"".$file_name."\""); 
		if (readfile($file_url)){
			?>
			<script>
				window.location.href='download.php?music=<?php echo $id;?>';
			</script>
			<?php
		}
		exit;
	}
}

if (isset($_GET['music'])){
	$id = $_GET['music'];
	$sql = "SELECT * FROM tbl_songs WHERE songID='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
		$row = $result->fetch_assoc();
	
}
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
	<title>Download</title>
	<link rel="icon" href="assets/verified-white.png">
	<!-- Jplayer-->
	<link href="jplayer/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jplayer/lib/jquery.min.js"></script>
	<script type="text/javascript" src="jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function(){

		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					title: "<?php echo $row['songName'].' - '.$row['songArtist'];?>",
					m4a: "uploads/audio/<?php echo $row['songFile'];?>",
					oga: "uploads/audio/<?php echo $row['songFile'];?>"
				});
			},
			swfPath: "jplayer/dist/jplayer",
			supplied: "m4a, oga",
			wmode: "window",
			useStateClassSkin: true,
			autoBlur: false,
			smoothPlayBar: true,
			keyEnabled: true,
			remainingDuration: true,
			toggleDuration: true
		});
	});
	//]]>
	</script>
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
							class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Unggah
							Musik</a>
					</li>
					<li>
						<a href="#"
							class="block py-2 pl-3 pr-4  text-violet-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Preview</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	
		<div class="col-span-6 text-center py-2">
			<h1
				class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-5xl lg:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
				<?php echo $row['songName'];?></h1>
			<hr class="my-8 w-96 mx-auto h-1 bg-gradient-to-r from-pink-500 to-violet-500 rounded border-0">
			<p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl  sm:px-16 xl:px-48"></p>
		</div>
		
		<div class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-3xl hover:bg-gray-100 mx-auto pb-10 mb-20 mt-10">
			<img class="object-cover mx-10 rounded-t-lg mx-auto h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg my-6 rounded-xl" src="uploads/cover/<?php echo $row['songCover'];?>" alt="">
			<div class="flex flex-col justify-between p-4 leading-normal">
					
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Judul <?php echo $row['songName'];?></h5>
				<div class="mb-3 text-slate-900 grid grid-cols-2 font-medium mt-4">
					<div class="col-span-1">
						<ul>
							<li>
								Judul
							</li>
							<li>
								Pencipta
							</li>
							
							<li>
								Nama Pengunggah
							</li>
							
						</ul>
					</div>
					<div class="col-span-1">
						<ul>
							<li>
								: <?php echo $row['songName'];?>
							</li>
							<li>
								: <?php echo $row['songArtist'];?>
							</li>
							
							<li>
								: <?php echo $row['songUploader'];?>
								
							</li>
						
						</ul>
					</div> 

					<div class="col-span-2 mt-10 mb-5 mx-auto">
						<form method="post" class="justify-content-center">
							<input type="hidden" name="music" value="<?php echo $row['songID'];?>">
							<button type="submit" name="btn-download"   title="Download <?php echo $row['songName'];?>" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white ">
								<span class="relative flex px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
									Download
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" class="w-6 h-6 ml-2">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
									</svg>
								</span>
							</button>
						</form>
					</div>

				</div>

				<!-- pemutar -->

				<div id="jquery_jplayer_1" class="jp-jplayer"></div>

					<div id="jp_container_1" class="jp-audio mx-auto" role="application" aria-label="media player">
						<div class="jp-type-single">
							<div class="jp-gui jp-interface bg-slate-50">
								<div class="jp-controls">
									<button class="jp-play" role="button" tabindex="0">play</button>
									<button class="jp-stop" role="button" tabindex="0">stop</button>
								</div>
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
								<div class="jp-volume-controls">
									<button class="jp-mute" role="button" tabindex="0">mute</button>
									<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
									<div class="jp-volume-bar">
										<div class="jp-volume-bar-value"></div>
									</div>
								</div>
								<div class="jp-time-holder">
									<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
									<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
									<div class="jp-toggles">
										<button class="jp-repeat" role="button" tabindex="0">repeat</button>
									</div>
								</div>
							</div>
							<div class="jp-details">
								<div class="jp-title" aria-label="title">&nbsp;</div>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>

				<!-- end pemutar -->
			</div>
		</div>


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