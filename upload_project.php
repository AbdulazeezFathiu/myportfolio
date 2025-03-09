<?php include ('header.php'); ?>
<main class="main">
<form action="file.php" method="post" enctype="multipart/form-data">
<label for="name">Project Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="description">Project Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="name">Category:</label>
        <input type="text" id="category" name="category" required><br><br>
        
        <label for="name">Client:</label>
        <input type="text" id="client" name="client" required><br><br>
        
        <label for="name">Project url:</label>
        <input type="text" id="url" name="url" required><br><br -->>
    
        <label for="image">Project Image:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
</main>
<?php include ('footer.php'); ?>
