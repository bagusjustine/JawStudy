let currentQuestionIndex = 0;
let score = 0;
let questions = [];
let unansweredQuestions = [];
let selectedAnswer = '';
let bubbleTimeout;

window.onload = function () {
    fetchQuestions();
};

function fetchQuestions() {
    fetch('soal_proses.php')
        .then(response => response.json())
        .then(data => {
            questions = shuffleArray(data);
            unansweredQuestions = [...questions];
            const index = getRandomUnansweredIndex();
            if (index !== -1) showQuestion(index);
            else endQuiz();
        })
        .catch(error => console.error('Error fetching questions:', error));
}

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

function showQuestion(index) {
    const question = questions[index];
    const questionText = document.getElementById('question-text');
    const optionsContainer = document.getElementById('options-container');
    const nextBtn = document.getElementById('next-btn');

    questionText.innerHTML = `<strong>${question.question}</strong>`;
    optionsContainer.innerHTML = '';
    selectedAnswer = '';

    const feedback = document.getElementById('feedback');
    if (feedback) feedback.textContent = '';

    // Buat atau ambil elemen penjelasan
    let explanationEl = document.getElementById('question-explanation');
    if (!explanationEl) {
        explanationEl = document.createElement('div');
        explanationEl.id = 'question-explanation';
        optionsContainer.parentNode.insertBefore(explanationEl, optionsContainer.nextSibling);
    }

    // Tambahkan class bootstrap jika belum ada
    explanationEl.className = 'alert alert-secondary';
    explanationEl.textContent = '';
    explanationEl.style.display = 'none'; // Sembunyikan dulu

    // Tampilkan opsi jawaban
    question.options.forEach(option => {
        const button = document.createElement('button');
        button.classList.add('btn', 'btn-light', 'btn-lg', 'mb-2', 'w-100');
        button.innerText = option;

        button.onclick = function () {
            toggleButtonState(button, option, question.correct_answer, question.explanation);
        };
        optionsContainer.appendChild(button);
    });

    nextBtn.style.display = 'none';
}

function showBubble(message, backgroundColor) {
    const bubble = document.getElementById('bubble-notification');
    if (!bubble) return;

    bubble.textContent = message;
    bubble.style.backgroundColor = backgroundColor;
    bubble.style.display = 'block';

    // Reset animasi: supaya bisa diputar ulang
    bubble.classList.remove('bubble-top-center');
    void bubble.offsetWidth; // reflow
    bubble.classList.add('bubble-top-center');

    // Clear timeout sebelumnya (kalau ada) supaya tidak tumpang tindih
    clearTimeout(bubbleTimeout);

    // Sembunyikan setelah 5 detik (lebih lama dari 3 detik)
    bubbleTimeout = setTimeout(() => {
        bubble.style.display = 'none';
    }, 5000);
}

function toggleButtonState(button, selectedOption, correctAnswer, explanation) {
    const buttons = document.querySelectorAll('#options-container button');
    const feedback = document.getElementById('feedback');
    const explanationEl = document.getElementById('question-explanation');
    const audioCorrect = document.getElementById('audio-correct');
    const audioWrong = document.getElementById('audio-wrong');

    buttons.forEach(btn => {
        btn.disabled = true;
        btn.classList.remove('active', 'btn-success', 'btn-danger');
    });

    button.classList.add('active');

    if (selectedOption === correctAnswer) {
        button.classList.add('btn-success');
        score++;
        showBubble('✔ Jawaban Benar!', '#28a745');
        if (audioCorrect) audioCorrect.play();
        if (explanationEl) {
            explanationEl.textContent = `📝 Penjelasan: ${explanation}`;
            explanationEl.style.display = 'block';
        }
    } else {
        button.classList.add('btn-danger');
        showBubble('❌ Jawaban Salah!', '#dc3545');
        if (audioWrong) audioWrong.play();
        if (explanationEl) {
            explanationEl.textContent = `Jawaban yang benar adalah: ${correctAnswer}. 📝 Penjelasan: ${explanation}`;
            explanationEl.style.display = 'block';
        }
    }

    selectedAnswer = selectedOption;
    const nextBtn = document.getElementById('next-btn');
    nextBtn.style.display = 'block';
}

function endQuiz() {
    document.getElementById('quiz-container').classList.add('hidden');
    const resultContainer = document.getElementById('result-container');
    const scoreText = document.getElementById('score');
    scoreText.innerText = `POINMU: ${score} DARI ${questions.length}`;
    resultContainer.classList.remove('hidden');
}

function restartQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    document.getElementById('quiz-container').classList.remove('hidden');
    document.getElementById('result-container').classList.add('hidden');
    questions = shuffleArray(questions);
    unansweredQuestions = [...questions];
    showQuestion(getRandomUnansweredIndex());
}

function getRandomUnansweredIndex() {
    if (unansweredQuestions.length === 0) return -1;
    const randomIndex = Math.floor(Math.random() * unansweredQuestions.length);
    const question = unansweredQuestions[randomIndex];
    currentQuestionIndex = questions.findIndex(q => q === question);
    unansweredQuestions.splice(randomIndex, 1);
    return currentQuestionIndex;
}

function nextQuestion() {
    const nextIndex = getRandomUnansweredIndex();
    if (nextIndex !== -1) {
        showQuestion(nextIndex);
    } else {
        endQuiz(); // kalau semua soal sudah dijawab
    }
}
