<div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            <h2>Add Post</h2>
        </div>
    </div>
    <hr>
    <div class="col-md-12 m-auto p-5 bg-light">
        <form class="">
            <div class="form-group">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="10" rows="5" class="w-100"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select type="text" class="form-control" id="category" name="category">
                        <option value="">Select Option </option>
                        <option value="1">Category 1 </option>
                        <option value="2">Category 2 </option>
                        <option value="3">Category 3 </option>
                        <option value="4">Category 4 </option>
                        <option value="5">Category 5 </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="img" name="img">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select type="text" class="form-control" id="status" name="status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>