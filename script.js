// Validasi form sebelum submit
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const fullname = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const reason = document.getElementById('reason').value;

    if (!fullname || !email || !phone || !reason) {
        alert('Semua field harus diisi!');
        event.preventDefault(); // Mencegah form dari pengiriman
    }
});

