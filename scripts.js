// scripts.js
document.getElementById('videoPlayer').addEventListener('ended', function() {
  fetch('get_next_video.php')
    .then(response => response.text())
    .then(videoPath => {
      if (videoPath) {
        document.getElementById('videoPlayer').src = videoPath;
        document.getElementById('videoPlayer').play();
      }
    });
});
