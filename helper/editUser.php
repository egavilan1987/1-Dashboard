https://bootsnipp.com/snippets/featured/vertical-admin-menu-single-page-jquery

*******************************************************************************************************************************

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Profile Settings</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Change Passworld</a></li>
            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">
                  <!-- DataUsers Card-->

            
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
        <div class="col-md-9 well admin-content" id="widgets">
                        <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



************************************************************************************************************************




-
"Profile + change password"

https://bootsnipp.com/snippets/8M3Zn



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container">
            <div class="row">
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cambia tu clave</h3>
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Clave actual:</td>
                                        <td>
                                            <input
                                            icon="password-icon"
                                            name="password"
                                            type="password"
                                            value=''
                                            focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Calve nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repita clave nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                          
                            <a href="#" onClick={props.handleSubmitPass} class="btn btn-primary ml-2">Cambiar clave</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cambia tu clave</h3>
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Clave actual:</td>
                                        <td>
                                            <input
                                            icon="password-icon"
                                            name="password"
                                            type="password"
                                            value=''
                                            focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Calve nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repita clave nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                          
                            <a href="#" onClick={props.handleSubmitPass} class="btn btn-primary ml-2">Cambiar clave</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

-

********************************************************************************************************
PROFILE IMAGE



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container">
            <div class="row">
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cambia tu clave</h3>
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Clave actual:</td>
                                        <td>
                                            <input
                                            icon="password-icon"
                                            name="password"
                                            type="password"
                                            value=''
                                            focus
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Calve nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repita clave nueva:</td>
                                        <td>
                                            <Input
                                            icon="password-icon"
                                            name="newPassword"
                                            type="password"
                                            value=''
                                            />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                          
                            <a href="#" onClick={props.handleSubmitPass} class="btn btn-primary ml-2">Cambiar clave</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cambia tu clave</h3>
                            <table class="table table-user-information ">
                                <dl class="form-group edit-profile-avatar mr-4 float-right">
  <dt><label for="upload-profile-picture">Profile picture</label></dt>
  <dd class="avatar-upload-container clearfix">
    <img class="avatar rounded-2" src="https://avatars3.githubusercontent.com/u/29561850?s=400&amp;u=d29c527f6afa334781a92b5ee88cfad35ffd1d00&amp;v=4" width="200" height="200" alt="@egavilan1987" />
    <div class="avatar-upload">
      <label class="position-relative btn button-change-avatar mt-3 width-full text-center">
        Upload new picture
        <input id="upload-profile-picture" type="file" class="manual-file-chooser width-full height-full ml-0 js-manual-file-chooser">
      </label>

      <div class="upload-state loading">
        <button type="button" class="btn mt-3 width-full text-center" disabled>
          <img width="16" height="16" alt="" class="v-align-text-bottom" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" /> Uploading...
        </button>
      </div>

      <div class="upload-state text-red file-empty">
        This file is empty.
      </div>

      <div class="upload-state text-red too-big">
        Please upload a picture smaller than 1 MB.
      </div>

      <div class="upload-state text-red bad-dimensions">
        Please upload a picture smaller than 10,000x10,000.
      </div>

      <div class="upload-state text-red bad-file">
        We only support PNG, GIF, or JPG pictures.
      </div>

      <div class="upload-state text-red failed-request">
        Something went really wrong and we can’t process that picture.
      </div>

      <div class="upload-state text-red bad-format">
        File contents don’t match the file extension.
      </div>
    </div> <!-- /.avatar-upload -->
  </dd>
</dl>
                            </table>                          
                            <a href="#" onClick={props.handleSubmitPass} class="btn btn-primary ml-2">Cambiar clave</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>





