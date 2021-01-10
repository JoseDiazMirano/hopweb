@extends('layouts.fronted.contact')
@section('redes')
<div class="red">
    <div id="facebook"><a target="none" href="https://www.facebook.com/Higienika-Office-105736217852828" class="fab fa-facebook-f "></a></div>
    <div id="instagram"><a target="none"  href="https://www.instagram.com/higienikaofficepe/" class="fab fa-instagram"></a></div>
    <div id="twiter"><a target="none" href="" class="fab fa-twitter-square"></a></div>
    <div id="whatsaap"><a target="none" href="https://api.whatsapp.com/send?phone=51936201274&text=" class="fab fa-whatsapp"></a></div>
    <div id="linkeding"><a target="none" href="https://www.linkedin.com/in/higienikaperu/" class="fab fa-linkedin"></a></div>
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
        <img  class="imgtamaño" src="{{ asset('img/Logo-Higienika_office_peru_div.png')}}" alt="Logo Higienika Oficce Perú">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
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
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>-->  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con nuestro servicio</p>
                    <!--<a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Multiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a 
                    nuestros clientes para que puedan realizar su compra o 
                    recoger sus productos.   
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>AV. ANDRES TINOCO MZA. C3 LOTE. 26 URB. PROLONG.BENAVIDES </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>9362 – 01274</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>ventas@higienikaoffice.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/Higienika-Office-105736217852828" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/higienikaofficepe/" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/higienikaperu/" target="none">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">COMUNÍCATE CON NOSOTROS</h3>
                <div class="input-container ">
                    <input type="text" name="name" class="contact_input" placeholder="NOMBRE">
                </div>
                <div class="input-container">
                    <input type="text" name="email" class="contact_input" placeholder="EMAIL">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="CELULAR">
                </div>
                <div class="input-container">
                    <textarea name="mensaje" class="contact_input" id="" placeholder="MENSAJE"></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="contact_btn">
            </form>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/Logo-Higienika_office_peru_div.png')}}" alt="">
    <p>Somos una empresa peruana que se dedica a la distribución y abastecimiento de artículos de oficina, escritorio,
        higiene, aseo, cafetería, entre otros.Nuestro principal objetivo es abastecer a las empresas de artículos no 
        estratégicos facilitando su proceso de compras.</p>
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
            <h2>Information</h2>
            <ul class="box">
                <li><a href="#">Politicas de Privacidad</a></li>
                <li><a href="#">Uso de cookies</a></li>
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
