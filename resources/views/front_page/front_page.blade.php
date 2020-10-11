<!DOCTYPE html>
<html>
<head>
    <title>Multiple data send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
</head>
<body>
<div class="container">
 <br>
 @if(Session::has('success'))
 <div class="alert alert-success">
     {{Session::get('success')}}
 </div>
 @endif
     <form action="/orders" method="POST">
         {{csrf_field()}}
         <section>

             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Product ID</th>
                             <th>Device Name</th>
                             <th>PartsName</th>
                             <th>Parts ID</th>
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td><input type="text" name="ProductID[]" class="form-control" required></td>
         <td><input type="text" name="DeviceName[]" class="form-control" required></td>
           <td><input type="text" name="PartsName[]" class="form-control quantity" required></td>
           <td><input type="text" name="PartsID[]" class="form-control budget"></td>
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
         </section>
     </form>
</div>
<script type="text/javascript">

    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="ProductID[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="DeviceName[]" class="form-control"></td>'+
        '<td><input type="text" name="PartsName[]" class="form-control quantity" required=""></td>'+
        '<td><input type="text" name="PartsID[]" class="form-control budget"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }

    });
</script>
</body>
</html>
