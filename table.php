<html>
    <head>
        <title>Listagem</title>
    </head>
    <body>
        <h1>Listagem</h1>
        <table width="100%">
            <thead>
                <th>Nome do banco</th>
                <th>verba</th>
                <th>codigo do contrato</th>
                <th>data de inclusao</th>
                <th>valor</th>
                <th>prazo</th>
            </thead>
            <tbody>
                <?php while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
                    <tr class="row">
                        <td><?=$row['nome']?></td>
                        <td><?=$row['verba']?></td>
                        <td><?=$row['codigo']?></td>
                        <td><?=$row['data_inclusao']?></td>
                        <td><?=$row['valor']?></td>
                        <td><?=$row['prazo']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <style>
            thead{
                background-color: #0000ff;
                color:#FFFFFF;
                padding: 4px;
            }
            tbody {
                background-color: #CCCC00;
                color:#000000;
            }
            .row {
                text-align: center;   
            }

            th, td {
                padding: 4px;
            } 
            h1 {
                margin-top: calc(10%/2);
                text-align: center;
                text-decoration: underline;
            }
        </style>
    </body>    

</html>

    