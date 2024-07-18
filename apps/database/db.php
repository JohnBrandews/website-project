<!-- this file establishes connection between the code and the database -->
<?php
//starts a  particular session
session_start();
require('connect.php');

// echo "<pre>",print_r($users),'</pre>';
function dd($value){
echo "<pre>",print_r($value),'</pre>';
die();

}
function executeQuery($sql, $data){
    global $conn;
   $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat("s",count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;

}
function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        //placeholders prevent sql injection
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
    }else{
        $i = 0;
        foreach ($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE  $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        // dd($sql);
        $stmt = executeQuery($sql,$conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
    }

}

function selectOne($table, $conditions){
    global $conn;
    $sql = "SELECT * FROM $table";
   
        $i = 0;
        foreach ($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE  $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";   
        // dd($sql);
        $stmt = executeQuery($sql,$conditions);
        $records = $stmt->get_result()->fetch_assoc();
        
            return $records;
    }
    function create ($table,$data){
        global $conn;
        $sql = "INSERT INTO $table SET ";
        $i = 0;
        foreach ($data as $key => $value){
            if ($i === 0){
                $sql = $sql . "   $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
    }
    function update ($table, $id, $data){
        global $conn;
        $sql = "UPDATE  $table SET ";
        $i = 0;
        foreach ($data as $key => $value){
            if ($i === 0){
                $sql = $sql . "   $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        $sql = $sql . " WHERE id = ?";
        $data['id'] = $id;
        $stmt = executeQuery($sql, $data);
        return $stmt->affected_rows;
    }
  function delete($table, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}


