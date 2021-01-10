@extends('layouts.fronted.product-details')
@section('redes')
<div class="red">
    <div id="facebook"><a href="https://www.facebook.com/Higienika-Office-105736217852828" target="none" class="fab fa-facebook-f "></a></div>
    <div id="instagram"><a href="https://www.instagram.com/higienikaofficepe/" target="none" class="fab fa-instagram"></a></div>
    <div id="twiter"><a href="" target="none" class="fab fa-twitter-square"></a></div>
    <div id="whatsaap"><a href="https://api.whatsapp.com/send?phone=51936201274&text=" target="none" class="fab fa-whatsapp"></a></div>
    <div id="linkeding"><a href="https://www.linkedin.com/in/higienikaperu/" target="none" class="fab fa-linkedin"></a></div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                +51 9362-01274
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                ventas@higienikaoffice.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <img  class="imgtamaño" src="{{ asset('img/Logo-Higienika_office_peru_div.png')}}" alt="User Avatar">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>HIGIENIKA <span>OFFICE</span></h4>
					    <br><br>
                        <h1 class="tipeo1">DESCRIPCIÓN:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<main class="container_product">
    <div class="left-column">
        <img data-image="red" class="active" src="{{asset('/img/productos/'.$producto->image)}}">
    </div>
    <!-- Right Column -->
    <div class="right-column">
    <!-- Product Description -->
    <div class="product-description">
        <span>{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
        <h1>{{$producto->name}}</h1>
        <p>{{$producto->extract}}</p>
    </div>

    <!-- Product Configuration -->
    <div class="product-configuration">
        <!-- Cable Configuration -->
        <div class="cable-config">
            <span>Categoría: </span><br>
                <div class="cable-choose">
                    <button>
                        <a href="{{ route('searchCategory' , $producto->categoria->slug)}}">
                            {{$producto->categoria->name}}
                        </a>
                    </button>
                </div>
        </div>
    </div>

    <!-- Product Pricing -->
    <div class="product-price">
        <span>S/{{$producto->price}}</span>
            <a target="none" href="https://wa.me/51936201274?text=Hola%2CHigienika+Oficce+Perú%3A%0D%0AEstoy+interesad%40+en+el+Producto%3A+{{$producto->name}}" class="cart-btn">
            Consultar
            </a>
    </div>
  </div>
</main><br><br>
<div class="container">
<div class="media">
    <img width="100" height="100"  src="{{asset('/img/productos/'.$producto->image)}}" class="align-self-start mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Descripción:</h5>
      <p>{{$producto->descriptions}}</p>
    </div>
  </div>
</div>
@endsection 

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/Logo-Higienika_office_peru_div.png')}}" alt="">
    <p>Somos una empresa peruana que se dedica a la distribución y abastecimiento de artículos de oficina, escritorio,
        higiene, aseo, cafetería, entre otros. Nuestro principal objetivo es abastecer a las empresas de artículos no estratégicos facilitando su proceso de compras.
        </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/Higienika-Office-105736217852828">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.instagram.com/higienikaofficepe/">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="https://www.linkedin.com/in/higienikaperu/">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li>
            <h2>Libro De Reclamaciones</h2>
            <ul class="box">
                <!--<li class="lbr-rec"><a href="https://www.facebook.com/Higienika-Office-105736217852828"><i class="fas fa-5x  fa-book-open"></i></a></li>-->
                </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by ©Higienika Office Perú-2020 </p>
        </div>
</footer>
@endsection