<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reason = $_POST['reason'];

    // Menangani upload gambar
    $image = $_FILES['image'];
    $imagePath = '';

    if ($image['error'] == 0) {
        $targetDir = "uploads/";
        $imagePath = $targetDir . basename($image["name"]);
        move_uploaded_file($image["tmp_name"], $imagePath);
    }

    // Simpan data ke file JSON
    $data = [
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'reason' => $reason,
        'image' => $imagePath
    ];

    $jsonData = json_encode($data) . PHP_EOL;
    file_put_contents('data.json', $jsonData, FILE_APPEND);

    // Redirect ke halaman terima kasih atau grup WhatsApp
    header("Location: https://chat.whatsapp.com/yourgroup");
    exit();
}
?>

