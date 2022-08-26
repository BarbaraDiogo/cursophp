<?php
//uma função chama a si mesma
//usar em situações 

$hierarquia = array( //array bidimensional -> um array dentro de outro
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio: diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //inicio: gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //fim: gerente de vendas
                )
            ),
            //fim: diretor comercial
            //inicio: diretor financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Cntas a Pagar',
                        'subordinados' => array(
                            //inicio: supervisor de pagamentos
                            array(
                                'nome_Cargo' => 'Supervisor de Pagamentos'
                            )
                            //fim: supervisor de pagamentos
                        )
                    ),
                    //fim: gerente de contas a pagar
                    //inicio: gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //inicio: supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //fim: supervisor de suprimentos
                        )
                    )
                    //fim: gerenete de compras
                )
            )
            //fim:diretor financeiro
        ) 
    )
);

//FUNÇÃO RECURSIVA
function exibe($cargos){
    $html = '<ul>';

    foreach($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){ //verificando se a chave subordinado foi definida e se dentro dela tem mais de 0 itens
            $html .= exibe($cargo['subordinados']); // assim vai gerar mais uma porção de <ul> e <li> com os cargos dentro dele

        }

        $html .= "<li>";
    }

    $html .= '</ul'; // .= é para ir acumulando

    return $html;
}

echo exibe($hierarquia);


?>