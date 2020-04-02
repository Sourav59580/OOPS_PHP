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
<style>
body{
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>
<body>
    
    <form>
    <input type="file" name="file" accept="image/*" multiple="multiple" class="form-control mb-3" id="file">
    <button type="submit" class="btn btn-danger btn-md">Submit</button>
    </form>
    <p></p>

    <script>
    $(document).ready(function(){
        $("#file").on("change",function(){
           var formdata =  new FormData();
          var i;
          for(i=0;i<this.files.length;i++)
          {
              formdata.append("data[]",this.files[i]);
          }

          $.ajax({
              type : "POST",
              url : './result.php',
              data : formdata,
              processData : false,
              contentType : false,
              cache : false,
              xhr :function(){
                  var request = new XMLHttpRequest();
                  request.upload.onprogress = (e)=>{
                      var loaded = Math.floor(e.loaded);
                      var total = Math.floor(e.total);
                      var percentage = Math.floor((loaded*100)/100);
                      $("p").html(percentage);
                  }
                  return request;

              },
              success : function(response){
                  var r = JSON.parse(response);
                  var i;
                  for(i=0;i<r.length;i++)
                  {
                      document.write(r[i]+"<br>");
                  }
              }
          })

        });
    })
    
    </script>
</body>
</html>