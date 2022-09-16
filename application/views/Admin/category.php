<div class="container">
    <div class="row mt-5">
        <div class="col-md-10">
            <h2>Category</h2>
        </div>
        <div class="col-md-2">
            <a href="<?= base_url('admin/add_category') ?>" class="btn btn-primary">Add Category</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Category Id </th>
                        <th scope="col">Category Name </th>
                        <th scope="col">Added On </th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($data['0'])){
                            $sno=1;
                            foreach($data as $list){
                                if($list->status == 1 || $list->status==0){
                    ?>
                    <tr>
                        <td scope="col"><?= $sno++; ?></td>
                        <td scope="col"><?= $list->category_name; ?></td>
                        <td scope="col"><?= $list->added_on; ?></td>
                        <td scope="col">
                            <a href="<?= base_url("admin/edit_category/".$list->cat_id."") ?>" class="edit_cat">Edit</a>/
                            <?php
                                if($list->status==1){
                                    echo "<a href='".base_url('admin/status/0/category/'.$list->cat_id.'')."' onclick='data()'>Active</a>/";
                                }else{
                                    echo "<a href='".base_url('admin/status/1/category/'.$list->cat_id.'')."'>Deactive</a>/";
                                }
                            ?>
                            <a href="<?= base_url("admin/status/-1/category/".$list->cat_id."") ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                            }}
                        }else{
                    ?>
                            <tr>
                                <td>Data Not Found ! </td>
                            </tr>
                            
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

