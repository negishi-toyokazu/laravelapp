<form action="/charge" method="POST">
  {{ csrf_field() }}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_LI09hWHzfIcNAke8HTdIuRZH007Qw44Dce"
    data-amount="1000"
    data-name="Demo Site"
    data-label="決済をする"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="jpy">
  </script>
</form>
