<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SMK TELKOM PUWOKERTO - Selamat Datang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <nav class="container">
            <a href="#" class="logo">SMK TELKOM PUWOKERTO </a>
            <ul class="nav-links">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#programs">Program</a></li>
                <li><a href="#ppdb">PPDB</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#ppdb" class="btn btn-primary">Daftar Sekarang</a></li>
            </ul>
            <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    <main>
        <section id="hero">
            <div class="hero-content container">
                <h1>Membentuk Masa Depan, Satu Siswa pada Satu Waktu</h1>
                <p>Selamat datang di SMK TELKOM PUWOKERTO, tempat kami menumbuhkan bakat dan karakter untuk generasi pemimpin masa depan.</p>
                <a href="#ppdb" class="btn btn-primary btn-lg">Daftar PPDB 2025</a>
            </div>
        </section>

        <section id="about" class="container">
            <h2>Tentang Kami</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Visi & Misi Kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Kurikulum berstandar internasional.</li>
                        <li><i class="fas fa-check-circle"></i> Fasilitas modern dan lengkap.</li>
                        <li><i class="fas fa-check-circle"></i> Tenaga pengajar profesional dan berdedikasi.</li>
                    </ul>
                </div>
                <div class="about-image">

                </div>
            </div>
        </section>

        <section id="programs" class="container">
            <h2>Program Unggulan</h2>
            <div class="program-cards">
                <div class="card">
                    <i class="fas fa-flask"></i>
                    <h3>Sains & Teknologi</h3>
                    <p>Program intensif di bidang robotika, coding, dan penelitian ilmiah.</p>
                </div>
                <div class="card">
                    <i class="fas fa-palette"></i>
                    <h3>Seni & Budaya</h3>
                    <p>Mengembangkan kreativitas melalui musik, teater, dan seni rupa.</p>
                </div>
                <div class="card">
                    <i class="fas fa-running"></i>
                    <h3>Olahraga</h3>
                    <p>Fasilitas lengkap untuk mencetak atlet-atlet berprestasi.</p>
                </div>
            </div>
        </section>

        <hr>

        <section id="ppdb" class="container">
            <h2>Penerimaan Peserta Didik Baru (PPDB) 2025</h2>
            <p>Ambil langkah pertama untuk masa depan cerah. Daftarkan putra/putri Anda sekarang.</p>

            @if(session('success'))
                <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb; text-align: center;">
                    {{ session('success') }}
                </div>
            @endif

            <form id="ppdb-form" action="{{ route('landing.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap Calon Siswa</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh: Budi Santoso" required value="{{ old('nama_lengkap') }}">
                    @error('nama_lengkap')
                        <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email_orangtua">Email Orang Tua/Wali</label>
                    <input type="email" id="email_orangtua" name="email_orangtua" placeholder="Contoh: wali@email.com" required value="{{ old('email_orangtua') }}">
                    @error('email_orangtua')
                        <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telepon_orangtua">No. WhatsApp Orang Tua/Wali</label>
                    <input type="tel" id="telepon_orangtua" name="telepon_orangtua" placeholder="Contoh: 081234567890" required value="{{ old('telepon_orangtua') }}">
                    @error('telepon_orangtua')
                        <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Contoh: SMPN 1 Jakarta" required value="{{ old('asal_sekolah') }}">
                    @error('asal_sekolah')
                        <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan_jenjang">Pilihan Program</label>
                    <select id="pilihan_jenjang" name="pilihan_jenjang" required>
                        <option value="">-- Pilih Program --</option>
                        <option value="RPL" {{ old('pilihan_jenjang') == 'RPL' ? 'selected' : '' }}>RPL(REKAYASA PRANGKAT LUNAK)</option>
                        <option value="PG" {{ old('pilihan_jenjang') == 'PG' ? 'selected' : '' }}>PG(PEMROGRAMAN GAME)</option>
                        <option value="TKJ" {{ old('pilihan_jenjang') == 'TKJ' ? 'selected' : '' }}>TKJ(TEKNIK KOMUNIKASI JARINGAN)</option>
                        <option value="TJA" {{ old('pilihan_jenjang') == 'TJA' ? 'selected' : '' }}>TJA(TEKNIK JARINGAN AKSES) </option>
                    </select>
                    @error('pilihan_jenjang')
                        <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">Kirim Pendaftaran</button>
            </form>
        </section>

    </main>

    <footer id="contact">
        <div class="container footer-content">
            <div class="footer-info">
                <h3>SMK TELKOM PUWOKERTO</h3>
                <p>Jl. DI PANJAITAN No. 123, PUWOKERTO, 12</p>
                <p>Email: info@stematel.sch.id</p>
                <p>Telepon: (021) 123-4567</p>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 SMK TELKOM PUWOKERTO. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
