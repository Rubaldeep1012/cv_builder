@extends('layouts.user')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .w3-bottombar {
      width: 16.3%;
    }
    .w3-third:hover {
      background-color:#f4623a;
      color:white;
    }
    .tablinks{
        color:white;
        text-align: center;
         font-size:15px;
    }
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
   
        <div style="text-align: center;font-weight:bolder;color:white;font-size:20px;padding-bottom:20px;">Fill detail to make CV</div>

   
        <div class="container-fluid" style="font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
            <div class="container tabss" style="font-family: 'Quicksand', Georgia, 'Times New Roman',Times, serif;">
                <a href="javascript:void(0)" class="tablinks active" onclick="selectTab(event, 'personal');">
                    <div class="w3-third tablink w3-bottombar w3-padding" type="button" ><b>Personal Info</b></div>
                </a>
                <a href="javascript:void(0)" class="tablinks active" onclick="selectTab(event, 'experience');">
                  <div class="w3-third tablink w3-bottombar w3-padding" type="button" ><b>Experience</b></div>
              </a>
                <a href="javascript:void(0)" class="tablinks" onclick="selectTab(event, 'education');">
                    <div class="w3-third tablink w3-bottombar w3-padding" type="button"><b>Education</b></div>
                </a>
                <a href="javascript:void(0)" class="tablinks" onclick="selectTab(event, 'skill');">
                    <div class="w3-third tablink w3-bottombar w3-padding" type="button"><b>Skill And Interest</b></div>
                </a>
                
                <a href="javascript:void(0)" class="tablinks" onclick="selectTab(event, 'Certification');">
                    <div class="w3-third tablink w3-bottombar w3-padding" type="button"  ><b>Certification</b></div>
                </a>

                <a href="javascript:void(0)" class="tablinks" onclick="selectTab(event, 'cover');">
                  <div class="w3-third tablink w3-bottombar w3-padding" type="button"  ><b>Cover Info</b></div>
              </a>
            </div>
            
            <div id="personal" class="w3-container container city active" style="display:block;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
                <form id="personalInfo">
                    <div class="form-row">
                       <div class="form-group col-md-4">
                            <label for="inputAddress">For The Post Of</label>
                            <input type="text"

                            @if(!$users->UserPersonalInfo->isEmpty()) 
                              value="{{$users->UserPersonalInfo[0]->post}}"
                            @endif 
                            class="form-control" required name="post" id="post" placeholder="Software Engineer">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" 
                            @if(!$users->UserPersonalInfo->isEmpty()) 
                              value="{{$users->UserPersonalInfo[0]->address}}" 
                            @endif
                            required name="address" id="address" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCity">City</label>
                            <input type="text"
                            @if(!$users->UserPersonalInfo->isEmpty()) 
                              value="{{$users->UserPersonalInfo[0]->city}}" 
                            @endif  
                              class="form-control" required name="city" id="city">
                        </div>
                    </div>
                    <div class="form-row">
                       
                      <div class="form-group col-md-5">
                        <label for="inputState">State</label>
                        <select id="state" name="state" required class="form-control">
                          <option value="" selected>Choose...</option>
                          <option value="New South Wales">New South Wales</option>
                          <option value="Queensland">Queensland</option>
                          <option value="South Australia">South Australia</option>
                          <option value="Western Australia">Western Australia</option>
                          <option value="Tasmania">Tasmania</option>
                          <option value="Victoria">Victoria</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="zip">Zip</label>
                        <input type="text" 
                        @if(!$users->UserPersonalInfo->isEmpty()) 
                          value="{{$users->UserPersonalInfo[0]->zip}}" 
                        @endif  
                          required class="form-control" name="zipcode" id="zipcode">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Martial Status</label>
                        <select id="marital" name="marital" required class="form-control">
                          <option value="married" selected>Married</option>
                          <option value="unmarried">Unmarried</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="inputPassword4">Head Summary</label>
                          <textarea name="" name="summary" id="summary" cols="30" rows="2" required class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Profile Photo</label>
                          <input type="file" required name="profile" id="profile" class="form-control">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div> 
            <div id="experience" class="w3-container container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
              <form id="experienceForm">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" class="form-control" 
                    @if(!$users->experience->isEmpty()) 
                    value="{{$users->experience[0]->name}}" 
                    @endif
                    id="company_name" required placeholder="Company Name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Desigination</label>
                    <input type="text" 
                    @if(!$users->experience->isEmpty()) 
                      value="{{$users->experience[0]->desigination}}" 
                    @endif
                    class="form-control" required id="company_desigination" placeholder="Desigination">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Location</label>
                    <input type="text" 
                    @if(!$users->experience->isEmpty()) 
                      value="{{$users->experience[0]->location}}" 
                    @endif
                    class="form-control" required id="company_location" placeholder="Location">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Starting Date</label>
                    <input type="date" required class="form-control" id="jobSDate" max="2020-08-01">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">End Date</label>
                    <input type="date" class="form-control" id="jobCDate" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Description About Experience</label>
                    <textarea name="" required id="company_description" cols="30" rows="2" required class="form-control"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <h5 style="color: white">Delete the experience that you wants to delete</h5>
              <nav aria-label="Page navigation example ">
                <ul class="pagination ">
                  @if(!$users->experience->isEmpty()) 
                    @foreach ($users->experience as $key=>$exp)
                      <li class="page-item"><a class="page-link" href="#" onclick="deleteExp({{$exp->id}})">{{$key+1}}</a></li>
                    @endforeach
                  @endif
                </ul>
              </nav>
            </div>
            <div id="education" class="w3-container container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">
               
                <form id="gradEdu">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Grduation Course</label>
                        <input type="text"
                        @if(!$users->education->isEmpty()) 
                        value="{{$users->education[0]->course}}"
                        @endif
                        required
                        class="form-control" id="course" placeholder="Course">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">College/University</label>
                        <input type="text"
                        required
                        @if(!$users->education->isEmpty()) 
                        value="{{$users->education[0]->college}}"
                        @endif
                        class="form-control" id="college" placeholder="College Name">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputAddress">Location</label>
                        <input type="text" class="form-control"
                        required 
                        @if(!$users->education->isEmpty()) 
                        value="{{$users->education[0]->location}}"
                        @endif
                        id="location" placeholder="College Location">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Starting Date</label>
                        <input type="date" required class="form-control" id="sDate"  >
                        <input type="hidden" class="form-control" max="2020-01-01" value="1" id="education_type"  >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Completion Date</label>
                        <input type="date"   required class="form-control" id="cDate" >
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                   
                  <form id="postEdu">
                    <div class="form-row" >
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Post Graduation Course</label>
                        <input type="text" 
                        required
                        @if(!$users->education->isEmpty()) 
                        @if($users->education->count()==2) 
                        value="{{$users->education[1]->course}}"
                        @endif
                        @endif
                       class="form-control" id="p_course" placeholder="Course">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">College/University</label>
                        <input type="text" 
                        required
                        @if(!$users->education->isEmpty()) 
                        @if($users->education->count()==2) 
                        value="{{$users->education[1]->college}}" 
                        @endif
                        @endif
                        class="form-control" id="p_college" placeholder="College Name">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputAddress">Location</label>
                        <input type="text" 
                        required
                        @if(!$users->education->isEmpty()) 
                        @if($users->education->count()==2) 
                        value="{{$users->education[1]->location}}"
                        @endif
                        @endif
                        class="form-control" id="p_location" placeholder="College Location">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Starting Date</label>
                        <input type="date" required class="form-control" max="2020-01-01" id="p_sDate"  >
                      </div>
                      <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" value="2" id="p_education_type"  >
                        <label for="inputAddress">Completion Date</label>
                        <input type="date" required class="form-control" id="p_cDate" >
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div id="skill" class="w3-container container city " style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;"> 
              <br>
              <button class="add_field_button btn btn-light">Add More skills</button> 
              <form id="skillForm">
                <div class="form-row input_fields_wrap">
                  @if(!$users->skill->isEmpty())
                    @foreach ($users->skill as $skill)
                      <div class="form-group col-md-4">
                      <div><input type="text" value="{{$skill->title}}" name="skill[]" placeholder="Enter Skill" required class="form-control"></div><br>
                          <select  class="form-control" name="level[]" required>
                            <option>Begginer</option>
                            <option>Intermediate</option>
                            <option>Expert</option>
                          </select>
                      </div> 
                    @endforeach
                  @else
                    <div class="form-group col-md-4">
                      <div><input type="text" name="skill[]" placeholder="Enter Skill" required class="form-control">
                      </div><br>
                          <select  class="form-control" name="level[]" required>
                            <option>Begginer</option>
                            <option>Intermediate</option>
                            <option>Expert</option>
                          </select>
                    </div>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </form><hr>
              <button class="add_interest_button btn btn-light">Add More Interest </button> 
                <form id="interestForm">
                  <div class="form-row interest_fields_wrap">
                   @if(!$users->interest->isEmpty())
                    @foreach ($users->interest as $interest)
                      <div class="form-group col-md-4">
                      <div><input type="text" value="{{$interest->title}}" name="interest[]" placeholder="Enter Your Interest" required class="form-control"></div>
                      </div> 
                    @endforeach
                  @else
                    <div class="form-group col-md-4">
                      <div><input type="text" name="interest[]" placeholder="Enter Your Interest" required class="form-control"></div>
                    </div> 
                  @endif

                  </div>
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form> 
            </div> 
            <div id="Certification" class="w3-container container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">  
              <br>
              <button class="add_certificate_button btn btn-light">Add More Certificates</button>
              <form id="certificateForm">
                <div class="form-row certificate_fields_wrap">
                  @if(!$users->certification->isEmpty())
                    @foreach ($users->certification as $cer)
                      <div class="form-group col-md-4">
                      <div><input type="text" value="{{$cer->title}}"  name="certificate[]" placeholder="Enter Certificate Name" required class="form-control"></div><br>
                        <label for="" >Valid Till</label>
                        <div><input type="date" name="validDate[]" required class="form-control"></div>
                      </div> 
                    @endforeach
                  @else 
                    <div class="form-group col-md-4">
                      <div><input type="text"  name="certificate[]" placeholder="Enter Certificate Name" required class="form-control"></div><br>
                        <label for="" >Valid Till</label>
                        <div><input type="date" name="validDate[]" required class="form-control"></div>
                    </div>
                  @endif
                   
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </form>
             
            </div>
            <div id="cover" class="w3-container container city" style="display:none;font-family: 'Quicksand', Georgia, 'Times New Roman', Times, serif;">  
              <br>
              <form id="coverForm">
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" required
                    @if(!$users->cover->isEmpty()) 
                      value="{{$users->cover[0]->company_name}}"
                    @endif
                    class="form-control" id="cover_name" placeholder="Company Name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputPassword4">Company Location</label>
                    <input type="text" required
                    @if(!$users->cover->isEmpty()) 
                      value="{{$users->cover[0]->company_address}}"
                    @endif
                    class="form-control" id="cover_address" placeholder="Company Location">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputAddress">Receiver Name</label>
                    <input type="text" required 
                    @if(!$users->cover->isEmpty()) 
                      value="{{$users->cover[0]->receiver_name}}"
                    @endif
                    class="form-control" id="cover_receiver_name" placeholder="Receiver Name">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputAddress">Receiver Desigination</label>
                  <input type="text" required
                  @if(!$users->cover->isEmpty()) 
                  value="{{$users->cover[0]->receiver_desigination}}"
                  @endif
                  class="form-control" id="cover_desigination" placeholder="Receiver Desigination">
                </div>
              </div>
               
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Body Of Cover Letter</label>
                    <textarea name="" id="cover_description" cols="30" rows="5" required class="form-control"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </form>
            <button onclick="finalCheck()" type="button" class="btn btn-primary w-100 mt-5">Please Confirm Before Submit the Detail</button>
            </div>
        </div> 
</header>
    <script>
      var id = window.location.href.split('/').pop();
        function selectTab(evt,tabId) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(tabId).style.display = "";
        evt.currentTarget.firstElementChild.className += " w3-border-red";
        }


        function deleteExp(id)
        {
            $.ajax({
              type: 'delete',
              url: '/api/user/experience/'+id,
                      success: function () {
                        swal({
                            title: "Deleted Sucessfully!",
                            text:  "Experience Deleted.",
                            icon: "danger",
                            });
                            window.location.reload(true);
                      }
                    });
        }

        $('#experienceForm').on('submit', function (e) { 
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/user/experience/'+id,
              data:{
                    'name'            : document.getElementById("company_name").value,        
                    'desigination'    : document.getElementById("company_desigination").value,        
                    'location'        :  document.getElementById("company_location").value,         
                    'sDate'           :  document.getElementById("jobSDate").value,         
                    'cDate'           :  document.getElementById("jobCDate").value,
                    'description'     :  document.getElementById("company_description").value,
                    "_token"          : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Experience information is added Add More If you wants to add.",
                            icon: "success",
                            });
                      }
                    });
        });  

           $('#coverForm').on('submit', function (e) { 
            e.preventDefault();
              $.ajax({
                type: 'post',
                url: '/api/user/cover/'+id,
                data:{
                      'company_name'    : document.getElementById("cover_name").value,        
                      'receiver_name'   : document.getElementById("cover_receiver_name").value,        
                      'desigination'    : document.getElementById("cover_desigination").value,        
                      'address'         :  document.getElementById("cover_address").value,         
                      'description'     :  document.getElementById("cover_description").value,
                      "_token"          : "{{ csrf_token() }}",
                        },
                        success: function () {
                          swal({
                              title: "Posted Sucessfully!",
                              text:  "Cover information is added.",
                              icon: "success",
                              });
                        }
                      });
        }); 

        var image,image_name;
          $('#profile').on('change',function(e){
            
                  let files = e.target.files[0];
                  let reader = new FileReader();
                  if(files){
                    reader.onloadend = ()=>{
                      $('#chosen_feature_img').attr('src',reader.result);
                      image = reader.result;
                      image_name = files.name;
                    }
                    reader.readAsDataURL(files); 
                }
              });
              
        $("#personalInfo").submit(function(e) {
          e.preventDefault();
          var data;
          var summary= document.getElementById("summary").value,        
          data = new FormData(this);
          data.append('summary',summary);
          console.log(data);
          $.ajax({
            type: 'post',
            url: '/api/user/personal/'+id,
            data:data,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
              }
          });
          swal({
                title: "Posted Sucessfully!",
                text: " Pesonal information is added.",
                icon: "success",
              });
        }) 

          $('#gradEdu').on('submit', function (e) { 
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/user/education/graduation/'+id,
              data:{
                    'education_type'  : document.getElementById("education_type").value,        
                    'course'          : document.getElementById("course").value,        
                    'college'         :  document.getElementById("college").value,         
                    'location'        :  document.getElementById("location").value,         
                    'sDate'           :  document.getElementById("sDate").value,         
                    'cDate'           :  document.getElementById("cDate").value,
                    "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Graduation Details are added.",
                            icon: "success",
                            });
                      }
                    });
        });   

       

        $('#postEdu').on('submit', function (e) {
          e.preventDefault();
            $.ajax({
              type: 'post',
              url: '/api/user/education/graduation/'+id,
              data:{
                    'education_type'  : document.getElementById("p_education_type").value,        
                    'course'          : document.getElementById("p_course").value,        
                    'college'         :  document.getElementById("p_college").value,         
                    'location'        :  document.getElementById("p_location").value,         
                    'sDate'           :  document.getElementById("p_sDate").value,         
                    'cDate'           :  document.getElementById("p_cDate").value,
                    "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Post Graduation Details are added.",
                            icon: "success",
                            });
                      }
                    });
        });   


        $('#skillForm').on('submit', function (e) {
          e.preventDefault();
          var skills = new Array(3); 
          var levels = new Array(3); 
          var skill = document.getElementsByName("skill[]");
          var level = document.getElementsByName("level[]");
          for (var i = 0; i < skill.length; i++) { 
            skills[i] = skill[i].value; 
            levels[i] = level[i].value; 
            } 
            $.ajax({
              type: 'post',
              url: '/api/user/skill/'+id,
              data:{
                      "skill"            : skills,
                      "level"            : levels,
                      "user_id"          : id,
                      "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Skill Deatils are added.",
                            icon: "success",
                            });
                      }
                    });
              }); 

        $('#interestForm').on('submit', function (e) {
          e.preventDefault();
          var interests = new Array(3); 
          var interest = document.getElementsByName("interest[]");
          for (var i = 0; i < interest.length; i++) { 
            interests[i] = interest[i].value; 
            } 
            $.ajax({
              type: 'post',
              url: '/api/user/interest/'+id,
              data:{
                      "interest"         : interests,
                      "user_id"          : id,
                      "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Interest Details are added.",
                            icon: "success",
                            });
                      }
                    });
              }); 

        $('#certificateForm').on('submit', function (e) {
          e.preventDefault();
          var certificates = new Array(3); 
          var validDates = new Array(3); 
          var certificate = document.getElementsByName("certificate[]");
          var validDate = document.getElementsByName("validDate[]");
          for (var i = 0; i < certificate.length; i++) { 
            certificates[i] = certificate[i].value; 
            validDates[i]    = validDate[i].value; 
            } 
            $.ajax({
              type: 'post',
              url: '/api/user/certificate/'+id,
              data:{
                      "certificate"      : certificates,
                      "validDate"        : validDates,
                      "user_id"          : id,
                      "_token"           : "{{ csrf_token() }}",
                      },
                      success: function () {
                        swal({
                            title: "Posted Sucessfully!",
                            text: "Certification Detail are added.",
                            icon: "success",
                            });
                      }
                    });
              }); 


              $(document).ready(function() {
              var max_fields      = 3; //maximum input boxes allowed
              var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
              var add_button      = $(".add_field_button"); //Add button ID
              var interest_wrapper   		= $(".interest_fields_wrap"); //Fields wrapper
              var add_interest_button      = $(".add_interest_button"); //Add button ID
              var certificate_wrapper   		= $(".certificate_fields_wrap"); //Fields wrapper
              var add_certificate_button      = $(".add_certificate_button"); //Add button ID
              
              var x = 1; //initlal text box count
              $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div class="form-group col-md-4"><input type="text" class="form-control" name="skill[]" required placeholder="Enter Skill"/><br><select  class="form-control" name="level[]" required/><option>Begginer</option><option>Intermediate</option><option>Expert</option></select><a href="#" style="color:white" class="remove_field">Remove</a></div>'); //add input box
                }
              });

              var y = 1; //initlal text box count
              $(add_interest_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(y < max_fields){ //max input box allowed
                  y++; //text box increment
                  $(interest_wrapper).append('<div class="form-group col-md-4"><input type="text" class="form-control"  name="interest[]" placeholder="Enter Your Interest" required/><a href="#" style="color:white" class="remove_interest_field">Remove</a></div>'); //add input box
                }
              });
              
              var z = 1; //initlal text box count
              $(add_certificate_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(z < max_fields){ //max input box allowed
                  z++; //text box increment
                  $(certificate_wrapper).append('<div class="form-group col-md-4"><div><input type="text" name="certificate[]" placeholder="Enter Certificate Name" required class="form-control"></div><br><label for="" >Valid Till</label><div><input type="date" name="validDate[]" required class="form-control"></div><a href="#" style="color:white" class="remove_certificate_field">Remove</a></div> '); //add input box
                }
              });
              $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
              })
              $(interest_wrapper).on("click",".remove_interest_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); y--;
              })
              $(certificate_wrapper).on("click",".remove_certificate_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); z--;
              })
            });

            function finalCheck()
            {
              $.ajax({
              type: 'post',
              url: '/api/user/final/check/'+id,
              data:{
                      "_token"  : "{{ csrf_token() }}",
                    },
                      success: function (result) {
                        if(result=="ok")
                        {
                          window.location.href = "/choose-template/"+id;
                        }
                        else
                        {
                          swal({
                            title: "Information required!",
                            text:   result +' required please fill',
                            icon: "info",
                            });
                        }
                      }
                    });
            }
            selectedFeild();
            function selectedFeild()
            {
              <?php if(!$users->UserPersonalInfo->isEmpty()){ ?>

                document.getElementById("state").value= '<?php echo $users->UserPersonalInfo[0]->state ?>';
                document.getElementById("marital").value= '<?php echo $users->UserPersonalInfo[0]->marital_status?>';
                document.getElementById("summary").value= '<?php echo $users->UserPersonalInfo[0]->summary?>';
                <?php }
                  if(!$users->experience->isEmpty()){ ?>

                document.getElementById("jobSDate").value= '<?php echo $users->experience[0]->start_date?>';
                document.getElementById("jobCDate").value= '<?php echo $users->experience[0]->complete_date?>';
                document.getElementById("company_description").value= '<?php echo $users->experience[0]->description?>';
                <?php }
                  if(!$users->education->isEmpty()){ 
                    if($users->education->count()==2){?>
                document.getElementById("p_cDate").value= '<?php echo $users->education[1]->complete_date?>';
                document.getElementById("p_sDate").value= '<?php echo $users->education[1]->start_date?>';
                <?php }
                if($users->cover->count()==1){ ?>
                document.getElementById("cover_description").value= '<?php echo $users->cover[0]->body ?>';

                <?php } ?>
                document.getElementById("cDate").value= '<?php echo $users->education[0]->complete_date?>';
                document.getElementById("sDate").value= '<?php echo $users->education[0]->start_date?>';
                <?php } ?>
            }
    </script>
@endsection



 
