<?php 
try{
    $sql = "select B.nome AS banco, C.verba,
        MIN(CO.data_inclusao) AS contrato_mais_antigo,
        MAX(CO.data_inclusao) AS contrato_mais_novo,
        SUM(CO.valor) AS soma_valor_contratos
    from Tb_banco B join Tb_convenio C 
    on B.codigo = C.banco join Tb_convenio_servico CS
    on C.codigo = CS.convenio join Tb_contrato CO
    on CS.codigo = CO.convenio_servico GROUP by B.nome, C.verba";

    $group_result = $pdo->query($sql);
} catch (PDOException $ex) {
    print_r("Error: ".$ex->getMessage());
}