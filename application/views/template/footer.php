<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>



<script>
   let table = new DataTable('#datatable1');
</script>



<script>
    $(document).ready(function () {
       $('.confirm_delete').click(function (e){
        e.preventDefault();
        
        confirmDialog = confirm("Are you sure you want to delete this data?");

        if(confirmDialog){
            var id = $(this).val();

            $.ajax({
                type: "DELETE",
                url: "/employee/confirmdelete/" + id,
                success: function (response) {
                    alert("Data Deleted Successfully");
                    window.location.reload();
                }
            });
        }
       });
    });
</script>
