<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Hash;
use Auth;
use DB;

class UsersController extends Controller
{

    /**
     * Display a listing of the users.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $usersObjects = users::paginate(25);

        return view('users.index', compact('usersObjects'));
    }

    /**
     * Show the form for creating a new users.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('users.create');
    }

    /**
     * Store a new users in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            users::create($data);

            return redirect()->route('users.users.index')
                             ->with('success_message', 'Users was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified users.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $users = users::findOrFail($id);

        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified users.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $users = users::findOrFail($id);
        

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified users in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $users = users::findOrFail($id);
            $users->update($data);

            return redirect()->route('users.users.index')
                             ->with('success_message', 'Users was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified users from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $users = users::findOrFail($id);
            $users->delete();

            return redirect()->route('users.users.index')
                             ->with('success_message', 'Users was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:1|max:191',
            'email' => 'required|string|min:1|max:191',
            'email_verified_at' => 'nullable|date_format:j/n/Y g:i A',
            'category' => 'required|string|min:1|max:191',
            'city' => 'required|string|min:1|max:191',
            'admin' => 'required|numeric|min:-2147483648|max:2147483647',
            'password' => 'required|string|min:1|max:191',
            'remember_token' => 'nullable|string|min:0|max:100',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    public function changepassword(request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with('warning_message',"Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("warning_message","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with('flash_message','Password changed successfully');
    }
    public function allhotel()
    {
        $data=DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->where('users.category','=','Hall')
                ->get();
        
         return view('users.allhotels',compact('data'));
    }
    public function allphotography()
    {
        $data=DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->where('users.category','=','Photography')
                ->get();
        
         return view('users.allphotography',compact('data'));
    }
    public function allbeautician()
    {
        $data=DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->where('users.category','=','Bridel_Designers')
                ->get();
        
         return view('users.allbeautician',compact('data'));
    }
    public function alldjband()
    {
        $data=DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->where('users.category','=','Music')
                ->get();
        
         return view('users.alldjband',compact('data'));
    }
    public function allcatering()
    {
        $data=DB::table('caterings')
                ->join('users','users.id','=','caterings.user_id')
                ->where('users.category','=','Catering')
                ->get();
        
         return view('users.allcatering',compact('data'));
    }
    public function allrepresenter()
    {
        $data=DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->where('users.category','=','Actors')
                ->get();
        
         return view('users.allrepresenter',compact('data'));
    }
    public function allcakedesigner()
    {
        $data=DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->where('users.category','=','Cake_Designers')
                ->get();
        
         return view('users.allcakedesigner',compact('data'));
    }
    public function allcostumedesigner()
    {
        $data=DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->where('users.category','=','Cloth_Designers')
                ->get();
        
         return view('users.allcostumedesigner',compact('data'));
    }
    public function alldancing()
    {
        $data=DB::table('dancers')
                ->join('users','users.id','=','dancers.user_id')
                ->where('users.category','=','Dancing')
                ->get();
        
         return view('users.alldancing',compact('data'));
    }
    public function alldecoration()
    {
        $data=DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->where('users.category','=','Decoration')
                ->get();
        
         return view('users.alldecoration',compact('data'));
    }
    public function alltransport()
    {
        $data=DB::table('transporters')
                ->join('users','users.id','=','transporters.user_id')
                ->where('users.category','=','Wedding_Transport')
                ->get();
        
         return view('users.alltransport',compact('data'));
    }
    public function alleventplanners()
    {
        $data=DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->where('users.category','=','Event_Planners')
                ->get();
        
         return view('users.alleventplanners',compact('data'));
    }
    public function allporuwarituals()
    {
        $data=DB::table('poruwa_ceramonies')
                ->join('users','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.category','=','Poruwa_Ceramony')
                ->get();
        
         return view('users.allporuwarituals',compact('data'));
    }

    public function viewService($id)
    {
        $data=DB::table('users')
             ->where('users.id','=',$id)
             ->select('category')
             ->get();

        foreach($data as $data1)
        {
            if(($data1->category)=='Hall')
            {
                $hotel=DB::table('users')
                     ->join('hotels','hotels.user_id','=','users.id')
                     ->where('users.id','=',$id)
                     ->select('hotels.id')
                     ->get();
                
                foreach($hotel as $hotel1)
                {
                    return app('App\Http\Controllers\HallController')->viewHotel($hotel1->id);
                }
                
            }
            if(($data1->category)=='Photography')
            {
                return app('App\Http\Controllers\PhotographyController')->viewProfile($id);
            }
            if(($data1->category)=='Music')
            {
                return app('App\Http\Controllers\musicianController')->viewProfile($id);
            }
            if(($data1->category)=='Dancing')
            {
                return app('App\Http\Controllers\DancingController')->viewProfile($id);
            }
            if(($data1->category)=='Poruwa_Ceramony')
            {
                return app('App\Http\Controllers\PoruwaController')->viewProfile($id);
            }
            if(($data1->category)=='Wedding_Transport')
            {
                return app('App\Http\Controllers\TransportController')->viewProfile($id);
            }
            if(($data1->category)=='Decoration')
            {
               return app('App\Http\Controllers\decorationController')->viewProfile($id);
            }
            if(($data1->category)=='Cake_Designers')
            {
                return app('App\Http\Controllers\CakeController')->viewProfile($id);
            }
            if(($data1->category)=='Actors')
            {
                return app('App\Http\Controllers\ActorController')->viewProfile($id);
            }
            if(($data1->category)=='Bridel_Designers')
            {
                return app('App\Http\Controllers\salonController')->viewProfile($id);
            }
            if(($data1->category)=='Catering')
            {
                return app('App\Http\Controllers\CateringController')->viewProfile($id);
            }
            if(($data1->category)=='Cloth_Designers')
            {
                return app('App\Http\Controllers\CostumeDesignerController')->viewProfile($id);
            }
            if(($data1->category)=='Event_Planners')
            {
                return app('App\Http\Controllers\EventPlanersController')->viewProfile($id);
            }
            
           
        }
    }


}
