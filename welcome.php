<html>
    <head>
        <tittle>Form Handling</tittle>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <form action="output.php" method="POST">
            <h1>Welcome page</h1>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Your Name"> <br><br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Your Email Address"> <br><br>
            <label>Mobile Number</label>
            <input type="number" name="number" placeholder="Enter Your Mobile Number"> <br><br>
            <input type="submit">
        </form>
        </div>
    </body>
</html>