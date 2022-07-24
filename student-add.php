<!doctype html>
<html lang="en">
<?php include 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>
<div class="content-area">

    <a href="student.php">Back</a>

    <div>
        <form action="">

            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="name" id="name" class="input" placeholder="Name">
                <small style="color: red"> Please insert your name</small>
            </div>



            <div class="form-group">
                <label for="">ID</label>
                <input type="text" name="roll" id="roll" class="input" placeholder="ID">
                <small style="color: red"> Please insert your ID</small>
            </div>

            <div class="form-group">
                <label for="">Class</label>
                <select name="semester" id=""  class="" >
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Section</label>
                <select name="section" id=""  class="" >
                    <option value="">a</option>
                    <option value="">b</option>
                    <option value="">c</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Section</label>
                <select name="section" id=""  class="" >
                    <option value="">Scince</option>
                    <option value="">Commers</option>
                    <option value="">arts</option>

                </select>
            </div>

            <button type="submit" name="add">Submit</button>
        </form>





    </div>



</div>

<?php include_once 'partials/footer.php';?>
</body>
</html>


