<html>


<body>


<?php
include "conn.php";
if($_POST){
    $updated_id = $_POST['hdnid'];
    $updated_task = $_POST['newTask'];
    $query = $db->prepare("UPDATE  tasks_tbl SET task_col = ? where id = ?");
    $update = $query->execute(array($updated_task,$updated_id));
    header("location: index.php");
}

if($_GET){
    $id = $_GET['id'];
    $query = $db->query("SELECT * FROM tasks_tbl where id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
    if($query){
        $task = $query['task_col'];

    }
}






?>

<h3>görevi düzenleyin</h3>
<form action="edit.php" method="POST">

    <input type="hidden" name="hdnid" value="<?php echo $id ?>">
    <input type="text" name="newTask" value="<?php echo $task  ?>">

    <input type="submit" value="save">
</form>
</body>
</html>
