<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Landing Page</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #66BB6A 0%, #388E3C 100%);
            color: #333;
            overflow-x: hidden;
        }
        .hero {
            background: linear-gradient(135deg, #66BB6A 0%, #388E3C 100%);
            color: white;
            padding: 100px 20px;
            text-align: center;
            position: relative;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        .btn {
            background: #ff6b6b;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
        }
        .features {
            padding: 80px 20px;
            background: white;
            text-align: center;
        }
        .features h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #333;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .feature {
            padding: 30px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .feature:hover {
            transform: translateY(-5px);
        }
        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #667eea;
        }
        .footer {
            background: #333;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            animation: float 6s ease-in-out infinite;
        }
        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        .shape:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }
        .shape:nth-child(3) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            left: 20%;
            animation-delay: 4s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1rem; }
            .features h2 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <h1>Selamat Datang di Dunia Pertanian Modern</h1>
        <p>Temukan inovasi terdepan dalam pertanian berkelanjutan. Kami menyediakan solusi teknologi untuk meningkatkan produktivitas dan keberlanjutan pertanian Anda.</p>
        <a href="#features" class="btn">Jelajahi Fitur Kami</a>
    </section>

    <section id="features" class="features">
        <h2>Solusi Pertanian Terdepan</h2>
        <div class="feature-grid">
            <div class="feature">
                <h3>🌱 Smart Farming</h3>
                <p>Teknologi IoT untuk monitoring tanaman real-time. Optimalkan irigasi dan nutrisi tanaman secara otomatis.</p>
            </div>
            <div class="feature">
                <h3>📊 Analitik Data</h3>
                <p>Analisis data cuaca, tanah, dan hasil panen untuk prediksi yang akurat dan pengambilan keputusan yang tepat.</p>
            </div>
            <div class="feature">
                <h3>♻️ Berkelanjutan</h3>
                <p>Praktik pertanian ramah lingkungan dengan fokus pada keberlanjutan dan pengurangan dampak lingkungan.</p>
            </div>
            <div class="feature">
                <h3>🤝 Komunitas</h3>
                <p>Platform untuk berbagi pengetahuan dan pengalaman antar petani, membangun jaringan yang kuat.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 {{ config('app.name', 'Laravel') }}. Dibuat dengan ❤️ menggunakan Laravel.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Smooth scrolling untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animasi scroll
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            document.querySelector('.hero').style.transform = 'translateY(' + rate + 'px)';
        });
    </script>
</body>
</html>
