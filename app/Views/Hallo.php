<!DOCTYPE html>
<html>
<head>
	<title>Contoh Tampilan Website dengan Multimedia Teks</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			color: #333;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #0077b6;
			color: #fff;
			padding: 10px;
		}
		footer {
			background-color: #0077b6;
			color: #fff;
			padding: 10px;
			position: absolute;
			bottom: 0;
			width: 100%;
			text-align: center;
		}
		h1, h2, h3, h4, h5, h6 {
			margin: 0;
			padding: 10px;
			font-weight: bold;
		}
		p {
			margin: 10px;
			padding: 10px;
			line-height: 1.5;
		}
		em {
			font-style: italic;
		}
		strong {
			font-weight: bold;
		}
		u {
			text-decoration: underline;
		}
		del {
			text-decoration: line-through;
		}
		@keyframes animasi-teks {
			from {transform: translateX(0);}
			to {transform: translateX(50%);}
		}
		.teks-bergerak {
			animation: animasi-teks 2s ease infinite alternate;
		}
	</style>
</head>
<body>
	<header>
		<h1>Contoh Tampilan Website dengan Multimedia Teks</h1>
	</header>
	<main>
		<section>
			<h2>Teks Berwarna</h2>
			<p style="color: red;">Ini adalah teks berwarna merah.</p>
		</section>
		<section>
			<h2>Teks dengan Tag Miring, Garis Bawah, dan Coret</h2>
			<p><em>Ini adalah teks miring</em>, <u>ini adalah teks dengan garis bawah</u>, <del>dan ini adalah teks yang dicoret</del>.</p>
		</section>
		<section>
			<h2>Paragraf dan Sub Paragraf</h2>
			<p>Ini adalah paragraf utama.</p>
			<p>Ini adalah sub paragraf pertama.</p>
			<p>Ini adalah sub paragraf kedua.</p>
			<p>Ini adalah paragraf kedua.</p>
		</section>
		<section>
			<h2>Animasi Teks Bergerak</h2>
			<p class="teks-bergerak">Ini adalah teks yang bergerak dari kiri ke kanan.</p>
		</section>
	</main>
	<footer>
		<p>Hak Cipta &copy; 2023. Contoh Tampilan Website dengan Multimedia Teks.</p>
	</footer>
</body>
</html>