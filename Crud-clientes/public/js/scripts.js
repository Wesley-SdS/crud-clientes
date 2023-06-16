

    function removerCliente(clienteId) {
        if (confirm("Deseja remover este cliente?")) {
        
            window.location.href = "/remover-cliente/" + clienteId;
        }
    }