
    @php
      $carousels = ['prop','prop1','prop2','prop3','prop4','prop5','prop6','prop7','prop8','prop9','prop10','prop11','prop12'];
    @endphp
  <div class="slideshow-container">
    @foreach ( $carousels as $key => $carousel )
      <div class="mySlides fade container">
        <img src="{{asset('assets/images/'.$carousel.'.jpg')}}" style="width:85%;height:530px">
      </div>
    @endforeach
   
    
    {{-- <div class="mySlides fade">
      <img src="{{asset('assets/images/prop1.jpg')}}"style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="{{asset('assets/images/prop2.jpg')}}" style="width:100%">
    </div> --}}
    
    </div>
    <br>
    
    <div style="text-align:center">
      @foreach ( $carousels as $key => $carousel )
      <span class="dot"></span> 
      @endforeach
    </div>