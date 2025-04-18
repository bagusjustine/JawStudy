<?php include ("header.php") ?>

<div class="kolom">
  <div class="row justify-content-center">
    <div class="d-flex justify-content-center">
      <div class="col-sm-10 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
        <div class="card">
          <div class="card-body">
          <h2><center>SELAMAT DATANG DI JA-BOT <i class="bi bi-robot"></i></center></h2>
            <br>
            <div id="chatMessages" style="height: 500px; overflow-y: auto; border: 1px solid #ddd; padding: 15px; border-radius: 20px; margin-bottom: 20px;">
                <div id="penjelasanContainer" style="height: 300px; display: flex; justify-content: center; align-items: center;">
                    <div id="penjelasan"
                        style="font-size: 1.25rem; color: #6c757d; background-color: none; padding: 10px; border-radius: 8px; max-width: 600px; text-align: center;">
                        Silahkan tulis kalimat dalam huruf Latin seperti biasa.
                        <br>Contoh: <i>Aku seneng menyang pasar.</i>
                    </div>
                </div>
            </div>

            <div class="input-group">
              <input type="text" id="inputLatin" class="form-control" placeholder="Tulis kalimat dalam huruf Latin...">
              <button class="btn btn-dark" onclick="kirimPesan()">Kirim</button>
            </div>

            <script>
              const kamusFonetik = {
                'seneng': 'seneng',
                'sate': 'sate',
                'gedhe': 'gede',
                'mangan': 'mangan',
                'kowe': 'kowe',
                'apa': 'apa',
                'aku': 'aku',
                'dhuwit': 'dhuwit'
              };

              const aksaraDasar = {
                'h': 'ꦲ', 'n': 'ꦤ', 'c': 'ꦕ', 'r': 'ꦫ', 'k': 'ꦏ',
                'd': 'ꦢ', 't': 'ꦠ', 's': 'ꦱ', 'w': 'ꦮ', 'l': 'ꦭ',
                'p': 'ꦥ', 'j': 'ꦗ', 'y': 'ꦪ', 'm': 'ꦩ', 'g': 'ꦒ',
                'b': 'ꦧ', 'f': 'ꦥ꦳', 'v': 'ꦮ꦳', 'z': 'ꦗ꦳',
                'ng': 'ꦔ', 'ny': 'ꦚ', 'th': 'ꦛ', 'dh': 'ꦝ', 'q': 'ꦐ'
              };

              const sandhanganVokal = {
                'a': '', 'i': 'ꦶ', 'u': 'ꦸ', 'e': 'ꦺ', 'é': 'ꦺꦴ', 'o': 'ꦺꦴ', 'ê': 'ꦼ'
              };

              const vokalMandiri = {
                'a': 'ꦄ', 'i': 'ꦆ', 'u': 'ꦈ', 'e': 'ꦌ', 'o': 'ꦎ', 'é': 'ꦌꦴ', 'ê': 'ꦄꦼ'
              };

              const tandaBaca = { '.': '꧉', ',': '꧈', '?': '꧊', '!': '꧊' };

              function normalizeFonetik(input) {
                const words = input.split(/\s+/);
                return words.map(word => kamusFonetik[word] || word).join(' ');
              }

              function translitAksaraJawa(inputText) {
                const input = normalizeFonetik(inputText.toLowerCase().trim());
                let result = '';
                let i = 0;

                while (i < input.length) {
                  const sisa = input.slice(i);

                  if (sisa[0] === ' ') {
                    result += ' ';
                    i++;
                    continue;
                  }

                  if (tandaBaca[sisa[0]]) {
                    result += tandaBaca[sisa[0]];
                    i++;
                    continue;
                  }

                  let konsonan = '';
                  if (aksaraDasar[sisa.slice(0, 2)]) {
                    konsonan = sisa.slice(0, 2);
                  } else if (aksaraDasar[sisa[0]]) {
                    konsonan = sisa[0];
                  }

                  if (!konsonan) {
                    const vokal = sisa[0];
                    result += vokalMandiri[vokal] || vokal;
                    i++;
                    continue;
                  }

                  const aksara = aksaraDasar[konsonan];
                  const hurufSetelah = sisa[konsonan.length];
                  const sandhangan = sandhanganVokal[hurufSetelah];

                  if (sandhangan !== undefined) {
                    result += aksara + sandhangan;
                    i += konsonan.length + 1;

                    const nasalCheck = input.slice(i, i + 2);
                    if (nasalCheck === "ng" || nasalCheck === "n") {
                      result += "ꦁ";
                      i += (nasalCheck === "ng") ? 2 : 1;
                    }
                  } else {
                    result += aksara + '꧀';
                    i += konsonan.length;
                  }
                }

                return result;
              }

              function kirimPesan() {
                const input = document.getElementById("inputLatin");
                const pesan = input.value.trim();
                if (!pesan) return;

                // Sembunyikan penjelasan saat pesan pertama dikirim
                document.getElementById("penjelasan").style.display = "none";
                document.getElementById("penjelasanContainer").style.display = "none";

                tampilkanPesan(pesan, 'user');

                const sapaanList = ["hai", "halo", "hi", "hello", "hey", "yo"];
                const kata = pesan.toLowerCase().trim().split(/\s+/);
                const jumlahKataSapaan = kata.length;

                const isSapaan = sapaanList.some(sapaan =>
                  pesan.toLowerCase().includes(sapaan) &&
                  pesan.toLowerCase().includes("jabot") &&
                  jumlahKataSapaan <= 2
                );

                if (isSapaan) {
                const adaNamaBot = pesan.toLowerCase().includes("jabot");
                const sapaanRespon = adaNamaBot
                  ? "Hai, ada yang bisa ditranslate? Ketik langsung aja ya :) "
                  : "Halo juga! Aku Jabot kalau butuh bantuan translate, langsung kirim ya ✨";

                efekMengetik(() => {
                  tampilkanEfekKetik(sapaanRespon, 'bot');
                });

                input.value = '';
                return;
              }

              const ucapanTerimaKasihList = [
                "oke", "oke makasih", "engga", "engga makasih", "tidak", "terima kasih", "makasih", "suwun", "thank you", "thanks", "sangat membantu", "makasih ya"
              ];
              const pesanBersih = pesan.toLowerCase().trim();
              const jumlahKata = pesanBersih.split(/\s+/).length;

              const isUcapanTerimaKasih = ucapanTerimaKasihList.some(ucapan =>
                pesanBersih.includes(ucapan) && jumlahKata <= 3
              );

              if (isUcapanTerimaKasih) {
                const balasanTerimaKasih = [
                  "Sama-sama! 😊",
                  "Senang bisa bantu!",
                  "Kapan aja, tinggal panggil Jabot ya :)",
                  "Yok mari!",
                  "Mantap! Semangat terus belajarnya 💪"
                ];
                const randomBalasan = balasanTerimaKasih[Math.floor(Math.random() * balasanTerimaKasih.length)];
                efekMengetik(() => {
                  tampilkanEfekKetik(randomBalasan, 'bot');
                });
                input.value = '';
                return;
              }

                const hasilTranslit = translitAksaraJawa(pesan);
                efekMengetik(() => {
                  tampilkanPesanDenganSalin(hasilTranslit);
                  setTimeout(() => {
                    efekMengetik(() => {
                      tampilkanEfekKetik("Ini adalah hasil dari translatemu, ada lagi yang bisa saya bantu translate? ✨", 'bot');
                    });
                  }, 1000);
                });

                input.value = '';
              }

              function tampilkanPesan(pesan, pengirim) {
                const container = document.getElementById("chatMessages");
                const bubble = document.createElement("div");
                bubble.className = `mb-2 text-${pengirim === 'user' ? 'end' : 'start'}`;
                bubble.innerHTML = `<span class="p-2 d-inline-block ${pengirim === 'user' ? 'bg-dark text-white' : 'bg-light'}" style="border-radius: 10px;">${pesan}</span>`;
                container.appendChild(bubble);
                container.scrollTop = container.scrollHeight;
              }

              // 👉 Untuk hasil transliterasi + ikon salin
              function tampilkanPesanDenganSalin(pesan) {
                const container = document.getElementById("chatMessages");
                const bubble = document.createElement("div");
                bubble.className = "mb-2 text-start";
                bubble.innerHTML = `
                  <span class="p-2 d-inline-block bg-light" style="border-radius: 10px;">
                    ${pesan}
                    <i class="bi bi-clipboard copy-btn ms-2" onclick="salinTeks(this, \`${pesan.replace(/`/g, '\\`')}\`)" style="cursor: pointer;" title="Salin"></i>
                  </span>`;
                container.appendChild(bubble);
                container.scrollTop = container.scrollHeight;
              }

              // 👉 Fungsi salin teks
              function salinTeks(el, teks) {
                navigator.clipboard.writeText(teks).then(() => {
                  el.classList.remove("bi-clipboard");
                  el.classList.add("bi-clipboard-check");
                  setTimeout(() => {
                    el.classList.remove("bi-clipboard-check");
                    el.classList.add("bi-clipboard");
                  }, 1500);
                });
              }

              // 👉 Efek mengetik (delay sebelum respons bot muncul)
              function efekMengetik(callback) {
                const container = document.getElementById("chatMessages");

                // Hapus indikator lama kalau ada
                const existingTyping = document.getElementById("typing");
                if (existingTyping) existingTyping.remove();

                const typing = document.createElement("div");
                typing.id = "typing";
                typing.className = "mb-2 text-start";
                typing.innerHTML = `
                  <span class="p-2 d-inline-block bg-light" style="border-radius: 10px;">
                    <span class="typing-indicator">Tunggu bentar, Jabot lagi mengetik...</span>
                  </span>`;
                container.appendChild(typing);
                container.scrollTop = container.scrollHeight;

                // Delay lalu jalankan callback (respons bot)
                setTimeout(() => {
                  typing.remove();
                  callback();
                }, 800 + Math.random() * 1000); // ketik antara 0.8–1.8 detik
              }

              function tampilkanEfekKetik(teks, pengirim = 'bot') {
                const container = document.getElementById("chatMessages");
                const bubble = document.createElement("div");
                bubble.className = `mb-2 text-${pengirim === 'user' ? 'end' : 'start'}`;
                bubble.innerHTML = `<span class="p-2 d-inline-block ${pengirim === 'user' ? 'bg-dark text-white' : 'bg-light'}" style="border-radius: 10px;">${teks}</span>`;
                container.appendChild(bubble);
                container.scrollTop = container.scrollHeight;
              }

              document.addEventListener("DOMContentLoaded", function () {
                const input = document.getElementById("inputLatin");

                input.addEventListener("keypress", function (event) {
                  if (event.key === "Enter" && !event.shiftKey) {
                    event.preventDefault();
                    kirimPesan();
                  }
                });

                // Optional: fokus otomatis ke input saat halaman dibuka
                input.focus();
              });
            </script>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include ("footer.php") ?>