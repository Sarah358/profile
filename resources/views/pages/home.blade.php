@extends('layouts.app')
@section('title')
    home
@endsection

{{-- content section --}}
@section('content')
{{-- home --}}
<section class="home section" id="home">
    <div class="home-container bd-grid" >
        <h1 class="home-title"><span>HE</span><br>LLO.</h1>
        <div class="home-scroll">
        <a href="#about" class="home-scroll-link"><i class='bx bx-up-arrow-alt'></i>Scroll Down</a>
        </div>
        <img src="{{asset('images/img2.png')}}" class="home_img" alt="image">
    </div>
    

</section>
{{-- section about --}}
<section class="about section" id="about">
    <h2 class="section-title">About Me</h2>
    <div class="about-container bd-grid">
        <div class="about-img">
            <img src="{{asset('images/img.png')}}" alt="about-img">
        </div>
        <div>
            <h2 class="about-subtitle">I'm Sarah Njuguna</h2>
            <span class="about-proffesion">Web Designer</span>
            <p class="about-text">Am a passionate web developer with multiple skills in web development.Am 
                profficient with both front-end and back-end.
            </p>
            <div class="about-social">
                <a href="#" class="about-social-icons"><i class='bx bxl-linkedin'></i></a>
                <a href="#" class="about-social-icons"><i class='bx bxl-github' ></i></a>
                <a href="#" class="about-social-icons"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="about-social-icons"><i class='bx bxl-facebook' ></i></a>

            </div>
        </div>

    </div>
    
</section>   

{{-- skills section --}}
<section class="skills section" id="skills">
    <h2 class="section-title">Skills</h2>
    <div class="skills-container bd-grid">
        <div class="skills-box">
            <h3 class="skills-subtitle">Development</h3>
            <span class="skills-name">Html</span>
            <span class="skills-name">Css</span>
            <span class="skills-name">Javascript</span>
            <span class="skills-name">Scss</span>
            <span class="skills-name">php</span>
            <span class="skills-name">Laravel</span>

            <h3 class="skills-subtitle">Design</h3>
            <span class="skills-name">Figma</span>
            <span class="skills-name">Adobe XD</span>
            <span class="skills-name">Photoshop</span>
        </div>
    <div class="skills-img">
        <img src="{{asset('images/download.jpg')}}" alt="">
    </div>
    </div>
</section>

{{-- portfolio section --}}
<section class="portfolio section" id="portfolio">
    <h2 class="section-title">Portfolio</h2>
    <div class="portfolio-container bd-grid">
        <div class="portfolio-img">
            <img src="{{asset('images/work1.jpg')}}" alt="">
            <div class="portfolio-link">
                <a href="#" class="portfolio-link-name">View Details</a>
            </div>
        </div>

        <div class="portfolio-img">
            <img src="{{asset('images/work2.jpg')}}" alt="">
            <div class="portfolio-link">
                <a href="#" class="portfolio-link-name">View Details</a>
            </div>
        </div>

        <div class="portfolio-img">
            <img src="{{asset('images/work5.jpg')}}" alt="">
            <div class="portfolio-link">
                <a href="#" class="portfolio-link-name">View Details</a>
            </div>
        </div>

        <div class="portfolio-img">
            <img src="{{asset('images/work4.jpg')}}" alt="">
            <div class="portfolio-link">
                <a href="#" class="portfolio-link-name">View Details</a>
            </div>
        </div>

    </div>

</section>

{{-- contact section --}}
<section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>
    <div class="contact-container bd-grid">
        <div class="contact-info">
            <h3 class="contact-subtitle">EMAIL</h3>
            <span class="contact-text">njerinjuguna358@gmail.com</span>

            <h3 class="contact-subtitle">PHONENUMBER</h3>
            <span class="contact-text">+254799757242</span>

            <h3 class="contact-subtitle">LOCATION</h3>
            <span class="contact-text">Nairobi</span>
        </div>
        <form method="get" action="" class="contact-form">
            <div class="contact-inputs">
                <input type="text" placeholder="Name" class="contact-input">
                <input type="email" placeholder="Email" class="contact-input">
            </div>
            <textarea name="" id="" cols="30" rows="10" class="contact-input"></textarea>
            <input type="submit" value="SEND" class="contact-button">
            
        </form>

    </div>
</section>

{{-- footer --}}
<section class="footer section">
    <div class="footer-container bd-grid">
        <div class="footer-data">
        <h2 class="footer-title">SARAH </h2>
        <p class="footer-text">
            I'M sarah and this is my personal website.
        </p>
        </div>

        <div class="footer-data">
            <h2 class="footer-title">EXPLORE</h2>
          <ul>
              <li><a href="#home" class="footer-link">Home</a></li>
              <li><a href="#about" class="footer-link">About</a></li>
              <li><a href="#skills" class="footer-link">Skills</a></li>
              <li><a href="#portfolio" class="footer-link">Portfolio</a></li>
              <li><a href="#contact" class="footer-link">Contact</a></li>
              

          </ul>
            </div>

            <div class="footer-data">
                <h2 class="footer-title">FOLLOW</h2>
                <a href="" class="footer-social"><i class='bx bxl-instagram' ></i></a>
                <a href="" class="footer-social"><i class='bx bxl-facebook' ></i></a>
                <a href="" class="footer-social"><i class='bx bxl-twitter' ></i></a>


                </div>

    </div>
</section>


  
@endsection
  