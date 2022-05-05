
   <div class="container-fluid">
                                
<div class="search mt-3">
<div class="form-group">

<label class="text-dark"><b>Search</b></label>
<input type="search" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search users account">
</div>
</div>
<?php $this->load->view('config/flash'); ?>


<div class="card" style="padding:10px;margin-bottom:10px;">
                <div class="table-responsive">
                <h4 class="text-center mt-2">Manage members
                     </h4>
<table class="table mt-5" id="myTable">
 <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
      <th scope="col">full name</th>
      <th scope="col">Wallet Balance</th>
      <th scope="col">Fund wallet</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 0; foreach($users as $row) : $i++; ?>
    <tr  style="margin-top:10px;">
        <td><?= $i; ?></td>
      <td><?= $row['fullname'];?></td>
      <td><?= $row['balance'];?></td>
      <td><a href="<?php echo base_url()?>admin/fund?id=<?= $row['user_id'];?>" class="btn btn-primary btn-md p-1">Fund wallet</a></td>
      <td><a href="<?php echo base_url()?>admin/deletedata?id=<?= $row['user_id'];?>" class="btn btn-secondary btn-md p-1">Delete account</a></td>
    </tr>

			    										  <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>