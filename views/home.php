<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="alert alert-info">
        <div class="container-fluid">
            <b>Cadastro de Produtos</b>
        </div>
    </div>        
    <div class="container">
        <table class="table table-hover sortable tablesorter"  id="orderTable">
            <thead>
                <tr>
                    <?php 
                        foreach ($aheader as $value) 
                        {
                            $coluna = array_shift($value); 
                            echo '<th class="cursor">'.
                            '<i data-toggle="tooltip" data-placement="top" title="'.$value['Descricao'].'">'.$coluna.'</i></th>';    
                        }
                        ?>
                    <th class="text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                    foreach ($aheader as $value) 
                    { 
                        /**
                         * array_flip — Permuta todas as chaves e seus valores associados em um array.
                         * Exemplo: ['a' => 1, 'b' => 2], fica
                         *          [1 => 'a', 2 => 'b']  
                         */
                        $permuta = array_flip($value);
                        /**
                         * array_shift — Retira o primeiro elemento de um array
                         * Como o array deverá ficar: 
                         * $coluns = [
                         *      "Cod"       => 0,
                         *      "Descri"    => 1,
                         *      "Fabri"     => 2,
                         *      "Preco"     => 3
                         * ]
                         */
                        $coluns[] = array_shift($permuta);

                    }
                    $contador = count($coluns);
                    foreach($data['data'] as $dados) 
                    {    
                        for($i=0; $i<$contador; $i++){
                            
                            echo '<td>'.$dados[$coluns[$i]].'</td>';
                        
                            if($i == $contador -1): ?>
                                <td class="td-actions text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                            Opções
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo $dados['Cod']; ?>">Editar</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $dados['Cod']; ?>">Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                    </td>
                            </tr><tr>
                        <?php endif;     
                        }
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <div class="center">
            <ul class="pagination pagination-info">
                <li><a href="#">Anterior</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Próximo</a></li>
            </ul>
        </div>
    </div>
</body>
</html>