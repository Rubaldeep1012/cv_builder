<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPersonalInfo;
use App\Models\EmployerInfo;
use App\Models\Skill;
use App\Models\Interest;
use App\User;
use App\Models\Certification;
use App\Models\Education;
use App\Models\CoverInfo;
use App\Models\Experience;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience')->get()->first();
       
        if($user->role_id==1)
        {
            $personal=UserPersonalInfo::where('user_id',$id)->count();
            $graduation=Education::where('education_type',1)->where('user_id',$id)->count();
            $skill=Skill::where('user_id',$id)->count();
            $interest=Interest::where('user_id',$id)->count();
            $certificate=Certification::where('user_id',$id)->count();
            $experiene=Experience::where('user_id',$id)->count();
            $cover=CoverInfo::where('user_id',$id)->count();
            if($personal==0||$graduation==0||$skill==0||$interest==0||$certificate==0||$experiene==0||$cover==0)
            {
                return view('user.seeker')->with('users',$user);
            }
            else
            {
                return redirect("/choose-template/$id");
            }
            
        }
        else
        {
            if(EmployerInfo::where('user_id',$id)->count()==0)
            {
                return view('user.employer'); 
            }
            else
            {
                return view('user.search_cv'); 
            }
             
        }
        
    }

    public function editInfo($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience')->get()->first();
        return view('user.seeker')->with('users',$user);
    }

    public function loginRedirect()
    {
        $id=Auth::user()->id;
        if(Auth::user()->role_id==1)
        {
         return redirect("/user-job-seeker/$id");
        }
        else
        {
            return redirect("/user-employer/$id");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePersonal(Request $request)
    {
        $image = $request->file('profile');
        $profile_img = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $profile_img);
        if(UserPersonalInfo::where('user_id',$request['id'])->count()==0)
        {
            UserPersonalInfo::create([
                'user_id'=>$request['id'],
                'post'=>$request['post'],
                'address'=>$request['address'],
                'city'=>$request['city'],
                'state'=>$request['state'],
                'zip'=>$request['zipcode'],
                'image'=>$profile_img,
                'marital_status'=>$request['marital'], 
                'summary'=>$request['summary'],
            ]);
        }
        else
        {
            UserPersonalInfo::where('user_id',$request['id'])->update([
                'user_id'=>$request['id'],
                'post'=>$request['post'],
                'address'=>$request['address'],
                'city'=>$request['city'],
                'state'=>$request['state'],
                'zip'=>$request['zipcode'],
                'image'=>$profile_img,
                'marital_status'=>$request['marital'], 
                'summary'=>$request['summary'],
            ]);
        }
    }

    public function storeSkill(Request $request)
    {
        if(Skill::where('user_id',$request['id'])->count()>0)
        {
            Skill::where('user_id',$request['id'])->delete();
        }
        $level = $request['level'];
        for($i=0;$i<count($level);$i++)
        {
             Skill::create([
                'title'=>$request['skill'][$i],
                'level'=>$request['level'][$i],
                'user_id'=>$request['user_id'],
            ]);
        }
       
    }

    public function storeCover(Request $request)
    {
        if(CoverInfo::where('user_id',$request['id'])->count()==0)
        {
            CoverInfo::create([
                'user_id'=>$request['id'],
                'company_name'=>$request['company_name'],
                'receiver_name'=>$request['receiver_name'],
                'receiver_desigination'=>$request['desigination'],
                'company_address'=>$request['address'],
                'body'=>$request['description'],
            ]);
        }
        else
        {
            CoverInfo::where('user_id',$request['id'])->update([
                'user_id'=>$request['id'],
                'company_name'=>$request['company_name'],
                'receiver_name'=>$request['receiver_name'],
                'receiver_desigination'=>$request['desigination'],
                'company_address'=>$request['address'],
                'body'=>$request['description'],
            ]);
        }
    }

    public function storeExperience(Request $request)
    {
        Experience::create([
            'user_id'=>$request['id'],
            'name'=>$request['name'],
            'desigination'=>$request['desigination'],
            'location'=>$request['location'],
            'start_date'=>$request['sDate'],
            'complete_date'=>$request['cDate'],
            'description'=>$request['description'],
        ]);
    }

    public function storeInterest(Request $request)
    {
        if(Interest::where('user_id',$request['id'])->count()>0)
        {
            Interest::where('user_id',$request['id'])->delete();
        }
        $interest = $request['interest'];
        for($i=0;$i<count($interest);$i++)
        {
             Interest::create([
                'title'=>$request['interest'][$i],
                'user_id'=>$request['user_id'],
            ]);
        }
    }
    public function storeCertificate(Request $request)
    {
        if(Certification::where('user_id',$request['id'])->count()>0)
        {
            Certification::where('user_id',$request['id'])->delete();
        }
        $vDate = $request['validDate'];
        for($i=0;$i<count($vDate);$i++)
        {
             Certification::create([
                'title'=>$request['certificate'][$i],
                'year'=>$vDate[$i],
                'user_id'=>$request['user_id'],
            ]);
        }
       
    }

    public function storeEducation(Request $request)
    {
        
        if(Education::where('user_id',$request['id'])->where('education_type',$request['education_type'])->count()==0)
        {
            Education::create([
                'user_id'=>$request['id'],
                'course'=>$request['course'],
                'college'=>$request['college'],
                'location'=>$request['location'],
                'start_date'=>$request['sDate'],
                'complete_date'=>$request['cDate'],
                'education_type'=>$request['education_type'],
            ]);            
        }
        else
        {
            $eid=Education::where('user_id',$request['id'])->where('education_type',$request['education_type'])->get()->first();
            Education::where('id',$eid->id)->update([
                'user_id'=>$request['id'],
                'course'=>$request['course'],
                'college'=>$request['college'],
                'location'=>$request['location'],
                'start_date'=>$request['sDate'],
                'complete_date'=>$request['cDate'],
                'education_type'=>$request['education_type'],
            ]);
        }

    }

    public function storeCompany(Request $request)
    {
        if(EmployerInfo::where('user_id',$request['id'])->count()==0)
        {
            EmployerInfo::create([
                'user_id'=>$request['id'],
                'location'=>$request['address'],
                'title'=>$request['title'],
                'description'=>$request['description'],
            ]);
        }
        else
        {
            EmployerInfo::where('user_id',$request['id'])->update([
                'user_id'=>$request['id'],
                'location'=>$request['address'],
                'title'=>$request['title'],
                'description'=>$request['description'],
            ]);
        }
    }

    public function searchCv(Request $request)
    {
        $data=[];
        $skills = Skill::Where('title', 'like', '%' .$request['search']. '%')->get('user_id');
        foreach($skills as $key=>$skill)
        {
            $data[$key]=$skill->user_id;
        }
        $id = array_unique($data);
        $users = User::whereIn('id', $id)->with('interest','skill','education','certification','UserPersonalInfo')->get();
        $data='';
        $data.='<ul class="list-group" style="margin-top:40px;">';
        if($users->count()==0)
        {
            $data.='<li class="list-group-item text-center" style="text-transform:capitalize"><b>No Record Found</b></li>';
        }
        else
        {
            foreach($users as $user)
            {
                if($user->UserPersonalInfo->count()==1)
                {
                    $data.='<li class="list-group-item" style="text-transform:capitalize">Resume Posted By <b>'.$user->name.'</b> on '.$user->created_at->format('d-M-y').' for the post of <b>'.$user->UserPersonalInfo[0]->post.'</b><b style="float:right"><a href="/template1/'.$user->id.'">view</a></b></li>';
                }
                        
            }
        }
        $data.='</ul>';
        return $data;
    }
    public function finalCheck(Request $request)
    {
        $user_id=$request['id'];
        $personal=UserPersonalInfo::where('user_id',$user_id)->count();
        $graduation=Education::where('education_type',1)->where('user_id',$user_id)->count();
        $skill=Skill::where('user_id',$user_id)->count();
        $interest=Interest::where('user_id',$user_id)->count();
        $certificate=Certification::where('user_id',$user_id)->count();
        $experiene=Experience::where('user_id',$user_id)->count();
        $cover=CoverInfo::where('user_id',$user_id)->count();
        if($personal==0)
        {
            return 'Personal Info';
        }
        else if($graduation==0)
        {   
            return 'Education Info';
        }
        else if($skill==0)
        {
            return 'Skill Info';
        }
        else if($interest==0)
        {
            return 'Interest Info';
        }
        else if($certificate==0)
        {
            return 'Certification Info';
        }
        else if($experiene==0)
        {
            return 'Experience Info';
        }
        else if($cover==0)
        {
            return 'Cover Info';
        }
        else
        {
            return "ok";
        }

    }
    
    public function template1($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience')->get()->first();
        return view('templates.template1')->with('user',$user);
    }
    public function template2($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience')->get()->first();
        return view('templates.template2')->with('user',$user);
    }
    public function cover1($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience','cover')->get()->first();
        return view('templates.cover1')->with('user',$user);
    }
    public function cover2($id)
    {
        $user = User::where('id', $id)->with('interest','skill','education','certification','UserPersonalInfo','experience')->get()->first();
        return view('templates.cover2')->with('user',$user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwordUpdate(Request $request)
    {

        if($request['password_confirmation']==$request['password'])
        {
            User::where('email',$request['email'])->update([
                'password' => Hash::make($request['password']),
            ]);
            return redirect('login')->with('message', 'Password');;
        }
        else
        {
            return view('auth.passwords.reset')->with('message', 'Confirm Pasword is not same as Pasword');   
        }
    }

    public function verify(Request $request)
    {
        $count = User::where('email',$request['email'])->where('dob',$request['dob'])->count();
        if($count==0)
        {
            return redirect()->back()->with('message', 'Your Email or Dob is invalid ');   
        }
        else
        {
            return view('auth.passwords.reset');
        }

    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyExperience($id)
    {
        Experience::findorfail($id)->delete();
    }
}
