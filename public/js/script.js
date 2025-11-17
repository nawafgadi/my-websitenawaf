document.addEventListener('DOMContentLoaded', function() {

    // Logika untuk Menu Mobile (Hamburger)
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');

            // Mengubah ikon bar menjadi 'X' dan sebaliknya
            const icon = menuToggle.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Menutup menu mobile jika link di-klik (untuk navigasi di halaman yang sama)
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

    // Opsi: Menambahkan validasi form sederhana sebelum submit (jika perlu)
    const ppdbForm = document.getElementById('ppdb-form');
    if (ppdbForm) {
        ppdbForm.addEventListener('submit', function(event) {
            // Anda bisa menambahkan validasi JS kustom di sini
            // Untuk saat ini, kita mengandalkan validasi HTML5 'required'
            console.log('Formulir sedang dikirim...');

            // Jika ada validasi yang gagal, Anda bisa gunakan:
            // event.preventDefault();
            // alert('Harap isi semua kolom yang wajib.');
        });
    }

});
