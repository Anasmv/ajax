<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
    function showArea(sel) {
        var state_id = sel.options[sel.selectedIndex].value;
        if (state_id.length > 0) {
            $.ajax({
            type: "POST",
            url: "ajx/fetch_area_serch.php",
            data: "district=" + state_id,
            cache: false,
            beforeSend: function() {
                $('#area').html('<img src="loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {
                $("#area").html(html);
            }
            });	
        }
        else {
            $("#area").html("");
        }
    } 
    </script>
