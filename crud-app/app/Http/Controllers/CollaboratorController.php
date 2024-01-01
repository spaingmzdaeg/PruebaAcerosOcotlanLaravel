<?php

namespace App\Http\Controllers;
use App\Models\Collaborator;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CollaboratorController extends Controller
{
    
    public function ShowCollaborators() {

        //get() retorna la coleccion puede ser un aray, si ejecutar las instrucciones del orm eloquent sin get es una consulta

        // $collaborators = DB::table('collaborators')->latest()->get(); con esta te traes todos los campos
        // $collaborators = Collaborator::latest()->get();
       
        // $collaborators = Collaborator::select('id', 'first_name', 'second_surname', 'last_name', 'rfc', 'department_id')->get(); // obtener los colaboradores con campos especificos

        // Inner join para poder obtener el nombre del colaborador
        $collaborators = DB::table('collaborators')
                           ->join('departments', 'collaborators.department_id', '=', 'departments.id')
                           ->select('collaborators.id', 'collaborators.first_name', 'collaborators.second_surname', 'collaborators.last_name', 'collaborators.rfc', 'departments.name')->get();                                  
        return view('crud', compact('collaborators'));
    }

    public function AddCollaborator() {
        $departments = Department::select('id' ,'name')->get();
        return view('add_collaborator', compact('departments'));
    }

    public function StoreCollaborator(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'second_surname' => 'required',
            'last_name' => 'required',
            'rfc' => 'required',
            'department_id' => 'required',
            ]);
        
            Collaborator::insert([
                'first_name' => $request->first_name,
                'second_surname' => $request->second_surname,
                'last_name' => $request->last_name,
                'rfc' => $request->rfc,
                'department_id' => $request->department_id,
            ]);
            
        return redirect()->route('showcollaborators')->with('message', 'Colaborador agregado exitosamente');    
    }

    public function DeleteCollaborator($id) {
        Collaborator::findOrFail($id)->delete();
        return redirect()->route('showcollaborators')->with('message', 'Colaborador eliminado exitosamente');
    }

}
