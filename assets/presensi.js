var video = document.getElementById('video');
var canvas = document.getElementById('canvas');
var captureButton = document.getElementById('capture');

navigator.mediaDevices.getUserMedia({ video: true })
  .then(function(stream) {
    video.srcObject = stream;
    video.play();
  })
  .catch(function(err) {
    console.log(err);
  });

captureButton.addEventListener('click', function() {
  var context = canvas.getContext('2d');
  context.drawImage(video, 0, 0, canvas.width, canvas.height);
  var dataURL = canvas.toDataURL();
  // Kirim dataURL ke kontroler presensi untuk disimpan ke database
});
