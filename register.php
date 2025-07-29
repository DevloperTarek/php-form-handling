<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading</title>
</head>
<body>
    <h2 class="file-upload">Choose and upload File</h2>
    <form action="access.php" method="post">
        <label for="file">File Choose</label>
        <input type="file" name="file" id="file" require />

        <br>
        
        <input type="submit" value="Upload File" />
    </form>
</body>
</html>