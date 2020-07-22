<?php

class First {
   
    function db_select_tipo(){
        $mysqli = new mysqli('localhost', 'root', '123456', 'exercicio_final');
        $sql = "SELECT nome_tipo FROM tipo_pacote";
        $result = $mysqli->query($sql);
        /*echo '<div class="input-div" id="input-tipo"> <select class="form-control"> <option></option>';

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<option>" . $row["nome_tipo"]. "</option>";
            }
        } 
        echo '</select> </div>';
        */
        return $result;

    }
}            
?>