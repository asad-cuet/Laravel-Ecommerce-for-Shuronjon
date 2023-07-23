@extends('layouts.frontend2')                                     <!-- showing main component  -->
   
@section('title')
Home
@endsection
@section('meta')
<style>
    
</style>
@endsection


@section('content')

<section id="page-header" class="shop-header">
    <div> <h2>Get What You Need,Every Thing Is Here</h2></div>
    <div> <p> Save More With Coupons & Save Up To 70% off!</p></div>
 </section>
  <div class="searchbox">
     <form action="active">
         <input type="text" placeholder="Search What you need">
         <button class="fas fa-search fa-2x"><a href="#"></a></button>
     </form>
  </div>
 
    
 </section>
 
        
 <section id="product1" class="section-p1">
     
     <div class="pro-container">
         <div class="pro">
             <img src="{{asset('frontend/img/robotics/r1.jpg')}}" >
         <div class="des">
             <span>Arduino</span>
             <h5><a href="sproduct.html">Microcontrollers</a>
             </h5>
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
             <img src="{{asset('frontend/img/robotics/r2.jpeg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r3.jpg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r4.jpeg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r5.jpeg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r6.jpg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r7.jpeg')}}" alt="">
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
             <img src="{{asset('frontend/img/robotics/r8.jpg')}}" alt="">
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
     <section id="pagination" class="section-p1">
         <a href="#">1</a>
         <a href="#">2</a>
         <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
     </section>
 
@endsection

@section('scripts')

@endsection

