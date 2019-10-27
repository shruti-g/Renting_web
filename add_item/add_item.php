<?php include('server.php') ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ADD_ITEM</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="header">
                <h2>ADD_ITEM</h2>
            </div>
            <form method="post" action="add_item.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Item Name</label>
                    <input type="text" name="itemname" value="<?php echo $itemname; ?>">
                </div>
                <div class="input-group">
                    <label>Item Details</label>
                    <input type="text" name="itemdetails" value="<?php echo $itemdetails; ?>">
                
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="add_item">Register</button>
                </div>
            </form>
        </body>
    </html>