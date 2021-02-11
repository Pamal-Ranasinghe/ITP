
@extends('layouts.package')
@section('content')
<section class="story-area bg-seller color-white pos-relative">
    <div class="pos-bottom triangle-up"></div>
    <div class="pos-top triangle-bottom"></div>
    <div class="container">
            <div class="heading" ">
                    <h2 style="margin-top: 50px;">Yummy Hut Packages</h2>
            </div>
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-lg-4 col-md-4  col-sm-6 ">
                            <div class="center-text mb-30">
                                    <div class="ïmg-200x mlr-auto pos-relative">
                                            @if($package->discount > 0)
                                    <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>Special Offer {{$package->discount}}%</b></h6>
                                    @endif        
                                    <img src="/storage/images/{{$package->image}}" alt="">
                                    </div>
                                    <h4 class="mt-20">{{$package->name}}</h5>
                                    <h6 class="mt-20">({{$package->description}})</h5>
                                    <h4 class="mt-5"><b>Rs.{{$package->price}}/=</b></h4>
       
                                <form action="/packages/{{$package->id}}" method="POST">
                                        @csrf
                                        
                                        <label for="quantity">Pack (max 10):</label>
                                         <input type="number" id="quantity" name="quantity" min="1" max="10" required>
                                   
                                    <h6 class="mt-20"><button   type="submit" name="delivery" value="Online Delivery" ><a  class="btn-brdr-primary plr-25"><b>Online Delivery</b></a></button></h6>
                                </form>
                                <form action="/getItem/{{$package->id}}" method="GET">
                                        @csrf
                                        <h6 class="mt-20"><button type="submit"  name="take" value="Take Away"><a class="btn-brdr-primary plr-25"><b>Take Away</b></a></button></h6>
                                </form>
                            </div>
                    </div>
                    @endforeach        
            </div>
            
   

            <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE LATEST PACKAGES</b></a></h6>
    </div><!-- container -->
</section>





<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="/js/scripts.js"></script>
@endsection


