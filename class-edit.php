<!doctype html>
<html>
<?php include 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>
<div class="content-area">

    <div class="card">
        <h2>Edit Class Form</h2>
        <?php
        if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql = "SELECT * FROM semester WHERE id=$id";
        $query = $conn->query($sql);
        if ($query->num_rows>0){
        while ($semester = $query->fetch_assoc()){
        ?>
            <form method="post" action="cntroller/classcontroller.php">
                <input type="hidden" name="id" value="<?php echo $semester['id'];?>">
                <div class="form-group">
                    <label for="">Class/Semester</label>
                    <input type="text" name="name" id="name" class="input" placeholder="Class Name" value="<?php echo $semester ['name'];?>">

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



                <button class="submit-btn" type="submit" name="update">Update class</button>
            </form>
        <?php

            }
            }
            }

            ?>


    </div>

    <div class="card">

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