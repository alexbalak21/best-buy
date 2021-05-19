<div class="login">
<h1>ADD PRODUCT</h1>
<br>
<form id="addProduct" enctype="multipart/form-data" action="components/controller.php" method="POST">
<label>Name:</label><br>
<input type="text" name="name"><br>
<br>
<label>Category:</label><br>
<input type="text" name="category"><br>
<br>
<label>Price:</label><br>
<input type="number" name="price"><br>
<br>
<label>Description:</label><br>
<textarea name="description"  cols="30" rows="10"></textarea>
<br>
<br>
<label>You can upload a profile image:</label><br><br>
<input type="file" name="fileToUpload"><br><br>
<input type="hidden" name="addProduct"><br>
<input type="submit" name="productFo" value="REGISTER"><br>
<br>
<p id="warning"></p>
</form>
</div>
