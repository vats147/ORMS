<!-- write code for table which have 4 column and 3 row in html -->
<!-- write code for table which have 4 column and 3 row in html -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
        <label>First Name</label>
        <form id="ad-form">
        <input type="text" name="fname" id="fname">
        
        <label>Last Name</label>
        <input type="text" name="lname" id="lname">
        <button id="save" type="submit">Submit</button>
    </form>
    <br>
    <br>

    <button id="show-data">Load Data</button>
    <table  id="table-data"  border="1" width="100%">
        <tr>
        <th>PromoId</th>
        <th> PromoCode</th>
        </tr>    
        <tr>
        <td>1</td>
        <td> 123</td>
        </tr>
    </table>

    
</body>
</html>


<script>
    $(document).ready(function(){

        function loadTable(){
            $.ajax({
                url: "ajax_load.php",
                type: "POST",
                success: function(data){
                    $("#table-data").html(data);
                }
            });
        }
        loadTable();
        $("#save").on("click",function(e){
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            $.ajax({
                url: "ajaxinsert.php",
                type: "POST",
                data: {fname:fname,lname:lname},
                success: function(data){
                    if(data==1){
                    loadTable();
                    $("#ad-form").trigger("reset");
                }
                else{
                    alert("Cn't dave ");
                }
                }
            });
        });
        $(document).on("click",".delete-btn",function(){
            var id = $(this).data("id");
            $.ajax({
                url: "ajaxdelete.php",
                type: "POST",
                data: {id:id},
                success: function(data){
                    if(data==1){
                    loadTable();
                    alert("dleted");
                }
                else{
                    alert("Cn't delete ");
                }
                }
            });
        });
        });

    

    
 
//   $("#show-data").on("click", function(e){
//     $.ajax({
//       url : "ajax_load.php",
//       type : "POST",
//       success : function(data){
//         $("#table-data").html(data);
//        }
//     });
//     });

   
// $.ajax({
//     url: 'ajaxyoutube.php',
//     type: 'POST',
//     data: {url: 'https://www.youtube.com/watch?v=QH2-TGUlwu4'},
//     success: function(data) {
//         console.log(data);
//     }
// });


</script>
