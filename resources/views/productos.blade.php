@extends('layouts.fronted.productos')
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
                <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
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
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
<div class="container mt-5 mb-5">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img  class="pic-1" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
                        <!--<img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000">-->
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                    </ul>
                    <span class="product-discount-label">{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
                </div>
                <div class="product-content">
                    <div class="price">{{$producto->name}}</div>
                    <!--<<span class="product-shipping">Free Shipping</span>-->
                    <h3 class="title"><a href="{{ route('searchCategory' ,$producto->categoria->name)}}">{{$producto->categoria->name}}</a></h3>
                    <a class="all-deals" href="{{route('product-details', $producto->slug)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$productos->links()}}
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/Logo-Higienika_office_peru_div.png')}}" alt="">
    <p>Somos una empresa peruana que se dedica a la distribución y abastecimiento de artículos de oficina, escritorio, higiene, aseo, cafetería, entre otros. Nuestro principal objetivo es abastecer a las empresas de artículos no estratégicos facilitando su proceso de compras.</p>
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