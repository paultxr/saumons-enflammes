<?php session_start() ?>
<?php
            if(!empty($_POST)){
                $id = $_POST['articleName'];
                if(!empty($_SESSION['panier'][$id])){
                    $_SESSION['panier'][$id]++;
                    var_dump($_SESSION['panier']); die;
                } else {
                    $_SESSION['panier'][$id] = 1; 
                    var_dump('yo', $_SESSION['panier']); 
                }
                
               // var_dump($_SESSION['panier']); die;
                echo 'Article : '.$_POST["articleName"].'<br>';
                echo 'Prix : ' .$_POST["price"].'<br>';
            }
            ?>