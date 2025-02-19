<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .upload-container {
            max-width: 500px;
            margin: auto;
            text-align: center;
        }
        .uploaded-files {
            margin-top: 20px;
        }
        .uploaded-files ul {
            list-style: none;
            padding: 0;
        }
        .uploaded-files ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h2>Upload Files</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="files">Select files to upload:</label><br><br>
            <input type="file" name="gfa1ci2-file[]" id="files" multiple><br><br>
            <button type="submit" name="upload">Upload</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload'])) {
            $dataInfo = array();
            $files = $_FILES['gfa1ci2-file'];

            foreach ($files['name'] as $key => $name) {
                if ($files['error'][$key] === UPLOAD_ERR_OK) {
                    $tmpName = $files['tmp_name'][$key];
                    $newName = uniqid() . '_' . basename($name);
                    $destination = realpath(__DIR__ . '/portal/uploads') . '/' . $newName;

                    // Ensure the uploads directory exists
                    if (!is_dir(__DIR__ . '/portal/uploads')) {
                        mkdir(__DIR__ . '/portal/uploads', 0777, true);
                    }

                    // Move the file to the desired directory
                    if (move_uploaded_file($tmpName, $destination)) {
                        $dataInfo[] = $newName;
                    }
                }
            }

            // Display uploaded files
            if (!empty($dataInfo)) {
                echo '<div class="uploaded-files">';
                echo '<h3>Uploaded Files:</h3>';
                echo '<ul>';
                foreach ($dataInfo as $file) {
                    echo '<li><a href="portal/uploads/' . htmlspecialchars($file) . '" target="_blank">' . htmlspecialchars($file) . '</a></li>';
                }
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<p>No files uploaded or an error occurred.</p>';
            }
        }
        ?>
    </div>
</body>
</html>
