@extends('layouts.app')

@section('content')

        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Today's Special&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Caffe Ortu</h2>
          <p class="gray-text tm-welcome-description" style="align-text:center">Arek malang sinio ke Caffe Ortu ada promo besar-besaran dan cashback bagi pengguna shopee pay lohh
                                                      minggu ini, yang lebih spesial lagi untuk menu recommended dari Caffe Ortu ada diskon 20% dari harga normal.<a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
          @foreach($data as $item)
            <div class="tm-popular-item">
              <img src="{{$item -> featured_image}}" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>{{$item -> title}}</h3><hr class="tm-popular-item-hr">
                <p>{{$item -> content}}</br></br></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          @endforeach
            <!--<div class="tm-popular-item">
              <img src="img/latte.jpg" alt="Popular" class="tm-popular-item-img">
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
            <div class="tm-popular-item">
              <img src="img/frapuccino.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">f</span>rapuccino</h3><hr class="tm-popular-item-hr">
                <p>Frappucino itu melambangkan kebahagiaan dan energi setiap orang. Pilihan ini sesuai untuk Taysters yang selalu bersemangat setiap harinya. Biasanya orang yang minum frappucino bukanlah pecinta coffee, ia lebih menyukai krim dan gula yang terdapat dalam racikan ini.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="img/ice.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">i</span>ced Coffee</h3><hr class="tm-popular-item-hr">
                <p>Ice coffee sangat cocok untuk orang yang menyukai minuman favorit di dunia ini tapi tidak memiliki waktu untuk mendinginkannya. Apabila Taysters menyukai minuman ini, itu tandanya kamu orang yang sibuk, vokal dan tegas.<br><br></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="img/macchiato.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">m</span>acchiato</h3><hr class="tm-popular-item-hr">
                <p>Minuman hasil seduhan jenis ini memiliki rasa yang seimbang tanpa perlu khawatir dengan busa di atasnya. Meminum macchiato sama saja melambangkan bahwa kamu adalah orang yang berkelas tinggi.<br><br><br></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          </div>  -->     
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
                <a href="{{ url('/menu') }}" class="tm-more-button margin-top-30">Read More</a>    
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div> 
   
 @endsection