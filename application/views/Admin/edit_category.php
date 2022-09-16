<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <h3>Edit Category</h3>
        </div>
    </div>
    <hr>
    <div class="col-md-7 m-auto p-5 mt-5  bg-light">
        <form class="">
            <div class="form-group">
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Category Name :</label>
                    <input type="hidden" class="form-control" id="cat_id" name="cat_id" placeholder="Category_id" value="<?= $data[0]->cat_id; ?>">
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Category_name" value="<?= $data[0]->category_name; ?>">
                </div>
                <button type="button" class="btn btn-primary" id="update_cat" name="update_cat">Update </button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        
        $("#update_cat").on("click", function(){

            let cat_name = $("#cat_name").val();
            let cat_id = $("#cat_id").val();
            let error_type = "";

            if(cat_name == ""){
                $('.msg').html('Please enter Category Name !');
                error_type = "yes";
            }
            if(error_type == ""){
                $.ajax({
                        url : "../update_category",
                        type : "POST",
                        data : {cat_name:cat_name, cat_id:cat_id},
                        success : function(data){
                            if(data == 1){
                                window.location.href = "<?= base_url("admin/category"); ?>";
                            }
                        }
                })
            }
        })
    })

</script>