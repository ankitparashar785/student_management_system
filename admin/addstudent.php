

<html>
<head>
    <title></title>
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="studentdetails.css">

<link rel="stylesheet" type="text/css" href="css/addstudent.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Add Student Details</h3>
                             
                                
                                <div class="row register-form">
                                    <form action="insertstudentdata.php" method="post" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" name="fname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="pass" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="cpass" />
                                        </div>
                                   
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                        </div>
                                 
                                        </div><div class="form-group">
                                            <span>UPLOAD IMAGE</span>
                                            <br><br>
                                      <input type="file" name="myfile">
                                        </div>
                                        <div class="form-group">
                                                  </div>
                                        <button type="submit" name='submit' class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>

            </div>
        </body>
            </html>