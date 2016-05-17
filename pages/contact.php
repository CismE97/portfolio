<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2 class="text-center"> - Contact - </h2>
                <p class="info <?php if(isset($class)){echo $class;}?>"><strong><?php if(isset($info)){echo $info;}?></strong></p>
                <form method="post" action="#contact" id="contactForm">
                  <div class="form-group">
                    <label for="email">E-Mail *</label>
                    <input type="email" name="email" id="email" placeholder="E-Mail" class="form-control" required="">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="fname">Prénom</label>
                        <input type="text" name="fname" id="fName" placeholder="Prénom" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lname">Nom</label>
                        <input type="text" name="lname" id="lname" placeholder="Nom" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
            <label for="textContent">Texte *</label>
            <textarea name="textContent" id="textContent" placeholder="Texte" class="form-control" rows="5"></textarea>
          </div>
          <p class="text-primary">* Champs obligatoires</p>
          <p class="text-center"><button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg ">
            Envoyer !
          </button></p>
		</form>        
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        </div>
    </section>