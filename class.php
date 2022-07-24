<!doctype html>
<html>
<?php include 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>
<div class="content-area">

    <div class="card">
        <h2>Add Class Form</h2>
        <form method="post" action="cntroller/classcontroller.php">

            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="name" id="name" class="input" placeholder="Class Name">

                <?php
                if (isset($_GET['name_error'])){
                    ?>
                <small id="name_error" style="color: red">
                <?php echo $_GET['name_error'];?>

                </small>
                    <?php
                }

                ?>


            </div>



            <button class="submit-btn" type="submit" name="add">Add Class</button>
        </form>
    </div>

    <div class="card">
        <h2>Class List</h2>
        <table class="table">
        <thead >
        <tr>
            <th>#</th>
            <th>Class/semester</th>
            <th>Action</th>

        </tr>
        </thead>

        <tbody>

        <?php
            $count=1;


        $sql= "SELECT * FROM semester";
        $query = $conn->query($sql);

        if($query->num_rows>0){
            while($semester = $query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $semester['name']; ?></td>

                    <td>

                        <a class="edit-btn" href="class-edit.php?id=<?php echo $semester['id'];?>">Edit</a>
                        <a class="delet-btn" href="">Delet</a>

                    </td>
                </tr>

        <?php
            }
        }

        ?>

        </tbody>

        </table>
    </div>

</div>

<?php include_once 'partials/footer.php';?>
<script>
    $('#name').keyup(function (event){

        if ($(this).val()!=''){
            $('#name_error').html('');
        }

        }

    );


</script>
</body>
</html>

