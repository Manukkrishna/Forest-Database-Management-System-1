
<!DOCTYPE html>
<html>
    <head>
    <?php include 'links.php'; ?> 
    <link rel="stylesheet" href="table.css">
    
        <title>
            Aves
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

           
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/forest">iSecure</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forest/firstp.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/forest/insertaves.php">Insert</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/forest/deleteaves.php">Delete</a>
      </li>
     
       
      
    </form>
  </div>
</nav><div = class="main-div">
<h1 class="text-center">Aves</h1>

            <div class ="center-div">
                <div class = "table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th> Common name</th>
                                <th> Scientific name </th>
                                <th> Population trend </th>
                                <th> Red list </th>
                                <th> Establishment </th>
                                

                            </tr>

                        </thead>
                        <tbody>
                        <?php

                        include 'connection.php';

                        $selectquery = " select * from aves";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query)){

                        ?>
                        
                        <tr>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['scientific_name']; ?> </td>
                        <td><?php echo $res['population_trend']; ?></td>
                        <td><?php echo $res['red_list']; ?> </td>
                        <td>><?php echo $res['establishment']; ?> </td>
                                
                        </tr>
                        <?php
                      
                        }
                        ?>

                        



                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>







    </body>
</html>