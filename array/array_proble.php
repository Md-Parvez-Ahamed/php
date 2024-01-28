<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Problem</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

    <form action="price_list.php" method="post">
        <label for="">Package Title :</label>
        <input type="text" name="title" id=""><br/>

        <label for="">Package Price :</label>
        <input type="text" name="price" id=""><br/>

        <label for="">Package Plan :</label>
        <input type="text" name="plan" id=""><br/>
        
        <div class="field_wrapper">
            <div>
                <input type="text" name="field_name[]" value=""/>
                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>

        <div class="">
            <div>
                <!-- <input type="text" name="field_name[]" value=""/>
                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa-solid fa-plus"></i></a> -->
                <button type="submit">Save</button>
            </div>
        </div>
    </form>

<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fa-solid fa-minus"></i></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>
</body>
</html>