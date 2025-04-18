<?php include ("header.php") ?>

<!-- Notifikasi Bubble dari Atas Tengah -->
<div id="bubble-notification" class="bubble-top-center" style="display: none;"></div>

<div class="kolom">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-sm-10 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            <center>AYO KERJAKAN KUIS! <i class="bi bi-filter-square"></i></center>
                        </h2>
                        <br>
                        <!-- Feedback -->
                        <div id="feedback"></div>
                        <div id="quiz-container" class="mt-4">
                            <div id="question-container">
                                <p id="question-text" class="h4" style="padding-left: 10px; padding-right: 10px;">Tunggu Sebentar...</p>
                                <br>
                            </div>
                            <div id="options-container" class="btn-group-vertical w-100">
                                <!-- Pilihan jawaban akan muncul di sini -->
                            </div>

                            <!-- ✅ Penjelasan akan muncul di bawah pilihan jawaban -->
                            <div id="question-explanation"></div>

                            <div class="d-grid gap-2">
                                <br>
                                <button id="next-btn" class="btn btn-outline-dark" onclick="nextQuestion()">LANJUT SOAL BERIKUTNYA <i class="bi bi-arrow-right-square"></i></button>
                            </div>
                        </div>

                        <div id="result-container" class="hidden mt-4 text-center">
                            <br><br><br><br><br><br><br>
                            <p id="score" class="h1"></p>
                            <br><br><br><br><br><br><br>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" onclick="restartQuiz()">MAU ULANGI LAGI? <i class="bi bi-arrow-repeat"></i></button>
                                <a class="btn btn-dark" href="aksara.php" role="button">MAU KEMBALI KE AKSARA? <i class="bi bi-arrow-return-left"></i></a>
                            </div>
                        </div>

                        <!-- Audio -->
                        <audio id="audio-correct" src="../Audio/correct.mp3" preload="auto"></audio>
                        <audio id="audio-wrong" src="../Audio/wrong.mp3" preload="auto"></audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<audio id="background-music" autoplay loop hidden>
    <source src="../Audio/bc.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<?php include ("footer.php") ?>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="soal.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>