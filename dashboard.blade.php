@extends('includes.app')
{{-- @extends('includes.slider') --}}
@include('includes.bar')
@section('content')
    @include('includes.slider')
  {{-- marquee --}}
    <div id="m2" class="marqueefy ">
      <h3 class="text-white p-2">
        <marquee direction="left" style="">REPENT MESSIAH IS COMING!!! PREPARE IN HOLINESS AND RIGHTEOUSNESS!!!</marquee>
      </h3>
    </div>
    <div class="footer">
      <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
      </p>
    </div>
  {{-- end of marquee --}}
  
@endsection
    
  @section('script')
    <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
</script>
  @endsection
    
    
  