<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2 class="text-center"> - Contact - </h2>
                <form method="post" action="/contact" id="contactForm">
                  <div class="form-group">
                    <label for="email">E-Mail *</label>
                    <input type="email" name="email" id="email" placeholder="E-Mail" class="form-control" required="">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="fname">Prénom</label>
                        <input type="text" name="fname" id="fName" placeholder="Prénom" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lname">Nom</label>
                        <input type="text" name="lname" id="lname" placeholder="Nom" class="form-control" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
            <label for="textContent">Texte *</label>
            <textarea name="textContent" id="textContent" placeholder="Texte" class="form-control" rows="5"></textarea>
          </div>
          <p class="text-primary">* Champs obligatoires</p>
          <button type="submit" class="btn btn-primary btn-lg ">
            Envoyer !
          </button>
        </form>        
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        </div>
    </section>