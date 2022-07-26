<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client's Form | View Projects</title>
    
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        .bs-example{
        margin: 20px;
    }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
</head>
<body>
<div class="bs-example">
    <div class="container card-view">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">On-Going Projects</h2>
                </div>
                <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM projects");
                ?>
                <?php
                    if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class='table table-bordered table-striped' style="border: 3px solid white;">
                        <tr style="border: 3px solid white;">
                            <th style="border: 2px solid white; color: #e3e3e3; text-align: center; font-size: 20px">Topic</th>
                            <th style="border: 2px solid white; color: #e3e3e3; text-align: center; font-size: 20px">Number of Words</th>
                            <th style="border: 2px solid white; color: #e3e3e3; text-align: center; font-size: 20px">Instructions</th>
                            <th style="border: 2px solid white; color: #e3e3e3; text-align: center; font-size: 20px">Scheduled Delivery Date</th>
                        </tr>
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td style="border: 2px solid white; color: #e7eaf6; font-size: 15px"><?php echo $row['Topic']; ?></td>
                                    <td style="border: 2px solid white; color: #e7eaf6; font-size: 15px"><?php echo $row["Words"]; ?></td>
                                    <td style="border: 2px solid white; color: #e7eaf6; font-size: 15px"><?php echo $row["Descriptions"]; ?></td>
                                    <td style="border: 2px solid white; color: #e7eaf6; font-size: 15px"><?php echo $row["Delivery_Date"]; ?></td>
                                </tr>
                                <?php
                                    $i++;
                            }
                                ?>
                        </table>
                    <?php
                }
                else{
                    echo "<p style = 'color: white; font-size: 20px; font-weight: 500;'>No Record Found</p>";
                }
                ?>
            </div>
        </div>        
    </div>
</div>
</body>
</html>
