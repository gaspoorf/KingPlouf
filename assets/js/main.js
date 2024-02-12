/*___________MAIN.JS___________*/
let currentAudio;
let themes = document.querySelectorAll('.theme');

/*___________SUBMIT FORMS___________*/
themes.forEach((button) => {
button.addEventListener('click', (event) => {
    button.querySelector('form').submit();
    });
});

/*___________PLAY THEME___________*/
function playTheme(theme) {
  if (currentAudio) {
      currentAudio.pause();
  }
  let audio = new Audio('assets/audio/' + theme + '.mp3');

  audio.loop = true;
  audio.play();
  currentAudio = audio;

  let video = document.querySelector('video');
  video.src = 'assets/media/' + theme + '.mp4';
  video.id = 'video-' + theme;
  video.play();

  themes.forEach((button) => {
    button.classList.remove('active');
    button.classList.add('inactive');
  });

  let button = document.querySelector('#' + theme);
  button.classList.remove('inactive');
  button.classList.add('active');
  console.log(theme);
}

/*___________START AND UPDATE TIMER___________*/
function startTimer() {
  const timerElement = document.getElementById('timer');
  const reignTitle = document.querySelector('.reign .title');
  let seconds = sessionStorage.getItem('timerSeconds') || 0;

  function updateTimer() {
      if (seconds == 0) {
        alertMessage('L\'histoire commence mon brave, à vous de jouer !');
      } 
      if (seconds == 60) {
        alertMessage('00:01:00, Ne lâchez rien messire, vous êtes sur la bonne voie !');
      } 
      if (seconds == 120) {
        alertMessage('00:02:00, Votre royaume est prospère, le peuple est satisfait.');
      }
      if (seconds == 180) {
        alertMessage('00:03:00, Magnifique, vous êtes un véritable roi !');
      }
      if (seconds == 240) {
        alertMessage('00:04:00, Montrez leur comment régner mon bon !');
      }
      if (seconds == 360) {
        alertMessage('00:06:00, De tout en bas, la lune est sublime, ne lâchez pas.');
      }
      if (seconds == 480) {
        alertMessage('00:08:00, C\'est un sacré royaume que vous avez là !');
      }
      if (seconds == 600) {
        alertMessage('00:10:00, Ce royaume est immense, vous êtes un roi digne de ce nom.');
      }
      if (seconds == 720) {
        alertMessage('00:12:00, Chouette messire, les frontières sensorielles s\'aggrandissent !');
      }
      if (seconds == 960) {
        alertMessage('00:16:00, Vous êtes grandiose, votre nom sera gravé dans l\'histoire !');
      }
      if (seconds == 1200) {
        alertMessage('00:20:00, Impossible d\'oublier votre plouf, il fût si long !');
      }
      if (seconds == 1500) {
        alertMessage('00:25:00, Vous êtes un roi, un vrai, un grand !');
      }
      if (seconds == 1800) {
        alertMessage('00:30:00, Ne craquez pas, une fois ce cap franchi il serait ridicule d\'abandonner le peuple.');
      }
      if (seconds == 2400) {
        alertMessage('00:40:00, Je suis fier de vous, mon fils portera votre nom !');
      }
      if (seconds == 3000) {
        alertMessage('00:50:00, Je suis ému, vous êtes le roi Plouf...');
      }
      if (seconds == 3600) {
        alertMessage('01:00:00, Une éternité pour le peuple des bas-fonds, malheureusement je commence à me faire vieux !');
      }
      if (seconds == 4200) {
        alertMessage('01:10:00, Ce fût un plaisir de vous servir mon seigneur, au revoir seigneur Plouf !');
      }
      const hours = Math.floor(seconds / 3600);
      const minutes = Math.floor((seconds % 3600) / 60);
      const remainingSeconds = seconds % 60;

      const formattedTime = padZero(hours) + ':' + padZero(minutes) + ':' + padZero(remainingSeconds);

      timerElement.textContent = formattedTime;
      reignTitle.style.opacity = 1;
      seconds++;
      sessionStorage.setItem('timerSeconds', seconds);
  }

  function padZero(value) {
    return value < 10 ? '0' + value : value;
  }

  const timerInterval = setInterval(updateTimer, 1000);

  document.querySelector('.tertiary-button').addEventListener('click', function() {
    const xhr = new XMLHttpRequest();
      xhr.open('POST', 'functions/saveTimer.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send('time=' + encodeURIComponent(seconds));

      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              window.location.href = 'index.php';
          }
      };
  });

}
startTimer();
