<?php


use App\Http\Controllers\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
  
Route::group(['middleware' => ['web']], function () {
    Route::get('/', [ClientesController::class, 'welcome']);

    Route::post('/cadastrar-cliente', function (Request $dados) {
        Cliente::create([
            "nome" => $dados->nome, 
            "email" => $dados->email, 
            "cpf" => $dados->cpf,
            "datanasc" => $dados->dataNasc,
            "rua" => $dados->rua,
            "numero" => $dados->numero,
            "cep" => $dados->cep,
            "cidade" => $dados->cidade,
            "estado" => $dados->estado,
            "uf" => $dados->uf,
            "status" => $dados->status,
        ]);

        echo "Cliente cadastrado com sucesso!";
        echo '<script>
            setTimeout(function() {
                window.location.href = "/";
            }, 2000); // Tempo de espera de 2 segundos (2000 milissegundos)
        </script>';
    });

    Route::get('/remover-cliente/{id}', function ($id) {
        App\Models\Cliente::destroy($id);
        return redirect('/');
    });
});

