
<!doctype html>
<html>
    <head>
        <center>
        <title></title>
        <?php include 'links.php'; ?>

    </head>
    
    <body>
        <div class="main-div">
            <h1>list of canidates</h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>degree</th>
                                <th>mobile</th>
                                <th>email</th>
                                <th>refer</th>
                                <th>post</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           include 'connection.php';
                           $selectquery = "select * from jobregistration ";
                           $query = mysqli_query($con, $selectquery);
                           $nums = mysqli_num_rows($query);
                           $res = mysqli_fetch_array($query);
                           while($res = mysqli_fetch_array($query)) {
                            ?>
                           <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['degree'] ?></td>
                                <td><?php echo $res['mobile'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['refer'] ?></td>
                                <td><?php echo $res['jobpost'] ?></td>
                                <td><a href="update.php?id=<?php echo $res['id']?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $res['id']?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php   
                           }
                           ?>
                            
                        </tbody>

                    </table>

                </div>
              
            </div>
        </div>
        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</center>
    </body>
</html>