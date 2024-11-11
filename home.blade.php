<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<style>
    /* Responsif untuk layar sedang (tablet) */
@media (max-width: 768px) {
    /* Header dan navigasi */
    header {
        flex-direction: column;
        padding: 15px 20px;
    }

    nav a {
        margin: 10px 0;
    }

    /* Hero section */
    .hero {
        flex-direction: column;
        padding: 40px 20px;
    }

    .hero-text {
        text-align: center;
    }

    .profile-img {
        max-width: 200px;
        margin-top: 20px;
    }

    /* Blog, Offer, dan Project Container */
    .blog-card,
    .offer-card,
    .project-card {
        width: 100%;
        margin: 0 auto;
    }

    .btn-group {
        flex-direction: column;
        align-items: center;
    }
}

/* Responsif untuk layar kecil (ponsel) */
@media (max-width: 480px) {
    /* Header dan navigasi */
    header {
        padding: 10px;
    }

    nav {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    nav a {
        margin: 5px 0;
    }

    /* Hero section */
    .hero {
        padding: 30px 15px;
    }

    .hero-text h1 {
        font-size: 2em;
    }

    /* Blog, Offer, dan Project Card */
    .blog-card,
    .offer-card,
    .project-card {
        width: 100%;
    }

    /* Kontak */
    .mb-3 {
        width: 100%;
        padding: 15px;
    }
}

</style>

    <style>
        /* Styling umum */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #FFFFFF;
        }

        /* Header */
        header {
            position: sticky;
            top: 0; /* Menempel di atas halaman */
            z-index: 1000; /* Pastikan header tetap di atas konten lainnya */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: #FFFFFF;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #FFFFFF;
            font-weight: bold;
        }

        nav a:hover {
            color: #8A2BE2;
        }

        .contact-btn {
            padding: 8px 16px;
            border: 2px solid #8A2BE2;
            color: #FFFFFF;
            border-radius: 8px;
            text-decoration: none;
        }

        .contact-btn:hover {
            background-color: #8A2BE2;
            color: #FFFFFF;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 60px 50px;
        }

        .hero-text {
            max-width: 400px;
        }

        .hero-text h1 {
            font-size: 2.5em;
            font-weight: bold;
        }

        .hero-text h1 span {
            color: #8A2BE2;
        }

        .hero-text p {
            margin-top: 20px;
            font-size: 1em;
            color: #BBBBBB;
        }

        /* Tombol Download dan View */
        .btn-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-download {
            background-color: #8A2BE2;
            color: #FFFFFF;
        }

        .btn-view {
            background-color: transparent;
            color: #FFFFFF;
            border: 2px solid #8A2BE2;
        }

        .btn-view:hover,
        .btn-download:hover {
            opacity: 0.8;
        }

        /* Gambar Profil */
        .profile-img {
            max-width: 300px;
            border-radius: 50%;
            border: 2px solid #8A2BE2;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">Dhiva.</div>
        <nav>
            <a href="#tentang" id="tentang-link">Tentang Saya</a>
            <a href="#blog" id="blog-link">Pengalaman</a>
            <a href="#skill" id="skill-link">Skill</a>
            <a href="#project" id="project-link">Project</a>
            <a href="#contact" id="contact-link" class="contact-btn">Contact Me</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="tentang" class="hero">
        <!-- Teks Sambutan -->
        <div class="hero-text">
            <h1>Hallo<br>Saya <span>Khairul Dhiva</span></h1>
            <h5>083839075355 - <div class="contact">
                <a href="mailto:your-email@gmail.com" class="email-link">Khairuldhiva1@gmail.com</a>
              </div></h5>              
            <p>Nama saya Khairul Dhiva, seorang mahasiswa berusia 20 tahun di Politeknik Negeri Sambas jurusan Manajemen Informatika. Saya memiliki minat yang besar dalam bidang pemrograman web dan senang mempelajari serta mengembangkan keterampilan saya di bidang ini. Saya terus berusaha memperdalam pengetahuan dan keterampilan teknis untuk mendukung karier di dunia teknologi.
            </p> 
        </div>

        <!-- Gambar Profil -->
        <img src="{{ asset('img/foto.jpg') }}" alt="Profile Image" class="profile-img">
    </section>

    <script>
        // Script untuk scroll ke bagian Project saat tombol diklik
        document.getElementById('tentang-link').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berfungsi default
            document.getElementById('tentang').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

    <style>
        /* Section What Do I Offer */
        .blog-section {
            text-align: center;
            padding: 60px 20px;
        }

        .blog-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .blog-section p {
            color: #BBBBBB;
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .blog-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .blog-card {
            width: 850px;
            padding: 20px;
            background-color: #1E1E1E;
            border: 2px solid #8A2BE2;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .blog-card img {
            width: 150px;
            margin-bottom: 20px;
        }

        .blog-card h3 {
            color: #8A2BE2;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
    </style>
    </head>

    <!-- Section: What Do I Offer -->
    <section id="blog" class="blog-section">
        <h2>Pengalaman</h2>
        <div class="blog-container">
            <!-- Web Design Card -->
            <div class="blog-card">
                <img src="{{ asset('img/Blog.jpg') }}" alt="Foto Saya">
                <p>Halo semuanya!
                    Nama saya Khairul Dhiva, dan saya mempunyai banyak pengalaman salah satunya adalah bermain musik/gitar ini merupakan salah satu hobi saya untuk mengisi waktu waktu kosong, saya pernah bermain musik di suatu acara yang ditonton banyak orang, itu merupakan pengalaman terbaik saya.</p>
            </div>
    </section>

    <script>
        // Script untuk scroll ke bagian Project saat tombol diklik
        document.getElementById('blog-link').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berfungsi default
            document.getElementById('blog').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

    <style>
        /* Section What Do I Offer */
        .offer-section {
            text-align: center;
            padding: 60px 20px;
        }

        .offer-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .offer-section p {
            color: #BBBBBB;
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .offer-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .offer-card {
            width: 250px;
            padding: 20px;
            background-color: #1E1E1E;
            border: 2px solid #8A2BE2;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .offer-card:hover {
            transform: translateY(-10px);
        }

        .offer-card img {
            width: 100px;
            margin-bottom: 20px;
        }

        .offer-card h3 {
            color: #8A2BE2;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

    </style>
    </head>

    <!-- Section: What Do I Offer -->
    <section id="skill" class="offer-section">
        <h2>Skill</h2>
        <p>Skill yang saya miliki saat ini ada Web Desain, Microsoft Office, dan Desain Grafis</p>
        <div class="offer-container">
            <!-- Web Design Card -->
            <div class="offer-card">
                <img src="{{ asset('img/WebDesign.jpg') }}" alt="Web Design Icon">
                <h3>Web Desain</h3>
            </div>
            <!-- Mobile Design Card -->
            <div class="offer-card">
                <img src="{{ asset('img/Microsoft.jpeg') }}" alt="Microsoft Icon">
                <h3>Microsoft Office</h3>
            </div>
            <!-- Prototyping Card -->
            <div class="offer-card">
                <img src="{{ asset('img/Desain.jpg') }}" alt="Desain Grafis Icon">
                <h3>Desain Grafis</h3>
            </div>
    </section>

    <script>
        // Script untuk scroll ke bagian Project saat tombol diklik
        document.getElementById('skill-link').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berfungsi default
            document.getElementById('skill').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

        <style>
        /* Section What Do I Offer */
        .project-section {
            text-align: center;
            padding: 60px 20px;
        }

        .project-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .project-section p {
            color: #BBBBBB;
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .project-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .project-card {
            width: 350px;
            padding: 20px;
            background-color: #1E1E1E;
            border: 2px solid #8A2BE2;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-card img {
            width: 250px;
            margin-bottom: 20px;
        }

        .project-card h3 {
            color: #8A2BE2;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
    </style>
    
    <section id="project" class="project-section">
        <h2>Project Saya</h2>
        <div class="project-container">
            <div class="project-card">
                <h3>Project 1</h3>
                <img src="{{ asset('img/project1.jpg') }}" alt="">
                <p>Aplikasi Laundry berbasis Web</p>
            </div>
            <div class="project-card">
                <h3>Project 2</h3>
                <img src="{{ asset('img/project2.jpg') }}" alt="">
                <p>Web blog</p>
            </div>
            <div class="project-card">
                <h3>Project 3</h3>
                <img src="{{ asset('img/project3.png') }}" alt="">
                <p>Project portofolio.</p>
            </div>
            <!-- Tambahkan lebih banyak project card sesuai kebutuhan -->
        </div>
    </section>

    <script>
        // Script untuk scroll ke bagian Project saat tombol diklik
        document.getElementById('project-link').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berfungsi default
            document.getElementById('project').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

<style>
    .contact-section {
            text-align: center;
            padding: 60px 20px;
        }
    .contact-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
    .contact-section h2 {
            justify-content: center;
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
    .mb-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
    .mb-3 {
        width: 750px;
        padding: 20px;
        background-color: #1E1E1E;
        border: 2px solid #8A2BE2;
        border-radius: 15px;
        text-align: center;
        transition: transform 0.3s ease;

    }
    .mb-4 {
        width: 250px;
        padding: 20px;
        background-color: #1E1E1E;
        border: 2px solid #8A2BE2;
        border-radius: 15px;
        text-align: center;
        transition: transform 0.3s ease;
    }
</style>

<section id="contact" class="contact-section">
    <h2>Contact me</h2>
    <div class="mb-container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tulis Pesan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-4">Kirim</button>
      </div>
</section>

<script>
    // Script untuk scroll ke bagian Contact saat tombol diklik
    document.getElementById('contact-link').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah link berfungsi default
        document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
    });
</script>

</body>

</html>