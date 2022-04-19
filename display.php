<html>
    <head>
        <style>
            table,tr,th,td{
                border: 1px solid black;
            }
            </style>
    </head>
    <body>
    <h1> Bookshop System </h1>
    <table>
        <tr>
            <th>book_id</th>
            <th>book_title</th>
            <th>book_author</th>
            <th>book_price</th>
            <th>quantity</th>
        </tr>
    
    <?php
    include_once"./includes/config.php";
    $sql="SELECT * FROM `ebook`";
    $db=mysqli_query($conn,$sql);
    $row=null;

    if(mysqli_num_rows($db)>0){
        while($row=mysqli_fetch_assoc($db)){
            echo"
            <tr>
               <td>".$row['book_id']."</td>
               <td>".$row['book_title']."</td>
               <td>".$row['book_author']."</td>
               <td>".$row['book_price']."</td>
               <td>".$row['quantity']."</td>
            </tr>
            
            ";
                    
        }
    }
    ?>
    </table>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>
    </body>
</html> 