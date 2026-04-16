<?php

$opcao = "";
$nome = "";

echo "login\n";
$nome = readline("Digite seu nome para prosseguir: ");

while ($opcao != "6") {
    

    echo "\n BEM VINDO \n ----------------------MENU---------------------- \n Para iniciar, escolha uma opção: \n 1.Objetivos da política de segurança a informação \n 2.Escopo da politica de segurança a informação \n 3.Responsabilidades \n 4.Boas práticas na politica de segurança a informação \n 5.Consequencias do descumprimento da politica de segurança a informação \n 6.Sair \n";
    
    $opcao = readline("Digite sua opção desejada:");

    switch ($opcao){
        case "1":
            echo "(1- Confidencialidade: a confidencialidade determina que certa informação, fonte ou sistema deve estar acessível somente para pessoas que são autorizadas.
Caso tenha um momento em que um indivíduo não autorizado acesse uma informação sigilosa, pode haver ali uma quebra de confidencialidade.
Em uma instituição financeira, por exemplo, que baseiam a sua PSI na ISO 27001, eles devem e precisam proteger informações que são sigilosas de seus correntistas, evitando ataques cibernéticos que podem comprometer o andamento de seus negócios.
Em resumo, eles precisam manter a confidencialidade das informações sob sua custódia para que as pessoas não sejam expostas a riscos.

2- Integridade: a integridade estabelece que certa informação deve ser correta, confiável e sem alterações não autorizadas.
As empresas devem manter os dados intocados, adotando precauções para que eles não sejam modificados ou eliminados sem autorização, para preservar sua confiabilidade e originalidade.
Caso isso não ocorra, as informações podem ser interpretadas de forma errada, gerando rupturas no negócio e em algumas situações problemas gigantescos.

3- Disponibilidade: a disponibilidade determina que a informação deve estar sempre acessível para o uso de pessoas autorizadas.
Em um ambiente corporativo, a disponibilidade é extremamente importante para o andamento das atividades.
Por exemplo, se em algum  momento uma pessoa tem de assinar um contrato eletrônico, e essa pessoa não consegue acessar o documento digital, ou se houver um ataque que deixa o sistema de vendas de uma empresa indisponível por um dia inteiro, para a resolução disso é importante manter a disponibilidade, pois assim existe uma forma de minimizar os impactos e evitar danos financeiros grandes.

4- Autenticidade: a autenticidade se refere à garantia de que a informação é de uma fonte confiável e que não foi alterada por terceiros e por pessoas não autorizadas.
A autenticidade busca preservar a identidade e a credibilidade da informação, para assegurar a autenticidade da informação é preciso utilizar mecanismos de controle de acesso, assinatura digital, certificação e criptografia de dados.)\n";
            break;
        case "2":
            echo "(escopo da politica de segurança da informação: \n O escopo da psi define os limites, pessoas e processos protegidos pelas diretrizes de segurança, ele abrange colaboradores, sistemas, redes e dados, e garante segurança, integridade, e disponibilidade conforme algumas normas, como a  ISO 27001 LGPD.)";

            break;
        case "3":
            echo "(responsabilidades da politica de segurança da informação: \n Busca definir normas de segurança, mapear possíveis riscos, treinar os usuários conforme exige a LGPD.)";
                break; 
        case "4": 
            echo '(Boas práticas da política de segurança a informação: \n tem como objetivo proteger a confidencialidade, integridade e disponibilidade de dados, se baseando controle de acesso, monitoramento, backup e treinamento aos funcionários)';     
            break;
        case "5":
             echo '(Consequências do descumprimento da política de segurança a informação: \n as consequências podem ser financeiros, operacionais e pode haver impacto interno na empresa, gerando assim multas, disputas judiciais, sanções administrativas, como advertência e etc.)';      
            break;
        case "6";
            break;

    }

}
?>