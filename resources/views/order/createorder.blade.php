@extends('layouts.userlayout')


<head>
@section('body')
<body>

<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>Order Form</h2>

                    <form action="{{route('store.order')}}" method="post" id="login_form" class="form_class">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"  value={{Auth::user()->name}} required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" value="{{Auth::user()->email}}" required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                        </div>
                        <h2>Your Order</h2>
                        <hr>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>For Product</label>
                                    <input type="text" placeholder="Product name" id="p_name" class="form-control" name="p_name" value="{{$products->name}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                        </div>



                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" placeholder="Quantity" id="quantity" class="form-control" name="quantity"  >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" placeholder="Details" id="details" class="form-control" name="details" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" placeholder="" id="price" class="form-control" name="price"  value={{$products->price}} >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" placeholder="" id="discount" class="form-control" name="discount"  value={{$products->discount}} >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>





                        </div>

                            <div class="col-md-12">

                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Order Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <h2>CONTACT INFO</h2>
                    <p>The main purpose of our ‘Farmshop.com’ is to solve the problems of shopping groceries online and buying cattle’s, This is the best place to find their desired items at the best price.</p>
                    <p>Customer satisfaction is the top priority.</p>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Uttara Sector: 11, Road 10/b <br> House:13<br></p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+8801615211102">+8801615211102</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactfarmshop@gmail.com">contactfarmshop@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->

<!-- Start Instagram Feed  -->

<!-- End Instagram Feed  -->
@endsection
