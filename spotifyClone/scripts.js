document.addEventListener("DOMContentLoaded", function () {
    const audio = document.getElementById("myAudio");
    const playPauseBtn = document.getElementById("playPauseBtn");
    const seekBar = document.getElementById("seekBar");
    const currentTime = document.getElementById("currentTime");
    const duration = document.getElementById("duration");
    const playlist = document.getElementById("playlist");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let currentSong = 0;

    const songs = [
        "On & On-Cartoon.mp3",
        "DEAF KEV - Invincible [NCS Release].mp3",
        "Egzod & Maestro Chives - Royalty (Don Diablo Remix) [NCS Release].mp3",
        "Spektrem - Shine [NCS Release].mp3",
        "Cartoon, Jéja - Why We Lose (feat. Coleman Trapp) [NCS Release].mp3",
        "Elektronomia - Sky High [NCS Release].mp3",
        "songs/7.mp3",
        "Janji - Heroes Tonight (feat. Johnning) [NCS Release].mp3",
        "Different Heaven & EH!DE - My Heart [NCS Release] (1).mp3",
        "Syn Cole - Feel Good [NCS Release].mp3",
        "Agora-Hills-Song---Doja-Cat(musicdownload.cc).mp3"
    ];

    function loadSong(songIndex) {
        audio.src = songs[songIndex];
        audio.load();

    }

    function playPause() {
        if (audio.paused) {
            audio.play();

        } else {
            audio.pause();

        }
    }

    function updateSeekBar() {
        seekBar.value = (audio.currentTime / audio.duration) * 100;
    }

    function updateCurrentTime() {
        const currentMinutes = Math.floor(audio.currentTime / 60);
        const currentSeconds = Math.floor(audio.currentTime % 60);

        currentTime.textContent = `${currentMinutes}:${currentSeconds < 10 ? '0' : ''}${currentSeconds}`;
    }

    function updateDuration() {
        const totalMinutes = Math.floor(audio.duration / 60);
        const totalSeconds = Math.floor(audio.duration % 60);

        duration.textContent = `${totalMinutes}:${totalSeconds}`;
    }

    function nextSong() {
        currentSong = (currentSong + 1) % songs.length;
        loadSong(currentSong);
        audio.play();
    }

    function prevSong() {
        currentSong = (currentSong - 1 + songs.length) % songs.length;
        loadSong(currentSong);
        audio.play();
    }

    loadSong(currentSong);

    playPauseBtn.addEventListener("click", playPause);

    audio.addEventListener("timeupdate", function () {
        updateSeekBar();
        updateCurrentTime();
    });

    seekBar.addEventListener("input", function () {
        const seekTime = (audio.duration / 100) * seekBar.value;
        audio.currentTime = seekTime;
    });

    audio.addEventListener("loadedmetadata", function () {
        updateDuration();
    });

    nextBtn.addEventListener("click", nextSong);
    prevBtn.addEventListener("click", prevSong);

    playlist.addEventListener("click", function (e) {
        if (e.target.tagName === "LI") {
            currentSong = Array.from(e.target.parentNode.children).indexOf(e.target);
            loadSong(currentSong);
            audio.play();
        }
    });
});
