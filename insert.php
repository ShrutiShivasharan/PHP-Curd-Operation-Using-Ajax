<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Programg</title>
<!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <div class="col-lg-6 m-auto">
        <form id="ajax">
        <br><br>
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h1>Insert Operations</h1>
            </div>
            <br>
            <label for="username">Username:</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
            <br>
            <p id="msg">Successfully Send Message!!</p>
            <button type="submit" name="done" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
<!-- Ajax jquery Used -->

<script>
$(document).ready(function() {
    
    $("#msg").hide();
    
    $("#ajax").submit(function() {

        event.preventDefault();
        var data = new FormData(this);
        // alert("in ajax");
        $.ajax({
            type: "POST",
            url: "function.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                alert(data);
                $("#msg").show();
                window.location.href="display.php";
            },
            error: function() {
                console.log("Error Occured !!");
            }
        });  
    });
});  
</script>
</body>
</html>
