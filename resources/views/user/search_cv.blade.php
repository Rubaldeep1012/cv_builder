@extends('layouts.user')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .hr{
        height: 2px;
        width: 100%;
        background-color: #f4623a;
    }
    label
    {
        color: white;
    }
        .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
</style>
    <header class="masthead">
    <div   class="w3-container container city active" style="display:block;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
        <div style="text-align: center;font-weight:bolder;color:white;  ">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm" id="searchCv">
                        <div class=" row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" id="search" type="search" placeholder="Search CV by skill">
                                </div>
                                <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">Search</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
        </div>
        <div id="list">
            <div class="card mt-4" style="height:100px;margin-left:190px;margin-right:190px;">
                <h3 class="text-center mt-4">Search according to the skill that you required</h3>
            </div>
        </div>
    </div>
</header>
    <script>
        var id = window.location.href.split('/').pop();
        $('#searchCv').on('submit', function (e) {
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/employer/search',
              data:{
                    'search'           : document.getElementById("search").value,        
                    "_token"           : "{{ csrf_token() }}",
                      },
                      success: function (data) {
                        $('#list').html(data);
                      }
                    });
              });   

        
    </script>
@endsection