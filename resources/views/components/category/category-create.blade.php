<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Create Category</h6>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Category Name *</label>
                                <input type="text" class="form-control" id="categoryNameInput">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Save()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script>
    async function Save() {
        let categoryName = document.getElementById('categoryNameInput').value;
       
       if (categoryName.length === 0) {
            errorToast("Customer Name Required!");
            return;
        }

        // Try to submit data
        try {            
            showLoader();

            let res = await axios.post("/create-category", { 
                name: categoryName
            });

            hideLoader();

            if (res.status === 200) {
                successToast(res.data.message || "Category Created!");
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request failed!");
            }
            document.getElementById('modal-close').click();

        } catch (err) {
            hideLoader();
            if (err.response?.status === 422) {
                let errors = err.response.data.error;
                for (let field in errors) {
                    errorToast(errors[field][0]);
                }
            } else {
                errorToast(err.response?.data?.message || "Something went wrong!");
            }
        }
    }


</script>
