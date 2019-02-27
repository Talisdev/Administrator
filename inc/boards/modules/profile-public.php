<!-- TRAITEMENT DU FORMULAIRE -->
<!-- RECUPERATION DES DONNEES A AFFICHER -->
<div class="section-image" data-image="../../assets/img/bg5.jpg" ;="">
    <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                    <div class="card ">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <div class="form-control"><?php echo $username; ?></div>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <div class="form-control"><?php echo $email; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <div class="form-control" ><?php echo $surname; ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <div class="form-control" ><?php echo $name; ?></div>
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <div class="form-control"><?php echo $aboutme; ?></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
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
                        <h4>My last projects</h4>
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