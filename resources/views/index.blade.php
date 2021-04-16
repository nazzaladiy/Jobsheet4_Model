@extends('layouts.app')

@section('content')

<div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Caffe Ortu</h2>
          <p class="gray-text tm-welcome-description" style="text-align:center">Hallo Rek, silahkan pesan menu favorit kalian. Banyak menu disini jangan panik
           dan ada juga promo - promo menarik dari kami.<span class="gold-text"> HAVE A NICE DAY!</span>
          <a href="{{ url('/informasi1') }}" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
            <h2>Fila's Cafe</h2>
            <p class="tm-welcome-description">Weekend emang paling seru nongkrong rame-rame bareng teman, keluarga ataupun doi! Nikmati serunya Weekendmu ditemani dengan aroma sedap kopi  dari @FilaCafe. Semua jenis kopi tersedia dan tentunya makanan pendukung yang enak-enak!<br><br>
              Jangan lupa untuk follow @FilaCafe untuk selalu dapetin info promo menarik lainnya juga yah. Yuk, langsung aja cek aplikasi Grabfood atau Gofood kamu untuk tahu lokasi terdekatmu ya!</p>
            <a href="#" class="tm-more-button margin-top-30">Read More</a> 
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
          
           @foreach($dataIndex as $itemIndex)
            <div class="tm-popular-item">
              <img src="{{$itemIndex -> featured_image}}" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>{{$itemIndex -> title}}</h3><hr class="tm-popular-item-hr">
                <p>{{$itemIndex -> content}}<br><br><br></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            @endforeach
            <!--<div class="tm-popular-item">
              <img src="img/cappucino.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">c</span>appuccino</h3><hr class="tm-popular-item-hr">
                <p>Cappucino merupakan minuman panas pilihan untuk orang yang berhati hangat dan dapat dengan mudah melupakan sesuatu. Jika Tasyters menyukai minuman ini, berarti kamu membutuhkan seorang teman untuk bisa melihat sesuatu dengan logis dan tidak melibatkan perasaan lagi.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="img/mocha.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">m</span>ocha</h3><hr class="tm-popular-item-hr">
                <p>Taysters penikmat kopi Mocha berarti kamu orang yang menyenangkan, tipikal orang yang mencintai dengan baik dan penuh kreativitas.<br><br><br><br><br></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          </div>          
        </section> -->
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Today's Special</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="img/kopi.jpg" alt="Special" class="tm-special-img img-responsive">  
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">Cinta, Kopi & Kesempurnaan</h3>
                      <p>Kopi sempurna karena rasa pahitnya. Demikian pula cinta.</p>  
                    </div>            
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/hidup.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">Kurang Gula</h3>
                        <p>Jika hidupmu terasa pahit, berarti kopimu kurang gula.</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/bunga.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Stay happy</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/bunga2.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Stay healthy</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>              
            </div>
          </div>
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Daily Menu</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8">
              <p>Promo Tahun baru Caffe Ortu dengan harga spesial mulai dari Rp. 5.000,-<br><br>
                Dab masih banyak menu yang lain seperti : Spagheti Agilio-lio, Cireng, Batagor, French Fries . Pokoknya dateng aja deh ke Caffe Ortu Suhat Malang<br><br>
                Syarat & Ketentuan:</p>
                <ol class="margin-top-30">
                  <li>Promo berlaku mulai 20 Maret 2021 mulai pukul 10.00 s.d 17.00.</li> 
                  <li>Promo hanya berlaku Dine In, Take Away </li> 
                  <li>Tidak berlaku untuk Delivery dan pemesanan via aplikasi online.</li> 
                  <li>Harga belum termasuk pajak.</li> 
                </ol><br>
                <p>Jika Kalian membutuhkan informasi lebih terkait daftar menu yang tersedia di Caffe Ortu  Bisa
                langsung cek aja di bawah ini yang arek Malang harus dateng nongki sama temen-temenmu pasti asik banget dong!</p>
                </ol>
                <a href="#" class="tm-more-button margin-top-30">Read More</a>    
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div> 

@endsection