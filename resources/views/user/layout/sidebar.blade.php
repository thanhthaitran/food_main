<aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
  <div class="block shop-by-side">
    <div class="sidebar-bar-title">
      <h3>{{__('sidebar.shop_by')}}</h3>
    </div>
    <div class="block-content">
      <p class="block-subtitle">{{__('sidebar.shop_option')}}</p>
      <form action="">
        <div class="layered-Category">
          <h2 class="saider-bar-title">{{__('sidebar.categories')}}</h2>
          <div class="layered-content">
            <ul class="check-box-list">
              <li>
                <input type="checkbox" id="jtv1" name="jtvc">
                <label for="jtv1"> <span class="button"></span> Camera & Photo<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv2" name="jtvc">
                <label for="jtv2"> <span class="button"></span> Computers<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv3" name="jtvc">
                <label for="jtv3"> <span class="button"></span> Apple Store<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv4" name="jtvc">
                <label for="jtv4"> <span class="button"></span> Car Electronic<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv5" name="jtvc">
                <label for="jtv5"> <span class="button"></span> Accessories<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv7" name="jtvc">
                <label for="jtv7"> <span class="button"></span> Game & Video<span class="count"></span> </label>
              </li>
              <li>
                <input type="checkbox" id="jtv8" name="jtvc">
                <label for="jtv8"> <span class="button"></span> Best selling<span class="count"></span> </label>
              </li>
            </ul>
          </div>
        </div>
        <div class="size-area">
          <h2 class="saider-bar-title">{{__('sidebar.rate')}} (<i class="fa fa-star"></i>)</h2>
          <div class="slider-range">
            <ul class="check-box-list">
              <li>
                <input type="number" class="filter-rate" name="rate" />
              </li>
            </ul>
          </div>
        </div>
        <div class="size-area">
          <h2 class="saider-bar-title">{{__('sidebar.price')}} ({{__('sidebar.money')}})</h2>
          <div class="cart-plus-minus">
            <div class="numbers-row">
            <input type="number" step="any" name="min_price" class="input-sm col-sm-6" name="price" placeholder="{{__('sidebar.min_price')}}" />
            <input type="number" step="any" name="max_price" class="input-sm col-sm-6" name="price" placeholder="{{__('sidebar.max_price')}}" />
            </div>
          </div>
        </div>
        <button class="button button-filter"><span>{{__('sidebar.search')}}</span></button>
      </form>
    </div>
  </div>
  <div class="block sidebar-cart">
    <div class="sidebar-bar-title">
      <h3>{{__('sidebar.my_cart')}}</h3>
    </div>
    <div class="block-content">
      <p class="amount">{{__('sidebar.there_are')}} <a href="shopping_cart.html">2 {{__('sidebar.items')}}</a> {{__('sidebar.in_your_cart')}}</p>
      <ul>
        <li class="item"> 
          <a href="shopping_cart.html" title="Sample Product" class="product-image">
            <img src="{{ asset('images/products/default-product.jpg')}}" alt="Sample Product ">
          </a>
          <div class="product-details">
            <div class="access"> 
              <a href="#" title="Remove This Item" class="remove-cart">
                <i class="icon-close"></i>
              </a>
            </div>
            <p class="product-name"> <a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
            <strong>1</strong> x <span class="price">{{__('sidebar.money')}}19.99</span> </div>
        </li>
        <li class="item"> 
          <a href="shopping_cart.html" title="Sample Product" class="product-image">
            <img src="{{ asset('images/products/default-product.jpg')}}" alt="Sample Product ">
          </a>
          <div class="product-details">
            <div class="access"> 
              <a href="#" title="Remove This Item" class="remove-cart">
                <i class="icon-close"></i>
              </a>
            </div>
            <p class="product-name"> <a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
            <strong>1</strong> x <span class="price">{{__('sidebar.money')}}19.99</span> </div>
        </li>
      </ul>
      <div class="summary">
        <p class="subtotal"> <span class="label">{{__('sidebar.cart_sub')}}</span> <span class="price">{{__('sidebar.money')}}27.99</span> </p>
      </div>
      <div class="cart-checkout">
        <button class="button button-checkout" title="Submit" type="submit"><i class="fa fa-check"></i> <span>{{__('sidebar.checkout')}}</span></button>
      </div>
    </div>
  </div>
</aside>