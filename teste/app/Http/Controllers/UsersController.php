<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dados = DB::select("SELECT * FROM teste");

        
        return view('home', compact('dados'));
    }

    public function criar()
    {       
        return view('novo');
    }
    
    public function novo(Request $request)
    {
        DB::table('teste')->insert(
            [
                'nome' => $request['nome'], 
                'email' => $request['email'],
                'telefone' => $request['telefone']
            ]
          );
        return redirect('/')->with('success','Salvo com sucesso.'); 
    }    


    public function editar($id)
    {
        $info = DB::select("SELECT * FROM teste where id=$id");
        $dados = $info[0];
        return view('editar', compact('dados'));
    }    

    public function update(Request $request)
    {
        $id = $request['id'];
        $dados = DB::table('teste')
            ->where('id','=', $id)
            ->update(
                [
                    'nome' => $request['nome'], 
                    'email' => $request['email'],
                    'telefone' => $request['telefone']
                ],
            ); 
        return redirect('/')->with('success','Atualizado com sucesso.');    
    }   

    public function delete($id)
    {
        $dados = DB::delete("delete FROM teste where id=$id");
        return back()->with('success','Excluído com sucesso.');
    }    
}