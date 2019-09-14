<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ARKADEMI BOOTCAMP</title>
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      hr {
        border:none;
        border-top:1px dotted #000;
        color:#fff;
        background-color:#fff;
        height:1px;
        width:100%;
      }
      .img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .center {
        text-align: center;

      }
    </style>
   </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img height="100%" src="logo.png" alt="Arkademy-logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><b>ARKADEMI BOOTCAMP</b></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
      <?php
        include('views/crud/index.php');
      ?>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootbox/bootbox.min.js"></script>

    <!-- script ajax untuk create -->
    <script type="text/javascript">
      $(function () {
        $('.form-data-user').on('submit', function (e) {
          var data = $('.form-data-user').serialize();
          e.preventDefault();
          $.ajax({
            type: 'POST',
            url: "process/create.php",
            data: data,
            success: function(message) {
              callBootbox(message,"<i class='glyphicon glyphicon-ok'></i> Sukses");
              $('#createModal').modal('hide');
              setTimeout(function(){
                   window.location.href='index.php?page=crud/index';
              }, 3000);
            },
            error: function(message) {
              callBootbox(message,"<i class='glyphicon glyphicon glyphicon-remove'></i> Error");

            }
          });
        });
      });
    </script>

    <!-- script ajax untuk edit -->
    <script type="text/javascript">
        var dataId;
        var form;
        function ShowModal(elem){
          dataId = $(elem).data("id");
          form = '.form-edit-data'+dataId;
          $(function () {
          $(form).on('submit', function (e) {
            var data = $(form).serialize();
            e.preventDefault();
            $.ajax({
              type: 'POST',
              url: "process/edit.php",
              data: data,
              success: function(message) {
                callBootbox(message,"<i class='glyphicon glyphicon-ok'></i> Sukses");
                $('#editModal'+dataId).modal('hide');

                setTimeout(function(){
                     window.location.href='index.php?page=crud/index';
                }, 2000);
                
              },
              error: function(message) {
                callBootbox(message,"<i class='glyphicon glyphicon glyphicon-remove'></i> Error");
              }
            });
          });
        });
        }      
    </script>

    <!-- script ajax untuk hapus -->
    <script type="text/javascript">
      $(document).ready(function(){
         
        $('.removeItem').click(function(e){
             
            e.preventDefault();
             
            var pid     = $(this).attr('data-id');
            var parent  = $(this).parent("td").parent("tr");
            var user    = $(this).closest("tr").find('td:eq(0)').text();
            bootbox.dialog({
              size: "small",
              message: "Are you sure you want to Delete ?",
              title: "<i class='glyphicon glyphicon-trash'></i> DELETE DATA",
              buttons: {
                success: {
                  label: "No",
                  className: "btn-success",
                  callback: function() {
                     $('.bootbox').modal('hide');
                  }
                },
                danger: {
                  label: "Delete",
                  className: "btn-danger",
                  callback: function() {
                       
                      $.post('process/delete.php', { 'delete':pid })
                      .done(function(response){
                          bootbox.alert({
                              title   : "<i class='glyphicon glyphicon-ok'></i> Sukses",
                              message : "<img class='img' height='120px' src='checklist.png'><br><br><p class='center' ><b>Data "+user+" Berhasil Dihapus</b></p>",
                              size    : "medium",
                            }
                          );
                          parent.fadeOut('slow');
                      })
                      .fail(function(){
                          bootbox.alert('Something Went Wrog ....');
                      })
                                           
                  }
                }
              }
            });                       
        });        
      });
    </script>

    <!-- script untuk memanggil bootbox -->
    <script type="text/javascript">
      function callBootbox(msg,ttl){
          bootbox.alert({
            title   : ttl,
            message : msg,
            size    : "medium"
          });
      }
    </script>
  </body>
</html>
