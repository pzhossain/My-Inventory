<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>Customer</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody id="tableList">
                    <tr>
                        <td>1</td>
                        <td>Customer Name</td>
                        <td>customer@email.com</td>
                        <td>01234567899</td>
                        <td><button data-bs-toggle="modal" data-bs-target="#update-modal" 
                            class="float-end btn m-0 bg-gradient-primary">Update</button></td>
                        
                            <td><button data-bs-toggle="modal" data-bs-target="#delete-modal" 
                            class="float-end btn m-0 bg-gradient-primary">Delete</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>