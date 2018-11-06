<?php
    //crie uma variável para receber o código da tabela
    $result_usuarios = '<div class="table-responsive">';
    $result_usuarios .= '<table class="table table-striped" id="listaDeClientes">';//abre table
    $result_usuarios .='<thead>';//abre cabeçalho
    $result_usuarios .= '<tr>';//abre uma linha
    $result_usuarios .= '<th scope="col">Selecionar Cliente</th>'; // colunas do cabeçalho
    $result_usuarios .= '<th scope="col">idCliente</th>';
    $result_usuarios .= '<th scope="col">Nome</th>';
    $result_usuarios .= '<th scope="col">Telefone</th>';
    $result_usuarios .= '<th scope="col">Endereço</th>';
    $result_usuarios .= '<th scope="col">Email</th>';
    $result_usuarios .= '<th scope="col">Editar</th>';
    $result_usuarios .= '<th scope="col">Excluir</th>';
    $result_usuarios .= '</tr>';//fecha linha
    $result_usuarios .='</thead>'; //fecha cabeçalho
    $result_usuarios .='<tbody>';//abre corpo da tabela

    $result_usuarios .= '<tr>'; // abre uma linha
    $result_usuarios .= '<th scope="row" class="selecionaClientes"><input type="checkbox" class="checkthis" /></th>'; 
    $result_usuarios .= '<td >1</td>';
    $result_usuarios .= '<td>'.$row_usuario['idCliente'].'</td>'; 
    $result_usuarios .= '<td>'.$row_usuario['nomeCliente'].'</td>'; 
    $result_usuarios .= '<td>'.$row_usuario['telefone'].'</td>'; 
    $result_usuarios .= '<td>'.$row_usuario['endereco'].'</td>'; 
    $result_usuarios .= '<td>'.$row_usuario['email'].'</td>'; 
    $result_usuarios .= '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarCliente" title="Editar Cliente"><i class="fa fa-pencil"></i></button>'; 
    $result_usuarios .= ' <td><button class="btn btn btn-danger" data-toggle="modal" data-target="#excluirCliente" title="Excluir Cliente"><i class="fa fa-trash"></i></button></td>';
    $result_usuarios .= '</tr>'; // fecha linha
    /*loop deve terminar aqui*/
    $result_usuarios .='</tbody>'; //fecha corpo
    $result_usuarios .= '</table>';//fecha tabela

    echo $result_usuarios; // imprime

    ?>