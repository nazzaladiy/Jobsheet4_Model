@extends('layouts.app')

@section('content')

<div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Tentang Kami&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Caffe Ortu</h2>
          <p class="gray-text tm-welcome-description" style="text-align:center"> Caffe Ortu adalah salah satu cafe di Malang yang menyediakan berbagai macam <span class="gold-text"> minuman dan makanan </span> dengan gaya pelayanan kekinian,
                                                                                 selain itu Fila's Cafe juga menyediakan minumam non-kopi bagi para pengunjungnya yang anti dengan kopi.Cafe Ortu sendiri terkenal dengan cafe yang memiliki desain gedung cukup kuno tapi modern dong, sehingga tidak sedikit para pengunjung berbondong - berbondong
                                                                                 mendatangi Cafe Ortu untuk mengabadikan momen terlebih di kala malam hari.</p>
          <a href="{{ url('/informasi1') }}" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    </br>
    </br>
    </br>
    </br>
    <div class="tm-popular-item">
              <img src="img/about/cafe6.jpg" alt="Popular" class="kiri" float="left" margin="10px" max-width="100%" display="block" height="auto">
                </div>
              </div>              
            </div>
            <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> All About Caffe Ortu</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8"> 
                <p> <span class="white-text"><b>Keberhasilanmu bukan terkait nominal tapi terkait kapasitas senangmu di setiap harinya.</b></span></p>
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div>

@endsection                                                              
