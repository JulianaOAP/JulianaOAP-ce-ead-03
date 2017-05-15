<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <?php     
            $tabInicial              = $_POST['tabInicial'];
            $tabFinal                = $_POST['tabFinal'];
            $mulInicial              = $_POST['mulInicial'];
            $mulFinal                = $_POST['mulFinal'];
        ?>
        <title>
           GERARDOR DE TABUADAS
        </title>
        <style type='text/css'>
        table{
          margin: 0px 1px;
          border-collapse : collapse; <!-- Remove contorno de cada TR e TD -->   
        }
        .tituloTab{
            background-color: red;
        }
  
        </style>
    </head>
    <body>
        <?php 
            for($x = $tabInicial; $x <= $tabFinal; $x++){  ?>
               
            <table border='1'>
             <?php 
                         echo '<br>';
   
                    echo "Tabuada do ". $x;  ?>
                    <tr>
                        <td class="tituloTab">Fórmula</td> 
                        <td class="tituloTab">Valor</td>
                    </tr>
                        <?php
                            for($y = $mulInicial; $y <= $mulFinal; $y++){ ?>
                        <tr>
                            <td><?php echo $x . "*" . $y ?></td>
                            <td><?php echo $x * $y?></td> 
                        <?php 
                    
                         
                      
                                                           }
                                                            
                            
            } ?>
                        </tr>                       
                </table>   
                
  </body>     
</html>
