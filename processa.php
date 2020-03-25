<link type="text/css" href="estilo.css" rel="stylesheet">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>
<?php

include('conecta.php');


$campo="%".$_POST['campo']."%";

$sql=$mysqli->prepare("select * from medico where nome like ?");
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($nome,$crm,$cidade,$telefone);

echo "

    <table>
       <thead>
                <tr>
                    
                    <td>Nome</td>
                    <td>Crm</td>
                    <td>Cidade</td>
                    <td>Telefone</td>
                </tr>
            </thead>

        <tbody>
        ";

        while($sql->fetch()){

        echo "
       <tr>
           
            <td>$nome</td>
            <td>$crm</td>
            <td>$cidade</td>
            <td>$telefone</td>
            
            
        </tr>
        ";
        }

        echo "
        </tbody>
    </table>
";
?>