document.addEventListener('DOMContentLoaded', function () {
  var flashMessages = document.querySelectorAll('.flash-message');

  flashMessages.forEach(function (message) {
      message.querySelector('.progress-bar').style.visibility = 'visible';
      setTimeout(function() {
          message.style.opacity = '0';
          message.style.pointerEvents = 'none'; // Para evitar clics mientras se muestra el mensaje
          setTimeout(function() {
              message.remove(); // Elimina el mensaje después de la animación de desaparición
          }, 500);
      }, 2500); // 2500 milisegundos = 2,5 segundos
  });
});
