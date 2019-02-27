<!-- TRAITEMENT DU FORMULAIRE -->
<!-- RECUPERATION DES DONNEES A AFFICHER -->
<div class="section-image" data-image="../../assets/img/bg5.jpg" ;="">
    <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="card ">
                        <div class="card-header ">
                            <div class="card-header">
                                <h4 class="card-title">Edit Profile</h4>
                                <p><?php echo $message; ?></p>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" name="profile_company" disabled="" placeholder="Company" value="Administrator School">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="profile_username" placeholder="Username" value="<?php echo $username; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="profile_email" placeholder="Email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="profile_surname" placeholder="Company" value="<?php echo $surname; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="profile_name" placeholder="Last Name" value="<?php echo $name; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="profile_adress" placeholder="Home Address" value="<?php echo $adress; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="profile_city" placeholder="City" value="<?php echo $city; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="profile_country" disabled placeholder="Country" value="France">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control" name="profile_cp" value="<?php echo $cp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="4" cols="80" name="profile_about" class="form-control" placeholder="Here can be your description" value="<?php echo $aboutme; ?>"><?php echo $aboutme; ?>
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="update" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-header no-padding">
                        <div class="card-image">
                            <img src="../../assets/img/full-screen-image-3.jpg" alt="...">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../../assets/img/default-avatar.png" alt="...">
                                <h5 class="card-title">Tania Keatley</h5>
                            </a>
                            <p class="card-description">
                                michael24
                            </p>
                        </div>
                        <p class="card-description text-center">
                            Hey there! As you can see,
                            <br> it is already looking great.
                        </p>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="button-container text-center">
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-facebook-square"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-google-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>