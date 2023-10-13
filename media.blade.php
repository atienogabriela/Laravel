@extends('includes.app')
@section('content')
{{-- @include('includes.bar') --}}
 {{-- @php
  $media = ['facebook','Youtube','Twitter','Instagram','Tiktok','Telegram'];
@endphp  --}}
<div class="row">
  @foreach ($medias as $key => $media)
    <div class="col-md-4" >
      <header>
          <h4>{{$key+1 }}.{{$media->title}}</h4>
      </header>    
      <a href="{{$media->page_link}}"><img src="{{ asset($media->avatar_link) }}" class="image-size"></a>

      <div class="content p-1">
        <button type="button" class="btn btn-primary btn-rounded btn-lg" onclick="addFollowers('{{$media->title}}_followers')"><i class="fa fa-user-plus"></i>
        </button>
           <span class="hidden">....</span>
        <button type="button" class="btn btn-danger btn-rounded btn-lg" onclick="updateSubscribe('{{$media->title}}_subscribers')"><i class="fa fa-bell"></i>
        </button>
          <span class="hidden">....</span>
        <button type="button" class="btn btn-success btn-rounded btn-lg" onclick="addFollowing('{{$media->title}}_following')">
          FOLLOWING
        </button>
      </div>
      <div class="d-flex justify-content-between text-center mt-5 mb-2">
        <div>
          <p class="mb-2 h5" id="{{$media->title}}_followers">{{$media->followers}}</p>
          <p class="text-muted mb-0">FOLLOWERS</p>
        </div>
        <div class="px-3" >
          <p class="mb-2 h5" id="{{$media->title}}_following">0</p>
          <p class="text-muted mb-0">FOLLOWING</p>
        </div>
        <div>
          <p class="mb-2 h5" id="{{$media->title}}_subscribers">0</p>
          <p class="text-muted mb-0">SUBSCRIBERS</p>
        </div>
      </div>
    </div>
    
    @endforeach

</div> 

<div class="footer">
  <p>
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  </p>
</div>
@endsection


@section('script')
<script>
  var subscribers_count = 0;
  var following_count = 0;
  var followers_count = 0;

//Subscribe
  function updateSubscribe(card_name){
   var subscribers_count = $('#'+card_name).html();
   subscribers_count = parseInt(subscribers_count);
    $('#'+card_name).html(subscribers_count+1);
  }
  //Followers
  function addFollowers(card_name){
   var followers_count = $('#'+card_name).html();
   followers_count = parseInt(followers_count);
    $('#'+card_name).html(followers_count+1);
  }
 //Following
  function addFollowing(card_name){
   var following_count = $('#'+card_name).html();
   following_count = parseInt(following_count);
    $('#'+card_name).html(following_count+1);
  }
   
</script>
@endsection