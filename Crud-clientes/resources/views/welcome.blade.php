@extends('layouts.main')
@section('title', 'Crud Clientes')
@section('content')
<h1>Cadastro de Clientes</h1>


<form action="/cadastrar-cliente" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" >
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" >
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" >
        
        <label for="dataNasc">Data de Nascimento:</label>
        <input type="date" id="dataNasc" name="dataNasc" >
        
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" >
        
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero">
        
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" >
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" >
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" >
        
        <label for="uf">UF:</label>
        <input type="text" id="uf" name="uf" required>
        
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>
        
        <button type="submit">Enviar</button>
    </form>

    </form>

<div>
    <h2>Clientes Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Rua</th>
                <th>Número</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>UF</th>
                <th>Status</th>
                <th>Ação</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            
            $clientes = App\Models\Cliente::all();
            
            
            foreach ($clientes as $cliente) {
                echo "<tr>";
                echo "<td>".$cliente->Nome."</td>";
                echo "<td>".$cliente->Email."</td>";
                echo "<td>".$cliente->CPF."</td>";
                echo "<td>".$cliente->DataNasc."</td>";
                echo "<td>".$cliente->Rua."</td>";
                echo "<td>".$cliente->Numero."</td>";
                echo "<td>".$cliente->CEP."</td>";
                echo "<td>".$cliente->Cidade."</td>";
                echo "<td>".$cliente->Estado."</td>";
                echo "<td>".$cliente->UF."</td>";
                echo "<td>".$cliente->Status."</td>";
                echo "<td>
                
                <button onclick=\"removerCliente('".$cliente->id."')\">Remover</button>
            </td>";
           
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

   
</div>



@endsection