<?php include ("header.php") ?>

    <div class="kolom">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-10 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <div><b>KLIK PADA GAMBAR UNTUK MENDENGARKAN VOICE OVER</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #gambar {
            cursor: pointer;
        }
    </style>

    <div class="kolomsatu">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-2 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body"  > 
                            <img src="../Gambar/1.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playHa()">
                            <audio id="ha" controls style="display: none;">
                                <source src="../Audio/1.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playHa() {
                                    var audio = document.getElementById("ha");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>HA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/2.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playNa()">
                            <audio id="na" controls style="display: none;">
                                <source src="../Audio/2.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playNa() {
                                    var audio = document.getElementById("na");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>NA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/3.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playCa()">
                            <audio id="ca" controls style="display: none;">
                                <source src="../Audio/3.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playCa() {
                                    var audio = document.getElementById("ca");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>CA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/4.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playRa()">
                            <audio id="ra" controls style="display: none;">
                                <source src="../Audio/4.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playRa() {
                                    var audio = document.getElementById("ra");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>RA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/5.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playKa()">
                            <audio id="ka" controls style="display: none;">
                                <source src="../Audio/5.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playKa() {
                                    var audio = document.getElementById("ka");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>KA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kolomdua">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-2 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/6.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playDa()">
                            <audio id="Da" controls style="display: none;">
                                <source src="../Audio/6.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playDa() {
                                    var audio = document.getElementById("Da");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>DA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/7.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playTa()">
                            <audio id="Ta" controls style="display: none;">
                                <source src="../Audio/7.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playTa() {
                                    var audio = document.getElementById("Ta");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>TA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/8.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playSa()">
                            <audio id="Sa" controls style="display: none;">
                                <source src="../Audio/8.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playSa() {
                                    var audio = document.getElementById("Sa");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>SA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/9.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playWa()">
                            <audio id="Wa" controls style="display: none;">
                                <source src="../Audio/9.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playWa() {
                                    var audio = document.getElementById("Wa");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>WA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/10.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playLa()">
                            <audio id="La" controls style="display: none;">
                                <source src="../Audio/10.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playLa() {
                                    var audio = document.getElementById("La");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>LA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kolomtiga">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-2 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/11.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playPa()">
                            <audio id="Pa" controls style="display: none;">
                                <source src="../Audio/11.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playPa() {
                                    var audio = document.getElementById("Pa");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>PA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/12.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playDha()">
                            <audio id="Dha" controls style="display: none;">
                                <source src="../Audio/12.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playDha() {
                                    var audio = document.getElementById("Dha");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>DHA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/13.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playJa()">
                            <audio id="Ja" controls style="display: none;">
                                <source src="../Audio/13.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playJa() {
                                    var audio = document.getElementById("Ja");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>JA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/14.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playYa()">
                            <audio id="Ya" controls style="display: none;">
                                <source src="../Audio/14.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playYa() {
                                    var audio = document.getElementById("Ya");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>YA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/15.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playNya()">
                            <audio id="Nya" controls style="display: none;">
                                <source src="../Audio/15.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playNya() {
                                    var audio = document.getElementById("Nya");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>NYA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kolomempat">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-2 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/16.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playMa()">
                            <audio id="Ma" controls style="display: none;">
                                <source src="../Audio/16.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playMa() {
                                    var audio = document.getElementById("Ma");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>MA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/17.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playGa()">
                            <audio id="Ga" controls style="display: none;">
                                <source src="../Audio/17.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playGa() {
                                    var audio = document.getElementById("Ga");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>GA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/18.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playBa()">
                            <audio id="Ba" controls style="display: none;">
                                <source src="../Audio/18.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playBa() {
                                    var audio = document.getElementById("Ba");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>BA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/19.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playTha()">
                            <audio id="Tha" controls style="display: none;">
                                <source src="../Audio/19.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playTha() {
                                    var audio = document.getElementById("Tha");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>THA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2" style="padding-left: 10px; padding-right: 10px;">
                    <div class="card clickable-card">
                        <div class="card-body">
                            <img src="../Gambar/20.png" id="gambar" style="max-width: 100%; height: auto;"
                                onclick="playNga()">
                            <audio id="Nga" controls style="display: none;">
                                <source src="../Audio/20.aac" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                            <script>
                                function playNga() {
                                    var audio = document.getElementById("Nga");
                                    audio.play();
                                }
                            </script>
                            <div style="text-align: center;">
                                <div><b>NGA</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kolomlima">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-10 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
                            <div style="text-align: center;">
                            <div class="d-grid gap-2">
                                <a class="btn btn-outline-dark" href="soal.php" role="button">COBA KUIS <i class="bi bi-dice-5"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ("footer.php") ?>
