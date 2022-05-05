<section>
    
<div class="card" style="padding:10px;margin-bottom:10px;">
                <div class="table-responsive">
                <h4 class="text-center mt-2">Manage members user wallet balance
                     </h4>
<table class="table mt-5" id="myTable">
 <thead class="thead-light">
    <tr>
      <th scope="col">username</th>
      <th scope="col">Wallet Balance</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($get_balance as $row) : ?>
    <tr  style="margin-top:10px;">
      <td><?= $row['fullname'];?></td>
    <td><?= $row['balance']; ?></td>
      
    </tr>

			    										  <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</section>