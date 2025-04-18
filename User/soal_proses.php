<?php
header('Content-Type: application/json');

$questions = [
    [
        "question" => "Aksara Jawa termasuk dalam jenis aksara...?",
        "options" => ["Latin", "Pallawa", "Abjad", "Abugida"],
        "correct_answer" => "Abugida",
        "explanation" => "Aksara Jawa termasuk dalam jenis abugida, yaitu sistem tulisan di mana huruf konsonan membawa vokal dasar, yang bisa diubah dengan sandhangan."
    ],
    [
        "question" => "Huruf pertama dalam urutan aksara Jawa disebut...?",
        "options" => ["Ha", "Na", "Ka", "Ta"],
        "correct_answer" => "Ka",
        "explanation" => "Urutan dasar aksara Jawa dimulai dari 'Ha Na Ca Ra Ka', tetapi huruf pertama yang ditulis biasanya adalah Ka, karena 'Ha' digunakan untuk penanda khusus atau vokal."
    ],
    [
        "question" => "Aksara pasangan digunakan untuk...?",
        "options" => ["Menghilangkan vokal", "Menyambung kata", "Menyatakan penekanan", "Mengganti huruf mati"],
        "correct_answer" => "Menghilangkan vokal",
        "explanation" => "Pasangan dipakai untuk menghilangkan vokal default dari suku kata sebelumnya, biasanya saat huruf konsonan muncul berurutan."
    ],
    [
        "question" => "Sandhangan “ꦶ” pada aksara Jawa menunjukkan vokal...?",
        "options" => ["u", "i", "e", "a"],
        "correct_answer" => "i",
        "explanation" => "Sandhangan ' ꦶ' (wulu) menandakan bunyi vokal i."
    ],
    [
        "question" => "Bahasa Jawa Kuno dikenal juga dengan istilah...?",
        "options" => ["Ngoko", "Kawi", "Krama", "Madya"],
        "correct_answer" => "Kawi",
        "explanation" => "Bahasa Jawa Kuno sering disebut sebagai Bahasa Kawi, digunakan pada masa kerajaan Hindu-Buddha dan banyak ditemukan di prasasti."
    ],
    [
        "question" => "Perkembangan Bahasa Jawa Baru terjadi pada masa...?",
        "options" => ["Majapahit", "Mataram Islam", "Tarumanegara", "Sriwijaya"],
        "correct_answer" => "Mataram Islam",
        "explanation" => "Bahasa Jawa Baru berkembang setelah masa kerajaan Hindu-Buddha, terutama pada era kerajaan Mataram Islam."
    ],
    [
        "question" => "Fungsi utama dari aksara Jawa adalah...?",
        "options" => ["Kode rahasia", "Tulisan artistik", "Komunikasi tertulis tradisional", "Transkripsi Latin"],
        "correct_answer" => "Komunikasi tertulis tradisional",
        "explanation" => "Aksara Jawa digunakan untuk menulis bahasa Jawa dan merupakan sistem komunikasi tertulis tradisional."
    ],
    [
        "question" => "Kalimat “Saya pergi ke pasar” dalam aksara Jawa membutuhkan...?",
        "options" => ["Pasangan dan sandhangan", "Pasangan saja", "Sandhangan saja", "Tidak perlu pasangan dan sandhangan"],
        "correct_answer" => "Pasangan dan sandhangan",
        "explanation" => "Untuk menyusun kalimat tersebut dengan benar, dibutuhkan penggunaan pasangan (untuk suku kata konsonan rangkap) dan sandhangan (untuk vokal selain /a/)."
    ],
    [
        "question" => "Salah satu ciri khas Bahasa Jawa Kuno adalah...?",
        "options" => ["Banyak serapan dari Belanda", "Terdapat banyak bentuk krama", "Struktur kalimat mirip Sansekerta", "Tidak menggunakan aksara"],
        "correct_answer" => "Struktur kalimat mirip Sansekerta",
        "explanation" => "Bahasa Jawa Kuno dipengaruhi oleh Sansekerta, baik dalam kosa kata maupun struktur kalimat."
    ],
    [
        "question" => "Aksara Jawa terdiri dari huruf...?",
        "options" => ["Vokal saja", "Konsonan saja", "Konsonan dengan vokal bawaan", "Vokal terpisah dari konsonan"],
        "correct_answer" => "Konsonan dengan vokal bawaan",
        "explanation" => "Aksara Jawa adalah abugida, artinya huruf dasarnya adalah konsonan yang membawa vokal /a/, dan diubah dengan sandhangan."
    ]
];

echo json_encode($questions);
