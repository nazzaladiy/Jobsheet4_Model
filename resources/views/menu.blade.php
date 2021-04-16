@extends('layouts.app')

@section('content')
        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Our Menus&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Fila's Cafe</h2>
          <p class="gray-text tm-welcome-description" style="text-align:center">Selamat datang di halaman menu kami, yuk pilih menu favorit kalian untuk menemani hari yang cerah ini.
                                                      Jangan lupa untuk abadikan momen ini dengan hastag <span class="gold-text">#haricerahbersamaFila's</span>
          <a href="{{ url('/informasi2') }}" class="tm-more-button tm-more-button-welcome">Read More</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">  
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Varian Menu lainnya</h2>
            <h2>Filas's Cafe</h2>
            <p class="tm-welcome-description">Untuk varian menu lain, Fila's Lovers bisa klik button dibawah untuk informasi lengkap.
            <a href="{{ url('/varian') }}" class="tm-more-button margin-top-30">Read More</a> 
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Menu Coffee</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu">
                  <ul>
                    <li><a href="{{ url('/menu') }}" class="active">Affogato</a></li>
                    <li><a href="{{ url('/menu') }}">Piccolo</a></li>
                    <li><a href="{{ url('/menu') }}">Caffè latte</a></li>
                    <li><a href="{{ url('/menu') }}">Coffee milk</a></li>
                    <li><a href="{{ url('/menu') }}">Café mocha</a></li>
                    <li><a href="{{ url('/menu') }}">Cappuccino</a></li>
                    <li><a href="{{ url('/menu') }}">Espresso</a></li>
                    <li><a href="{{ url('/menu') }}">Iced coffee</a></li>
                    <li><a href="{{ url('/menu') }}">Cold brew</a></li>
                    <li><a href="{{ url('/menu') }}">Mocha</a></li>
                    <li><a href="{{ url('/menu') }}">Macchiato</a></li>
                  </ul>              
                </nav>    
                <img src="img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
              </div>  
            </div>    
            <div class="tm-menu-product-content col-lg-9 col-md-9"> <!--menu -->
            @foreach($dataMenu as $itemMenu)  
            <div class="tm-product">
                <img src="{{$itemMenu -> featured_image}}" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">{{$itemMenu -> title}}</h3>
                  <p class="tm-product-description">{{$itemMenu -> content}}</p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                </div>
              </div>
              @endforeach
              <!--<div class="tm-product">
                <img src="img/affogato.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Affogato</h3>
                  <p class="tm-product-description">Affogato merupakan minuman kopi dengan satu sendok es krim vanila yang ‘ditenggelamkan’ dengan segelas kecil espresso panas.</p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/piccolo.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Piccolo</h3>
                  <p class="tm-product-description">Picollo menggunakan ristretto, yang merupakan bagian terbaik dari proses ekstraksi espresso karena teksturnya lembut dan kadar asamnya sedikit akibat lamanya proses ekstraksi. </p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>20</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/latte.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Latte</h3>
                  <p class="tm-product-description">Latte adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. Latte biasanya mengandung lebih banyak susu, sehingga kopinya terasa lebih smooth. </p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>15</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/espresso.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Espresso</h3>
                  <p class="tm-product-description">Espresso merupakan saripati dari biji kopi karena merupakan ekstrak biji kopi murni tanpa campuran. Rasanya yang sangat pahit, membuat espresso biasanya disajikan dalam cangkir kecil yang biasa disebut espresso shot.</p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/cold brew.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Cold brew</h3>
                  <p class="tm-product-description">cold brew merupakan metode penyeduhan kopi dengan perendaman selama minimal 8 jam dengan menggunakan air bersuhu ruang ataupun air dingin.</p>
                </div>
                <div class="tm-product-price">
                  <a class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>45</a>
                </div>
              </div>
            </div>
          </div>  -->   
        </section>
      </div>
    </div> 
  
  @endsection