<?php
$connecttosql = new mysqli("localhost","root","aspire@123","project");

if ($connecttosql->connect_error) {
    die("Connection failed: " .$connecttosql->connect_error);
} 
else{
    echo "connected <br>";
}
/*$result = $connecttosql->query("SELECT id,name,age FROM datas");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " - age" . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql=$connecttosql->query("INSERT INTO datas (id,name,age) VALUES ($id,$name,$age)");
//$sql=$connecttosql->query("DELETE FROM datas WHERE id=25");
if ($connecttosql->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connecttosql->error;
}*/
echo 'hi';
$stmt =$connecttosql->prepare("INSERT INTO datas (id,name,age) VALUES (?,?,?)");

//$stmt->bind_param("isi", $id, $name, $age);

// set parameters and execute
$id = 03;
$name = "balaji";
$age = 22;
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/*$stmt->bindValue(':id', $id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':age', $age);
$id = 07;
$name = "karthi";
$age = 16;
$stmt->execute();*/
$result =query("SELECT id,name,age FROM datas");
echo 'hi';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " - age" . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

echo 'tests';exit;
$connecttosql->close();
?> 

