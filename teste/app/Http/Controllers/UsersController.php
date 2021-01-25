<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\ValidationException;
use LaravelLegends\PtBrValidator\Validator;


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
        //$dados = DB::select("SELECT * FROM teste");

        return view('home', [
            'dados' => DB::table('teste')
            ->select('id', 'nome', 'email', 'estado', 'cidade', 'bairro', 'cep', 'cpf', 'telefone')
            ->simplePaginate(10)
        ]);

        
      //  return view('home', compact('dados'));
    }

    public function criar()
    {       
        return view('novo');
    }
    
    public function novo(Request $request)
    {

        $validando = $this->validador($request->all());

        if (!$validando->passes()) {
            return back()->with('error','Houve um erro no cadstro, verificar todos os campos');
        }

        DB::table('teste')->insert(
            [
                'nome' => $request['nome'], 
                'email' => $request['email'],
                'estado' => $request['estado'],
                'cidade' => $request['cidade'],
                'bairro' => $request['bairro'],
                'cep' => $request['cep'],
                'cpf' => $request['cpf'],
                'telefone' => $request['telefone']
            ]
          );
        return redirect('/')->with('mensagem','Registro cadastrado com sucesso.'); 
    }    


    public function editar($id)
    {
        $info = DB::select("SELECT id, nome, email, estado, cidade, bairro, cep, cpf, telefone FROM teste WHERE id = $id");
        $dados = $info[0];
        return view('editar', compact('dados'));
    }    

    public function update(Request $request)
    {
        $id = $request['id'];

        $validando = $this->validador($request->all());

        if (!$validando->passes()) {
            return back()->with('error','Houve um erro no cadstro, verificar todos os campos');
        }

        $dados = DB::table('teste')
            ->where('id','=', $id)
            ->update(
                [
                    'nome' => $request['nome'], 
                    'email' => $request['email'],
                    'estado' => $request['estado'],
                    'cidade' => $request['cidade'],
                    'bairro' => $request['bairro'],
                    'cep' => $request['cep'],
                    'cpf' => $request['cpf'],
                    'telefone' => $request['telefone']
                ],
            ); 
        return redirect('/')->with('mensagem','Registro atualizado com sucesso.');    
    }   

    public function delete($id)
    {
        DB::delete("delete FROM teste where id=$id");
        return redirect('/')->with('mensagem','Registro excluído com sucesso.');
    }    

    protected function validador(array $data)
    {
        return \Validator::make($data, [
            'nome' => 'required|string|min:5',
            'email' => 'required|email',
            'estado' => 'required|string|max:2',
            'cidade' => 'required|string|min:5',
            'bairro' => 'required|string|min:5',
            'cep' => 'required|formato_cep',
            'cpf' => '999.999.999-99',
            'cpf' => 'required|cpf|formato_cpf',
            'telefone' => '(99) 99999-9999',
            'telefone' => 'required|celular_com_ddd'
        ]);
    }
}