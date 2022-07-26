<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client's Form | Add Project</title>

    <!-- CSS Sheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <h2>Add Project Form</h2>
            <p>Please fill this form and submit to add project record to the database.</p>

            <form action="insert.php" method="post">
                <div class="form-group">
                    <label>Enter Topic *</label>
                    <input type="text" name="topic" class="input-box" id="" required>
                </div>

                <div class="form-group">
                    <label>Enter Number of words *</label>
                    <input type="number" name="words" class="input-box" id="" required>
                </div>

                <div class="form-group">
                    <label>Additional Information *</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
                </div>

                <input type="submit" class="submit-btn btn-grad" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
