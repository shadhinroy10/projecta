<!doctype html>
<html lang="en">
<?php include 'partials/head.php';?>
<body>
<?php include_once 'partials/nav.php';?>
<div class="content-area">
    <a href="student-add.php">add student</a>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Class</th>
                <th>ID/Roll</th>
                <th>Section</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Rahim</td>
                <td>10</td>
                <td>20221001</td>
                <td>scince</td>
                <td>
                    <a href="student-edit.php?id=1">Edit</a>
                    <a href="">Delet</a>
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td>2</td>
                <td>Karim</td>
                <td>11</td>
                <td>3002001</td>
                <td>Arts</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delet</a>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>



</div>

<?php include_once 'partials/footer.php';?>
</body>
</html>

