<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client's Form | Add Project</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Project Form</h2>
                    </div>
                    <p>Please fill this form and submit to add project record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Enter Topic *</label>
                            <input type="text" name="topic" class="form-control" id="" required>
                            <!-- <input type="text" name="name" class="form-control"> -->
                        </div>
                        <div class="form-group">
                            <label>Enter Number of words *</label>
                            <input type="number" name="words" class="form-control" id="" required>
                            <!-- <input type="email" name="email" class="form-control"> -->
                        </div>
                        <div class="form-group">
                            <label>Additional Information *</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Instructions" required></textarea>
                            <!-- <input type="mobile" name="mobile" class="form-control"> -->
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <br>

                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>