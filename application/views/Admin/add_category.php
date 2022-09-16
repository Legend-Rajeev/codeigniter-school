<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <h3>Add Category</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <p class="msg"></p>
    </div>
    <div class="col-md-7 m-auto p-5 mt-5  bg-light">
        <form class="">
            <div class="form-group">
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Category Name :</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Category_name">
                </div>
                <button type="button" class="btn btn-primary" id="add_cat" name="add_cat" >Add </button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        
        $("#add_cat").on("click", function(){

            let cat_name = $("#cat_name").val();
            console.log(cat_name);
            let error_type = "";

            if(cat_name == ""){
                $('.msg').html('Please enter Category Name !');
                error_type = "yes";
            }
            if(error_type == ""){
                $.ajax({
                        url : "save_category",
                        type : "POST",
                        data : {cat_name:cat_name},
                        success : function(data){
                            alert(data);
                            window.location.href = "<?= base_url('Admin/category'); ?>";
                        }
                })
            }
        })
    })

</script>