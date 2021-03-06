<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
    <title>TicketOS</title>
  </head>
  <body>
    <p>Ticket's</p>
        <table border="1">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Create</th>
                     <th>Priority</th>
                     <th>Assigned To</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody><?php
                 foreach($ticket as $value) {?>
                 <tr>
                     <td><?php echo $value['id']?></td>
                     <td><?php echo $value['name']?></td>
                     <td><?php echo $value['description']?></td>
                     <td><?php echo $value['date_submit']?></td>
                     <td><?php echo $value['priority']?></td>
                     <td><?php echo $value['id_user_resolve']?></td>
                     <td>
                          <a href="#" onclick="location='?c=tickets&v=seguimiento&id=<?php echo $value['id']?>'">Add Note</a>
                     </td>
                 </tr>
                 <?php } ?>
             </tbody>
        </table>
        <input type="button" value="Init" class="btn btn-primary" onclick="location='?c=init&v=index'" />
        <input type="button" value="New Ticket" class="btn btn-primary" onclick="location='?c=tickets&v=createticket'" />
  </body>
</html>
