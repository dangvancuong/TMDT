<div class=" w3-container">
<h5>Danh sách sản phẩm <a class="w3-right w3-btn w3-text-green" href="index.php?controller=sanpham_create_view">Thêm</a></h5> 
<hr>

    <div class="form-group">
        <div class="input-group"> 
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder=" " class="form-control" /> 
        </div>
    </div>
    <br />
    <div id="result"></div>
</div>



<hr> 
<script>
    $(document).ready(function(){

        load_data();

        function load_data(query) {
            $.ajax({
                url:"controller/controller_sanpham_s.php",
                method:"POST",
                data:{query:query},
                success:function(data) {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>