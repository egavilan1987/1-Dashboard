2-MESSAGES

MESSAGES GUI

New message

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#messageModal">New message</button>

<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name"class="font-weight-bold">Subject:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="font-weight-bold">Message:</label>
            <textarea rows="10" class="form-control" id="message-text"></textarea>
          </div>
              <div class="form-group">
                <input type="file" id="exampleInputFile">
              </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

Read a Message


<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
 
 <body class="bg-dark">

	<div class="container bg-light">

		<div class="row">
			
			<div class="col-md-12 p-0">

  <table width='100%' class="table"> <tr> 
					<td colspan='2' bgcolor='#FF9933' class='td_form_titulo'><div align='left' class='Estilo10'> Networkstation Messages </div></td>	   </tr>  <tr><td class='td_form_etiqueta' width='30%'>
				 <b><i> from </i></b> </td><td class='td_form_contenido' >alpena</td></tr><tr><td class='td_form_etiqueta' width='30%'>
				 <b><i>subject</i></b> </td><td class='td_form_contenido' >Emails Vacancy (Refer your friends)</td></tr><tr><td class='td_form_etiqueta' width='30%'>
				 <b><i>datetime </i></b> </td><td class='td_form_contenido' >2018/07/26 12:06:50 PM</td></tr><tr><td class='td_form_etiqueta' width='30%'>
				 <b><i>message</i></b> </td><td class='td_form_contenido' >Good afternoon,<br>
<br>
We have an open vacancy for Emails as a Customer Service Representative. <br>
<br>
Schedule Required: 9:00am to 6:00pm Weekends OFF.<br>
Payment: RD$90.00 per hour after 3 months RD$100.00 + incentives<br>
<br>
Requirements: Excellent Communication and Grammar English Skills.<br>
<br>
Tell your friend t apply!<br>
<br>
Inmediate hiring!<br>
<br>
</td></tr><tr><td class='td_form_etiqueta' width='30%'>
				 <b><i>file</i></b> </td><td class='td_form_contenido' ><a href= http://uranio/intranet/public/SHI/ target=_blank></a></td></tr> </table>				

			</div>

		</div>

	<div class="row">

		<div class="col-md-12 text-center p-2">

		    <form id="form1" name="form1" method="post" action="">
		      		<input type="submit" class="btn btn-danger" name="Delete" id="Delete" value="Delete"
		            onclick="
		                if (!confirm('Are You Sure that do you want to delete this email?','Confirm')){
		                    history.back();
		                    return false;         
		                }else
		                {		  
		                    return true;
		                }
				" 
		            
		            />
		      		<input type="submit" class="btn btn-primary" name="Aceptar" id="Aceptar" value="Close" />
		    </form>

		</div>

	</div>

	</div>
		 


</body>		
</html>
	 
	 





Message Table

