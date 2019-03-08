<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta http-equiv = "X-UA-Compatible" content = "ie=edge" />
        <title> Função Recursiva</title>
    </head>
    <body>
        <?php
        
            $hierarquia = array(
                array(
                    "nome_cargo" => "CEO",
                    "subordinados" => array(
                        // Inicio: Diretor Comercial
                        array(
                            "nome_cargo" => "Diretor Comercial",
                            "subordinados" => array(
                                array(
                                    "nome_cargo" => "Gerente de Vendas",
                                    "subordinados" => array(
                                        array(
                                            "nome_cargo" => "Supervisor Contas a pagar", 
                                        )
                                    )
                                )

                            )
                        ),
                        // Termino: Diretor Comercial
                        array(
                            "nome_cargo" => "Diretor Financeiro",
                            "subordinados" => array(
                                array(
                                    "nome_cargo" => "Gerente Contas a Pagar",
                                    "subordinados" => array(
                                        array(
                                            "nome_cargo" => "Supervisor Pagamento"
                                        )
                                    )
                                )
                            )
                          ),
                        
                        array(
                            "nome_cargo" => "Gerente de Compras",
                            "subordinados" => array(
                                array(
                                    "nome_cargo" => "Supervisor de Suprimentos"
                                )
                            )
                        )

                            
                    )

                )
            );

            function exibe($cargos) {
                $html = "<ul>";
                    foreach($cargos as $cargo) {
                        $html .= "<li>";
                        $html .= $cargo["nome_cargo"];

                        if(isset($cargo['subordinados']) && count($cargo["subordinados"]) > 0 ) {
                            $html .= exibe($cargo["subordinados"]);
                        }

                        $html .= "</li>";
                    }
                $html .= "</ul>";
                return $html;
            }



            echo exibe($hierarquia);
        ?>
    
    </body>
</html>
