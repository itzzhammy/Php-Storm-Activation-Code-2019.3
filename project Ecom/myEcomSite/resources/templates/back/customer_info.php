
 <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Customers Information

</h1>

<h4 class= "bg-success"><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>EMAIL</th>
           <th>Address</th>
           <th>City</th>
           <th>Country</th>
           <th>Zip-Code</th>
           <th>Phone-No</th>
      </tr>
    </thead>
    <tbody>
        <?php display_customers(); ?>

    </tbody>
</table>
</div>
