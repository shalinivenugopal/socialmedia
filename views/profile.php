<?php include_once 'header.php'; ?>
  <h2>Profile</h2>
  <form action="../controller/ProfileController.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
    </div>
    <div class="form-group">
      <label>DOB</label>
      <input type="date" format="DD-MM-YYYY" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob">
    </div>
    <div class="form-group">
      <label>Bio Data</label>
      <input type="text" class="form-control" id="bio" placeholder="Enter Short Bio-data" name="bio">
    </div>
    <div class="form-group">
      <label>Married Status</label><br>
      <label><input type="radio" name="relationship[]" value="">Single</label>&emsp;
      <label><input type="radio" name="relationship[]" value="">Married</label>    
    </div>
    <div class="form-group">
      <label><input type="checkbox" name="hobby[]" value="">Coding</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="">Blogging</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="">Music</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="">Dance</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="">Sleeping</label>
    </div><br>
    <div class="form-group">
      <label for="upload">Profile Image</label>
      <input type="file" name="upload" value = "upload">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php include_once 'footer.php'; ?>