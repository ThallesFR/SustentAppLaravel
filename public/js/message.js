window.addEventListener('DOMContentLoaded', function() {
    var successMessage = document.getElementById('success-message');
    var errorMessage = document.getElementById('error-message');

    if (successMessage) {
      setTimeout(function() {
        successMessage.style.display = 'none';
      }, 5000); // 5000 milissegundos = 5 segundos
    }

    if (errorMessage) {
      setTimeout(function() {
        errorMessage.style.display = 'none';
      }, 5000); // 5000 milissegundos = 5 segundos
    }
  });
