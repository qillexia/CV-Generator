<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-800 scroll-smooth">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 bg-white shadow z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5">
            <div class="text-xl font-bold text-blue-600">CV Generator</div>
            <nav class="space-x-6">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="#fitur" class="text-gray-700 hover:text-blue-600">Fitur</a>
                <a href="#tentang" class="text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="#kontak" class="text-gray-700 hover:text-blue-600">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex flex-col-reverse md:flex-row items-center justify-center text-center md:text-left px-4 pt-24 bg-gradient-to-br from-blue-100 to-white gap-x-8">
        <div class="w-full md:w-1/2 max-w-2xl md:ml-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-5">Buat CV Profesional dalam Hitungan Menit</h1>
            <p class="text-l text-gray-600 mb-8">Isi data Anda, dan kami bantu buatkan CV secara otomatis.</p>
            <a href="pribadi.php" class="bg-blue-600 text-white px-5 py-2 rounded-lg text-l font-semibold hover:bg-blue-700">Mulai Buat CV</a>
        </div>

        <div class="w-full md:w-1/2 mb-10 md:mb-0 flex justify-center">
            <img src="assets/CvTemplate.jpg" alt="Ilustrasi CV" class="w-48 md:w-64 lg:w-72 h-auto border-2 rounded-lg">
        </div>
    </section>



    <!-- Fitur Section -->
    <section id="fitur" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-8">Fitur Unggulan</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 bg-blue-50 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-2">Template Minimalist</h3>
                    <p class="text-gray-600">Desain CV profesional dan elegan yang siap digunakan secara instan.</p>
                </div>
                <div class="p-6 bg-blue-50 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-2">Mudah Digunakan</h3>
                    <p class="text-gray-600">Isi formulir sederhana dan CV Anda akan langsung jadi.</p>
                </div>
                <div class="p-6 bg-blue-50 rounded-xl shadow">
                    <h3 class="text-xl font-semibold mb-2">Gratis & Cepat</h3>
                    <p class="text-gray-600">Tanpa biaya, tanpa ribet. Siap unduh dalam hitungan detik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Tentang Kami</h2>
            <p class="text-gray-700 text-lg">
                CV Generator adalah platform online yang membantu Anda membuat CV profesional dengan cepat dan mudah. Platform ini dikembangkan dengan semangat untuk mempermudah siapa pun dalam membuat CV berkualitas tanpa harus memiliki keahlian desain.
            </p>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-20 bg-white">
        <div class="max-w-3xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Kontak Kami</h2>
            <p class="text-gray-700 mb-4">Ada pertanyaan atau masukan? Hubungi kami melalui:</p>
            <p class="text-blue-600 font-semibold">haqilabdillahgmail.com</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center py-6">
        <p class="text-sm text-gray-500">&copy; <?= date('Y') ?> Haqil Abdillah.</p>
    </footer>

</body>

</html>