<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee Management System</title>
    </head>
    <body>
    <h1> Bookshop System </h1>
    <input type="text" id="book_id" placeholder="book_id"/><br/><br/>
    <input type="text" id="book_title" placeholder="book_title"/><br/><br/>
    <input type="text" id="book_author" placeholder="book_author"/><br/><br/>
    <input type="text" id="book_price" placeholder="book_price"/><br/><br/>
    <input type="text" id="quantity" placeholder="quantity"/><br/><br/>
    <br/>
    <input type="button" id="submitbtn1" value="SUBMIT"/><br/>
    <br/>
    <br/>
    <input type="button" id="displaybtn" value="view"/>
    <br/>
    <br/>
    <h2>Update Name by checking id</h2>
    <input type="text" id="bid" placeholder="old book_id"/><br/><br/>
    <input type="text" id="btit" placeholder="new book_title"/><br/><br/>
    <input type="button" id="updatebtn" value="update"/>
    <h2>Delete record by checking id</h2>
    <input type="text" id="did" placeholder="old book_id"/><br/><br/>
    <input type="button" id="deletebtn" value="delete"/>
    
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>
    </body>
</html>        