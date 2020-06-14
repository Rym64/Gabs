<?php
namespace App\Http\Controllers\Teacher;
use Illuminate\Http\Request;
use App\Absense;
use App\User;
use App\Http\Controllers\Controller;

class AbsenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
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
            'student' => 'required', 
            'Nom_module' => 'required',
            'absente' => 'required',
            'commentaire' => 'required',
            'date_absence' => 'required'
            
        ]);
        $absense = new Absense;

        $absense->user_id = $request->student;
        $absense->Nom_module = $request->Nom_module;
        $absense->absente = $request->absente;
        $absense->commentaire = $request->commentaire;
        $absense->date_absence = $request->date_absence;
     
        $absense->save();
      

        return redirect('teacher/affectabsence');

      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absense  $absense
     * @return \Illuminate\Http\Response
     */
    public function show(Absense $absense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absense  $absense
     * @return \Illuminate\Http\Response
     */
    public function edit(Absense $absense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absense  $absense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absense $absense)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absense  $absense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absense $absense)
    {
        //
    }


    public function absence(Absense $student
    )

    {
        $roles=Absense::all();
      $student=User::where('role','student')->get();
        return view('teacher.abscense.absente', compact('student','roles')
    );
  
       



    
        //
    }
}
