@extends('includes.simple')

@section('content')
   <div class="row bg-white">
    <h4>Image Here</h4>
        <div class="col-md-4 container">
            {{-- Add an image here (item1.jpg) --}} 

            <img src="assets/images/item1.jpg" alt="gabby"> 
            
        </div>
   </div>
    <div class="container" style="margin-top:5%;display:none">
       <div class="card">
            <input class="form-control" placeholder="0" type="number">
       </div>
       <div class="row text-white" style="margin-top:1%">
           <div class="col bg-danger" style="margin:0.5%">Rad</div>
           <div class="col bg-success" style="margin:0.5%">Deg</div>
           <div class="col bg-primary" style="margin:0.5%">3</div>
           <div class="col bg-dark" style="margin:0.5%">4</div>
           <div class="col bg-secondary" style="margin:0.5%">5</div>
           <div class="col bg-warning" style="margin:0.5%">6</div>
           <div class="col bg-info" style="margin:0.5%;border-radius: 50%">7</div>
       </div>
    </div>
    {{-- <div class="container bg-white">
        <table class="table bordered">
            <thead class=" h5">
                <th>Publisher Name</th>
                <th> Author</th>
                <th>Content</th>
            </thead>
            <tbody>
                @foreach ($articles as $key=> $article )
                    <tr class="text-primary">
                        <td>{{$article['source']['name']}}</td>
                        <td>{{$article['author']}}</td>
                        <td>
                            <div class="jumbotron">{{$article['content']}}</div>
                        </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div> --}}
    
@endsection



