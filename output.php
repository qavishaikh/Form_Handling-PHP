<html>
    <head>
        <tittle>Form Handling OutPut</tittle>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <h1>OutPut</h1>
      <h3 >  Welcome <span class="h3_output"> <?php echo $_POST["name"]; ?> </span> </h3> 
       <h3 > Your Email Address is: <span class="h3_output"> <?php echo $_POST["email"]; ?> </span></h3>
       <h3 > Your Mobile Number  is: <span class="h3_output"> <?php echo $_POST["number"]; ?> </span></h3>
       </div>
    </body>
</html>