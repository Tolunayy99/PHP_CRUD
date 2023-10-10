<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>
<body>
<?php
include "conn.php";
$tasks = $db->query("SELECT * FROM tasks_tbl");
?>


<h3 style="text-align: center">Görevi giriniz ...</h3>
<form action="save.php" method="POST">
    <div class="box">

        <div class="row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="new task" name="task">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <input type="submit" class="form-control" value="save">
            </div>
        </div>

    </div>

</form>



<table class="table table-dark">
    <thead>
    <tr class = "col-12">
        <th class = "col-4" scope="col">ID</th>
        <th class = " col-4" scope="col">Task</th>


    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($tasks as $task) {

        echo "<tr>";
        echo "<td>". $task['id'] ." </td>";
        echo "<td>". $task['task_col'] ." </td>";
        echo "<td> <a href='delete.php?id=". $task['id'] ."'>DELETE</td>";
        echo "<td> <a href='edit.php?id=". $task['id'] ."' >EDIT</td>";
        echo "</tr>" ;
    }

    ?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
