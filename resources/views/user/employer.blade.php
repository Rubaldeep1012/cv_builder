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
    form{
        margin-top: 30px;
    }
    label
    {
        color: white;
    }
</style>
<header class="masthead">
   
        <div style="text-align: center;font-weight:bolder;color:white;font-size:20px;padding-bottom:20px;margin-top:20px;">Fill Your Company Detail</div>

   
        <div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
            <div   class="w3-container container city active" style="display:block;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
                <form id="companyInfo">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Company Name</label>
                            <input type="text" class="form-control" required id="title" placeholder="john Doe Company">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputCity">Address</label>
                            <input type="text" class="form-control" required id="address" placeholder="46 Cubbine Road,MUNTADGIN,Western Australia,6420">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputPassword4">Summary</label>
                          <textarea name="" id="summary" cols="30" rows="4" required class="form-control"></textarea>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div> 
          
        </div> 
</header>
    <script>
        var id = window.location.href.split('/').pop();
        $('#companyInfo').on('submit', function (e) {
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/user/company/'+id,
              data:{
                    'address'          : document.getElementById("address").value,        
                    'title'            :  document.getElementById("title").value,         
                    'description'      :  document.getElementById("summary").value,         
                    "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Company information is added.",
                            icon: "success",
                            });
                            let tID = setTimeout(function () {
                                window.location.href = "https://www.encodedna.com/javascript/operators/default.htm";
                                window.clearTimeout(tID);		// clear time out.
                            }, 5000);
                      }
                    });
              });   

        
    </script>
@endsection



 
