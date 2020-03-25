<!doctype html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <title>  Sócios     </title>
        <link type="text/css" href="estilo.css" rel="stylesheet">
    </head>
    
    <body>
        <form action="processa.php" method="post">
  
            <div style="margin-left:38%;padding-bottom:30px;">
                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="logo_rodape.png" style="width:30%; padding-bottom:30px;"/><br>
            <p>Digite o nome do médico </p>
            <input  type="text" name="campo" id="campo">
            </div>
        </form>

        <div id="resultado">
        <?php  
            include('conecta.php');
  
      

            $sql=$mysqli->prepare('select * from medico');
            $sql->execute();
            $sql->bind_result($nome,$crm,$cidade,$telefone);

   echo "
        <table>
       <thead>
                <tr>
                    
                    <td>NOME</td>
                    <td>CRM</td>
                    <td>CIDADE</td>
                    <td>TELEFONE</td>
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
";?>

        </div>
      
    </body>
    <script type="text/javascript" language="javascript">
      $(document).ready(function(){
        $("#campo").keyup(function() {
        $(this).val($(this).val().toUpperCase());
        });
        });
</script>
    
    
    
    
        <script src="jquery-2.1.4.min.js"></script>
    
        <script src='javascript.js'></script>
        
    
    


</html>