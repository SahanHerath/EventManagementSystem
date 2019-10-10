<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;
use App\User;
use Auth;
use Hash;
use Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DB::table('users')
            ->where('admin','=','1')
            ->get();

        return view('admins',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            ['name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'city' => 'required|string|max:255',
            'category' => 'required|string|max:20',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fname' =>'required|string|max:255',
            'lname' =>'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',

            
            

        ],
        ['name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'city.required'=> "Fill out this field",
        'category.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'fname.required'=> "Fill out this field",
        'lname.required'=> "Fill out this field",
        'password.required'=> "Fill out this field",
        
        
       

        ]
    );
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->category =$request->category;
        $user->city =$request->city;
        $user->admin ="1";
        $user->password =Hash::make($request['password']);
        $user->save();
        
        $admin=new Admin;
        $admin->user_id =$user->id;
        $admin->fname=$request->fname;
        $admin->lname=$request->lname;
        $admin->Address =$request->Address;
        $admin->Contact_No=$request->Contact_No;
        $admin->save();

        return redirect('/admins');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            ['name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'city' => 'required|string|max:255',
            
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fname' =>'required|string|max:255',
            'lname' =>'required|string|max:255',
           
           

            
            

        ],
        ['name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'city.required'=> "Fill out this field",
        
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'fname.required'=> "Fill out this field",
        'lname.required'=> "Fill out this field",
        
        ]
    );

    $data=User::where('id',$id)
            
    ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'city'=>$request->city,
            
            
    ]);

    $data1=Admin::where('user_id',$id)
            
    ->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'Address'=>$request->Address,
            'Contact_No'=>$request->Contact_No,
            'About_me'=>$request->About_me,
            
    ]);

    return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $admin1 = User::findOrFail($id); 
        $admin1 ->delete();
        $admin2  = Admin::where('user_id',$id)->delete();

        return redirect()->back();
               
    }

    public function registerAdmin()
    {
        return view('registerAdmin');
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data=DB::table('users')
             ->join('admins','users.id','=','admins.user_id')
             ->where('users.id','=',$id1)
             ->select('users.id as userid','email','name','Bio','city','fname','lname','admins.id as adminid','Address','Contact_No','About_me','Main_pic','Cover_pic')
             ->get();

            return view('profile',compact('data'));
    }

    public function updateBio(request $request,$id)
    {
        
        $request->validate(
            ['Bio' => 'required|string|max:50',
           
           ],
        [
            'Bio.required'=> "Fill out this field",
       ]
    );

        $data1=Admin::where('id',$id)
            
        ->update([
                'Bio'=>$request->Bio,
                
                
        ]);

    return redirect()->back()->with('flash_message','Change Your Bio Successfully');
    }

    public function changeMainpic(request $request,$id)
    {
        $id1 = Auth::user()->id;
            
        $data=DB::table('users')
            ->join('admins','users.id','=','admins.user_id')
            ->where('users.id','=',$id1)
            ->select('admins.id')
            ->get();

            $request->validate(
            [
                'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            ],
            [
                'Main_pic.required'=> "Add a image here",
            ]
        );
        
        
        foreach($data as $data1)
        {
            if($data1->id==$id)
            {
                if($request->hasFile('Main_pic'))
                {
                    $Main_pic=$request->file('Main_pic');
                    $filename=time().'.'.$Main_pic->getClientOriginalExtension();
                    Image::make($Main_pic)->fit(1920,1080)->save(public_path('/uploads/admin/'. $filename));

                    $picture=Admin::where('id',$id)
                    ->update([
                            'Main_pic'=>$filename


                    ]);
                }

                return redirect('/Profile')->with('flash_message','Change Your Profile Picture Successfully');
            }

            else
            {
                return redirect('/');
            }
        }
    }

}
