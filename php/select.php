<?php
    require_once('connessione.php');

    $sql= 'SELECT * FROM utenti';

    if($risultato = $connessione->query($sql)){
        $data = [];
        if($risultato->num_rows > 0){  
            while($row = $risultato->fetch_array(MYSQLI_ASSOC)){
                $tmp;

                $tmp['id']= $row['id'];
                $tmp['name']= $row['name'];
                $tmp['cognome']= $row['cognome'];
                $tmp['email']= $row['email'];
                $tmp['level']= $row['level'];

                array_push($data, $tmp);
            }
            echo json_encode($data);
        }else{
            echo json_encode($data);
        }
    }else{
        echo "ERRORE NELL ESEGUZIONE DEL $sql." . $connessione->error; 
    }
?>