@extends('layouts.frontend2')                                     <!-- showing main component  -->
   
@section('title')
Home
@endsection


@section('content')


<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super Value Deals</h2>
    <h1>On all Products</h1>
    <p>Save Up To 70% off!</p>
    <button ><a href="shop.html">Shop now</a></button>
</section>
     

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f1.png')}}" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f2.png')}}" alt="">
        <h6>Online order</h6>
    </div>
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f3.png')}}" alt="">
        <h6>Save money</h6>
    </div>
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f4.png')}}" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f5.png')}}" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="{{asset('frontend/img/features/f6.png')}}" alt="">
        <h6>24/7 Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <p>Robotics parts are now here</p>
    <div class="pro-container">
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/1.MicrocontrollersDevelopment Boards.jpg')}}" alt="">
        <div class="des">
            <span>Arduino</span>
            <h5>Microcontrollers</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$99</h4>
        </div>
        <a href="#"><i  class="fal fa-shopping-cart" ></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/Motor Controllers.jpg')}}" alt="">
        <div class="des">
            <span>Arduino</span>
            <h5>motor controllers</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$179</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/1.Flight Controller.jpg')}}" alt="">
        <div class="des">
            <span>semias</span>
            <h5>motors</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$119</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/ultrasonic-sonar-sensor-hc-sr04-robotics-bangladesh.jpg')}}" alt="">
        <div class="des">
            <span>Arduino</span>
            <h5>sensors</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$77</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/6.GPS Module.jpg')}}" alt="">
        <div class="des">
            <span>lospo</span>
            <h5>power supply</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$371</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/7.FPV Camera and Video Transmitter.jpg')}}" alt="">
        <div class="des">
            <span>j sumo</span>
            <h5>robo chessis</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$490</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/Wheels and Tracks.jpg')}}" alt="">
        <div class="des">
            <span>aspros</span>
            <h5>tracks</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$89</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/robotics2/Actuators (Solenoids, Linear Actuators).jpg')}}" alt="">
        <div class="des">
            <span>berry adams</span>
            <h5>linear actuators</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$124</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% Off</span> on all Accessories </h2>
        <button class="normal">Explore more</button>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrival</h2>
    <p>Get Everything You Need For Your Camera & Computer</p>
    <div class="pro-container">
        <div class="pro">
            <img src="{{asset('frontend/img/camera/1.jpeg')}}" alt="">
        <div class="des">
            <span>sensi</span>
            <h5>sensor</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$100</h4>
        </div>
        <a href="#"><i  class="fal fa-shopping-cart" ></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/2.jpeg')}}" alt="">
        <div class="des">
            <span>sony</span>
            <h5>lens</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$180</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/3.jpeg')}}" alt="">
        <div class="des">
            <span>sony</span>
            <h5>camera body</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$279</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/4.jpeg')}}" alt="">
        <div class="des">
            <span>sandisk</span>
            <h5>memory card</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$49</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/5.avif')}}" alt="">
        <div class="des">
            <span>ryzen</span>
            <h5>Processor</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$171</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/6.jpeg')}}" alt="">
        <div class="des">
            <span>intel</span>
            <h5>cpu</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$390</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/7.jpeg')}}" alt="">
        <div class="des">
            <span>msi</span>
            <h5>Mother board</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$189</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
        <div class="pro">
            <img src="{{asset('frontend/img/camera/8.jpeg')}}" alt="">
        <div class="des">
            <span>msi</span>
            <h5>cooling fan</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>$120</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart" class="cart"></i></a>
    </div>
</section>


@endsection

@section('scripts')

@endsection

















    

       




