<?php 
try {
    $sql = "select b.nome, cov.verba, co.codigo, co.data_inclusao, co.valor, co.prazo 
        from tb_contrato co, tb_convenio cov, tb_banco b, tb_convenio_servico con 
        where co.codigo
        and co.convenio_servico  = con.codigo
        and con.convenio  = cov.codigo
        and cov.banco  = b.codigo";
    
    $consulta = $pdo->query($sql);
} catch (PDOException $ex) {
    echo "Error: ".$ex->getMessage();
}