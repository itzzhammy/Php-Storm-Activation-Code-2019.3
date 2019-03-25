
<?php add_brand(); ?>
<h1 class="page-header">
  Product Brands

</h1>


<div class="col-md-4">

    <h3 class="bg-success"><?php display_message(); ?></h3>

    <form action="" method="post">

        <div class="form-group">
            <label for="brand-title">Title</label>
            <input name="brand_title" type="text" class="form-control">
        </div>

        <div class="form-group">

            <input name="add_brand" type="submit" class="btn btn-primary" value="Add Brand">
        </div>


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
       <?php show_brands_in_admin(); ?>
    </tbody>

        </table>

</div>
