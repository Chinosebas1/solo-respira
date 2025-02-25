document.addEventListener('DOMContentLoaded', function() {
  // Tooltips de Bootstrap
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.forEach(function(tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  // Smooth scroll
  document.querySelectorAll('a.nav-link, .navbar-brand').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      if (this.hash !== "") {
        e.preventDefault();
        let target = document.querySelector(this.hash);
        if (target) {
            target.scrollIntoView({
            behavior: 'smooth'
            });
        }
      }
    });
  });
});
  
document.getElementById("apadrinamiento-button").addEventListener("click", function(event){
  event.preventDefault();
  var formContainer = document.getElementById("form-container");
  formContainer.innerHTML = `
      <h2>Donación</h2>
      <form action="URL_PARA_PROCESAR_PAGOS" method="POST">
          <label for="amount">Monto:</label>
          <input type="number" id="amount" name="amount" required>
          <br>
          <label for="payment-method">Método de Pago:</label>
          <select id="payment-method" name="payment-method" required>
              <option value="paypal">PayPal</option>
              <option value="binance">Binance</option>
              <option value="visa">Tarjeta Visa</option>
          </select>
          <br>
          <button type="submit">Donar</button>
      </form>
  `;
});
