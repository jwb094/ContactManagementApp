     filter search - contact list partia2l.blade
     <div class="accordion" id="accordionExample">
         <div class="accordion-item">

             <h2 class="accordion-header" id="headingOne">
                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">

                     Filter Search option
                 </button>
             </h2>

             <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

                 <div class="accordion-body">

                     <form action="/register" method="POST">

                         <div class="row">

                             <div class="col-2 mb-3">
                                 <input type="text" class="form-control" name="first_name" placeholder="First Name">
                             </div>

                             <div class="col-2 mb-3">
                                 <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                             </div>

                             <div class="col-2 mb-3">
                                 <input type="text" class="form-control" name="email" placeholder="Email">
                             </div>

                             <div class="col-2 form-check">
                                 <input class="form-check-input" type="checkbox" id="checkTwitter">
                                 <label class="form-check-label" for="checkTwitter">
                                     Twitter
                                 </label>
                             </div>

                             <div class="col-2 form-check">
                                 <input class="form-check-input" type="checkbox" id="checkLinkedin">
                                 <label class="form-check-label" for="checkLinkedin">
                                     LinkedIn
                                 </label>
                             </div>

                             <div class="col-2 form-check">
                                 <input class="form-check-input" type="checkbox" id="checkFacebook">
                                 <label class="form-check-label" for="checkFacebook">
                                     Facebook
                                 </label>
                             </div>

                         </div>

                     </form>

                 </div>
             </div>

         </div>
     </div>
