@extends('layouts.app')

@section('content')

</br>
</br>
</br>
</br>
</br>
<section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Varian Menu Lainnya</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu">
                  <ul>
                    <li><a href="{{ url('/varian') }}" class="active">Cireng</a></li>
                    <li><a href="{{ url('/varian') }}">Batagor</a></li>
                    <li><a href="{{ url('/varian') }}">Siomay</a></li>  
                    <li><a href="{{ url('/varian') }}">Tahu Bakso</a></li>
                    <li><a href="{{ url('/varian') }}">Mie Goreng</a></li>
                    <li><a href="{{ url('/varian') }}">Mie Kuah</a></li>
                    <li><a href="{{ url('/varian') }}">Kopi Hitam</a></li>
                    <li><a href="{{ url('/varian') }}">Kopi Ortu</a></li>
                    <li><a href="{{ url('/varian') }}">Greentea</a></li>
                    <li><a href="{{ url('/varian') }}">French Fries</a></li>
                    <li><a href="{{ url('/varian') }}">Cappucino</a></li>
                  </ul>              
                </nav>    
                <img src="img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
              </div>  
            </div>            
            <div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->
              <div class="tm-product">
                <img src="img/potato.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Potato gratin</h3>
                  <p class="tm-product-description">Potato Gratin (Gratin Dauphinois) adalah side dish asal Prancis yang memadukan kentang, susu, dan keju. Rasanya gurih dengan sensasi lembut di lidah. Mantap!</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/pasta.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Pasta marinara</h3>
                  <p class="tm-product-description">Marinara banyak digunakan sebagai saus dasar pizza. Warna merahnya didapat dari tomat asli yang dimasak bersama bawang bombay dan minyak zaitun. Saus marinara biasanya dipadukan dengan topping sea food pada pasta.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>20</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/ayam.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Roasted Herbs Chicken</h3>
                  <p class="tm-product-description">Paduan herbal alami dan wangi bawang yang khas, disatukan dalam ayam yang dipanggang dengan sepenuh hati. Paduan yang sempurna untuk memanjakan lidah para penjelajah rasa.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>15</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/pizza.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Pizza</h3>
                  <p class="tm-product-description">Pizza adalah sejenis roti bundar dan pipih. Merupakan hidangan gurih dari Italia yang dipanggang dioven dalam oven tradisional dengan bara api. Di atasnya biasanya dilumuri saus tomat serta keju mozzarella dengan bahan makanan tambahan lainnya yang bisa dipilih. </p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="img/bola.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Bola - Bola Ubi Manis</h3>
                  <p class="tm-product-description">Yang paling menarik adalah tampilannya warna-warni. Ada tiga jenis ubi yang dikemas dalam satu porsi, yaitu ubi merah, ubi ungu, dan ubi jalar yang dicampurkan pandan untuk membuatnya berwarna hijau.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>45</a>
                </div>
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div> 

@endsection