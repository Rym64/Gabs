<?php


namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexteacher()
    {
     
        
        $users = User::all()->where('role',"teacher");
        return view('admin.users.index', compact('users'));

    }

    public function etudiant()
    {
     
        
        $etudiants = User::all()->where('role',"student");

        
return view('admin.teacher.etudiant', compact('etudiants'));

    }
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('role',"student");
        return view('admin.users.index', compact('users'));
        

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');

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


      $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required'
            
        ]);


        $users = new User;

        $users->user_id = Auth::id();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->role = $request->role;
        $users->password = $request->password;
        
        $users->save();

     

        return redirect()->route('afficheteacher')->with('Adduser', 'New booking added successfully. We sent you an email, please check your inbox.');


        
    }
     

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    
        return view('admin.users.edit', compact('user'));
  
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


        $user->update(  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'phone' => 'required',
            
        
            'address' => 'required'
            
            ]));
    
          
    
             return redirect()->route('users.index')->with('updateteacher', 'users updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
        //

        //
    }




    private function validationRules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'phone' => 'required',
            
            'password' => 'required',
            'address' => 'required'
        ];
    }

    //

    
}