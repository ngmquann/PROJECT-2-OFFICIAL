@extends('layoutfrontend')
@section('contents')
        <div class="cart__product">
          <div class="border-r">
            <table class="cart-form">
              <thead>
                  <tr>
                      <th class="product-name" colspan="3">Products</th>
                      <th class="product-price">Price</th>
                      <th class="product-quality">Quality</th>
                      <th class="product-subtotal">Subtotal</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  print_r(Session::get('cart'));
                ?>
                <tr class="">
                    <td class="product-remove">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                    <td class="product-thumbnail">
                        <a href=""><img src="https://azgundam.com/wp-content/uploads/2023/06/TRUMPETER-BUMBLEBEE-SK-03-CLIFFJUMPER-AZGUNDAM-510x510.jpg"></a>
                    </td>
                    <td class="product-name">
                        <a href="">Trumpeter SK-03 Cliff Jumper – Mô hình lắp ráp Transformers</a>
                    </td>
                    <td class="product-price">
                        <span>479.000đ</span>
                    </td>
                    <td class="product-quality">
                        <div class="quality-buttom-added">
                            <input type="button" value="-" class="minus-button">
                            <input type="number" class="input-text" min='1' value="1">
                            <input type="button" value="+" class="plus-button">
                        </div>
                    </td>
                    <td class="product-subtotal">
                        <span>479.000đ</span>
                    </td>
                </tr>
                <!-- <tr class="">
                    <td class="product-remove">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                    <td class="product-thumbnail">
                        <a href=""><img src="https://azgundam.com/wp-content/uploads/2023/06/TRUMPETER-BUMBLEBEE-SK-03-CLIFFJUMPER-AZGUNDAM-510x510.jpg"></a>
                    </td>
                    <td class="product-name">
                        <a href="">Trumpeter SK-03 Cliff Jumper – Mô hình lắp ráp Transformers</a>
                    </td>
                    <td class="product-price">
                        <span>479.000đ</span>
                    </td>
                    <td class="product-quality">
                        <div class="quality-buttom-added">
                            <input type="button" value="-" class="minus-button">
                            <input type="number" class="input-text">
                            <input type="button" value="+" class="plus-button">
                        </div>
                    </td>
                    <td class="product-subtotal">
                        <span>479.000đ</span>
                    </td>
                </tr> -->
                <!-- <tr class="">
                  <td class="product-remove">
                      <a href=""><i class="fa-solid fa-trash"></i></a>
                  </td>
                  <td class="product-thumbnail">
                      <a href=""><img src="https://azgundam.com/wp-content/uploads/2023/06/TRUMPETER-SK06-BUMBLEBEE-B-127-MODEL-KIT-AZGUNDAM-100x100.jpg"></a>
                  </td>
                  <td class="product-name">
                      <a href="">Trumpeter SK-03 Cliff Jumper – Mô hình lắp ráp Transformers</a>
                  </td>
                  <td class="product-price">
                      <span>479.000đ</span>
                  </td>
                  <td class="product-quality">
                      <div class="quality-buttom-added">
                          <input type="button" value="-" class="minus-button">
                          <input type="number" class="input-text">
                          <input type="button" value="+" class="plus-button">
                      </div>
                  </td>
                  <td class="product-subtotal">
                      <span>479.000đ</span>
                  </td>
                </tr>
                <tr class="">
                  <td class="product-remove">
                      <a href=""><i class="fa-solid fa-trash"></i></a>
                  </td>
                  <td class="product-thumbnail">
                      <a href=""><img src="https://azgundam.com/wp-content/uploads/2023/06/HG-UC-241-MS-06-ZAKU-II-AZGUNDAM-1-100x100.jpg"></a>
                  </td>
                  <td class="product-name">
                      <a href="">Trumpeter SK-03 Cliff Jumper – Mô hình lắp ráp Transformers</a>
                  </td>
                  <td class="product-price">
                      <span>479.000đ</span>
                  </td>
                  <td class="product-quality">
                      <div class="quality-buttom-added">
                          <input type="button" value="-" class="minus-button">
                          <input type="number" class="input-text">
                          <input type="button" value="+" class="plus-button">
                      </div>
                  </td>
                  <td class="product-subtotal">
                      <span>479.000đ</span>
                  </td>
                </tr> -->
                
              </tbody>
            </table>

            <button type="submit" class="btn-product">Back to shop</button>
          </div>
        
        <div class="cart__payment">
          <div class="payment-sidebar">
                <div class="cart-payment">
                  <div class="payment">
                    Payment
                  </div>
                  <div class="checkout-coupon">
                    <p><i class="fa-solid fa-tag"></i> Coupon</p>
                  </div>
                  <input type="text" name="" id="" class="input-text" placeholder="Enter your coupon">
                  <button class="btn-cart--payment" type="submit">Apply</button> 
                </div>

                <div class="cart-total">
                  <div class="total">
                    Total
                  </div>
                  <div class="total-price">
                    2.037.000đ
                  </div>
                  <button class="btn-cart--payment" type="submit">Buy</button>               
                </div>


              </div>
          </div>
        </div>

        <div class="cart-footer">
          <div class="cart-footer-content">
            <!-- New Product -->
            <div class="cart-footer-content--content">
              <div class="cart-footer--title">
                NEW PRODUCTS
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/STAR-WARS-X-WING-STAR-FIGHTER-RED5-ROTS-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/TRUMPETER-BUMBLEBEE-SK-03-CLIFFJUMPER-AZGUNDAM-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/TRUMPETER-SK06-BUMBLEBEE-B-127-MODEL-KIT-AZGUNDAM-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/HG-UC-241-MS-06-ZAKU-II-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Hot Product -->
            <div class="cart-footer-content--content">
              <div class="cart-footer--title">
                HOT PRODUCTS
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2018/09/RG-11-DESTINY-GUNDAM-AZGUNDAM-NEW-IMG-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2018/08/RG-17-WING-GUNDAM-ZEO-EW-AZGUNDAM-NEW-IMG-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2018/08/K%E1%BB%81m-Gundam-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2018/08/bo-kep-100x100.png" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                      <p class="cart-footer--product-content product-price">619.000đ</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- News -->
            <div class="cart-footer-content--content">
              <div class="cart-footer--title">
                News
              </div>
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/STAR-WARS-X-WING-STAR-FIGHTER-RED5-ROTS-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                    </a>
                  </div>
                </div>
              </div>
              
              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/STAR-WARS-X-WING-STAR-FIGHTER-RED5-ROTS-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                    </a>
                  </div>
                </div>
              </div>

              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/STAR-WARS-X-WING-STAR-FIGHTER-RED5-ROTS-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                    </a>
                  </div>
                </div>
              </div>

              <div class="cart-footer--product">
                <div class="cart-footer--product-img">
                  <a href=""> <img src="https://azgundam.com/wp-content/uploads/2023/06/STAR-WARS-X-WING-STAR-FIGHTER-RED5-ROTS-AZGUNDAM-1-100x100.jpg" alt="">
                  </a>
                  <div class="cart-footer--product-content">
                    <a href="">
                      <p class="cart-footer--product-content product-name">1/72 X-Wing Star Fighter Red 5 - Mô hình lắp ráp Starwars</p>
                    </a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
@endsection