@extends('layoutfrontend')
@section('content')
<div class="cart-body">
  @include('cart2')
</div>
  <script>
    function cartUpdate(e){
      e.preventDefault();
      let urlUpdateCart = $('.cart-update-url').data('url');
      let id = $(this).data('id');
      let quantity = $(`#value_${id}`).val();

      $.ajax({  
          url: urlUpdateCart,     
          type: 'GET',   
          data: {id: id, quantity: quantity},         
          success: function(data){
            if (data.code === 200) {
              $('.cart-body').html(data.cart);
              alert('Update successfully');
            }
          },
          error: function(){

          }
        });
    }

    function cartDelete(e){
      e.preventDefault();
      let urlDeleteCart = $('.cart-del-url').data('url');
      let id = $(this).data('id');

      $.ajax({  
          url: urlDeleteCart,     
          type: 'GET',   
          data: {id: id},         
          success: function(data){
            if (data.code === 200) {
              $('.cart-body').html(data.cart);
              alert('Delete successfully');
            }
          },
          error: function(){

          }
        });
    }

    $(document).ready(function () {
      $('.cart-update').on('click', cartUpdate);
      $('.cart-del').on('click', cartDelete);
    });
    </script>
@endsection

@section('addCSS')
  <link rel="stylesheet" href="{{asset('css/cart.css') }}">
@endsection

@section('addJS')
  <script src="{{asset('js/cart.js') }}"></script>
@endsection 