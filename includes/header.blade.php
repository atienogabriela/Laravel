{{-- small nav bar here --}}
<div class="top_nav bg-mix">
    <div class="left">
    <div class="ometlogo img" >
        <p onclick="goHome()"><span></span>Omet</p>
    </div>
      {{-- <div class="search_bar">
          <input type="text" placeholder="Search">
      </div> --}}
  </div> 
  <div class="right">
    <span class="d-flex">
      <a href="{{route('signin')}}">LogIn</a>
      <span class="hidden">.............</span>
     <a href="{{route('signup')}}">SignUp</a>
  </span>
  </div>
</div>
