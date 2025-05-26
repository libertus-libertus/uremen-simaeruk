// JavaScript untuk mengelola filter portfolio
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-button');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    // Portfolio Filter Logic
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filter = this.dataset.filter;

            // Hapus kelas active dari semua tombol filter
            filterButtons.forEach(btn => btn.classList.remove('active', 'bg-cyan-500', 'text-white'));
            filterButtons.forEach(btn => btn.classList.add('border', 'border-gray-300', 'text-gray-700', 'hover:bg-gray-100'));

            // Tambahkan kelas active ke tombol yang diklik
            this.classList.add('active', 'bg-cyan-500', 'text-white');
            this.classList.remove('border', 'border-gray-300', 'text-gray-700', 'hover:bg-gray-100');


            portfolioItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block'; // Tampilkan item
                    item.classList.remove('animate__fadeOutUp'); // Hapus animasi keluar
                    item.classList.add('animate__fadeInUp'); // Tambahkan animasi masuk
                } else {
                    item.classList.remove('animate__fadeInUp'); // Hapus animasi masuk
                    item.classList.add('animate__fadeOutUp'); // Tambahkan animasi keluar
                    // Sembunyikan setelah animasi selesai
                    item.addEventListener('animationend', function () {
                        if (item.classList.contains('animate__fadeOutUp')) {
                            item.style.display = 'none';
                        }
                    }, {
                        once: true
                    });
                }
            });
        });
    });

    // Pastikan tombol 'Semua' aktif secara default saat dimuat
    document.querySelector('.filter-button[data-filter="all"]').click();
});