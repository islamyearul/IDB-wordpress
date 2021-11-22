<div class="header-top compact-hidden">
    <div class="container">
        <div class="row">
            <div class="header-top-left form-inline col-md-6 col-sm-4 col-xs-12 compact-hidden">
                <div class="form-group languages-block ">
                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/gb.png"
                                alt="English" title="English">
                            <span class="">English</span>
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html"><img class="image_flag"
                                        src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/gb.png"
                                        alt="English" title="English" /> English </a></li>
                            <li> <a href="index.html"> <img class="image_flag"
                                        src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/lb.png"
                                        alt="Arabic" title="Arabic" /> Arabic </a> </li>
                        </ul>
                    </form>
                </div>

                <div class="form-group currencies-block">
                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu btn-xs">
                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                            <li> <a href="#">(£)&nbsp;Pounds </a></li>
                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
                <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i
                            class="fa fa-angle-down"></i></a></h5>
                <div class="tabBlock" id="TabBlock-1">
                    <ul class="top-link list-inline">
                        <li class="account" id="my_account"><a href="my-account.html" title="My Account"
                                class="btn btn-xs dropdown-toggle"> <i class="fa fa-user"></i> My Account </a></li>
                        <li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="Wishlist"><i
                                    class="fa fa-heart"></i> My Wish List</a></li>
                        <li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i
                                    class="fa fa-check-square-o"></i> Checkout</a></li>
                        <li class="signin"><a href="login.html" class="top-link-checkout" title="login"><i
                                    class="fa fa-lock"></i> Sign In</a></li>
                        <li class="shopping_cart">

                            <!--Cart-->
                            <div id="cart" class=" btn-group btn-shopping-cart">
                                <a data-loading-text="Loading..." class="top_cart dropdown-toggle"
                                    data-toggle="dropdown">
                                    <div class="shopcart">
                                        <span class="handle pull-left"></span>
                                        <p class="text-shopping-cart cart-total-full">2 </p>
                                    </div>
                                </a>

                                <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.html"> <img
                                                                src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/resize/2.jpg"
                                                                style="width:70px" alt="Filet Mign" title="Filet Mign"
                                                                class="preview"> </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name"
                                                            href="product.html">Filet Mign</a> </td>
                                                    <td class="text-center"> x1 </td>
                                                    <td class="text-center"> $1,202.00 </td>
                                                    <td class="text-right">
                                                        <a href="product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('2');"
                                                            class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.html"> <img
                                                                src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/resize/3.jpg"
                                                                style="width:70px" alt="Canon EOS 5D"
                                                                title="Canon EOS 5D" class="preview"> </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name"
                                                            href="product.html">Canon EOS 5D</a> </td>
                                                    <td class="text-center"> x1 </td>
                                                    <td class="text-center"> $60.00 </td>
                                                    <td class="text-right">
                                                        <a href="product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('1');"
                                                            class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Sub-Total</strong>
                                                        </td>
                                                        <td class="text-right">$1,060.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                        </td>
                                                        <td class="text-right">$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>VAT (20%)</strong>
                                                        </td>
                                                        <td class="text-right">$200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong>
                                                        </td>
                                                        <td class="text-right">$1,262.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="cart.html"><i
                                                        class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-mega checkout-cart" href="checkout.html"><i
                                                        class="fa fa-share"></i>Checkout</a> </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--//cart-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>