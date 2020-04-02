<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="p-5">

    <div class="container">
        <h4 class="mb-4 text-center">www.chitkarauniversity.edu.in</h4>
        <div class="row">
            <div class="col-2 border p-4">
                <button class="btn btn-dark py-2 mb-3 tab" start="0" end="1">Home</button>
                <button class="btn btn-dark py-2 mb-3 tab" start="3" end="4">Service</button>
                <button class="btn btn-dark py-2 mb-3 tab" start="6" end="7">About</button>
                <button class="btn btn-dark py-2 mb-3 tab" start="9" end="10">Contact</button>
            </div>
            <div class="col-10 border result p-3">
                <h4>Home Page</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
   

    <script>
        $(document).ready(function(){
            $(".tab").each(function(){
                $(this).click(function(){
                    var start = $(this).attr("start");
                    var end = $(this).attr("end");
                    $.ajax({
                        type : "POST",
                        url : "./result.php",
                        data : {
                            start : start,
                            end : end
                        },
                        beforeSend : function(){
                            $(".result").html("Please wait....");
                        },
                        success : function(response){
                            $(".result").html(response);
                        }

                    })
                })
            })
        })
    </script>
</body>

</html>