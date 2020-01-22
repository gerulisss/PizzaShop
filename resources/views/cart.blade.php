@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
        <a href="#"><img src={{asset('images/products/pica.png')}} alt="Pica"></a>
    </div>
    <div class="product-details">
      <div class="product-title">Vezuvijaus</div>
      <p class="product-description">Su kumpeliu</p>
    </div>
    <div class="product-price">12.99</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
        <button class="btn"><span>ištrinti</span></button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>

  <div class="product">
    <div class="product-image">
        <a href="#"><img src={{asset('images/products/pica.png')}} alt="Pica"></a>
    </div>
    <div class="product-details">
        <div class="product-title">Vezuvijaus</div>
        <p class="product-description">Su kumpeliu</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
        <button class="btn"><span>ištrinti</span></button>
    </div>
    <div class="product-line-price">45.99</div>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Bendra kaina</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Nuolaida</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    {{-- <div class="totals-item">
      <label>Pristatymas</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div> --}}
    <div class="totals-item totals-item-total">
      <label>Galutinė kaina</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Pirkti</button>

</div>
@extends('layouts.footer')
</body>