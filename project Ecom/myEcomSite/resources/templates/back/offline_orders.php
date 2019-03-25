
 <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Offline Orders

</h1>

<h4 class= "bg-success"><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>Customer id</th>
           <th>Amount</th>
           <th>Status</th>
           <th>Instruction</th>
      </tr>
    </thead>
    <tbody>
        <?php display_offline_orders(); ?>

    </tbody>
</table>
</div>
