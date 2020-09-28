@extends('layouts.user')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<header class="masthead ">
    <div style="text-align: center;color:white;font-weight:bolder;font-size:22px;margin-top:10px;">CHoose Your Template...</div>
    <?php
        $id=Auth::user()->id;
    ?>
    <div class="row " style="margin-left:5%;margin-right:5%">
        <div class="col-md-3" style="margin-bottom: 5%;margin-top:2%">
            <div class="card" >
                <img class="card-img-top" height="250px;" src="/template1/preview.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Classic CV</h4>
                
                    <a href="/template2/{{$id}}" class="btn btn-primary">Choose Template</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 5%;margin-top:2%">
            <div class="card"  >
                <img class="card-img-top" height="250px;" src="/template/preview.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Modern CV</h4>
                  <a href="/template1/{{$id}}" class="btn btn-primary">Choose Template</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 5%;margin-top:2%">
            <div class="card" >
                <img class="card-img-top" height="250px;" src="/images/cover1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Classic Cover Letter</h4>
                  <a href="/cover1/{{$id}}" class="btn btn-primary">Choose Template</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 5%;margin-top:2%">
            <div class="card">
                <img class="card-img-top" height="250px;" src="/images/cover2.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Modern Cover Letter</h4>
                  <a href="/cover2/{{$id}}" class="btn btn-primary">Choose Template</a>
                </div>
            </div>
        </div>
    </div> 
    <div class="container"><a href="/user-job-seeker/edit/4" class="btn btn-primary float-right">Edit your info</a></div>  
</header>

@endsection



 
