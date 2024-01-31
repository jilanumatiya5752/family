<?php 
include 'main.php';
?>
	<link rel="stylesheet" href="css/db.css"> 
	<link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

	<div class="topic-border color-cinnabar mb-30">
        <div class="topic-box-lg color-cinnabar">Pay Online</div>
	</div>
	<div class="cont"> 
		<form action="#"> 
			<div class="row"> 
				<div class="col"> 
					<h3 class="title"> Billing Address </h3> 
					<div class="inputBox"> 
						<label for="name"> Full Name: </label> 
						<input type="text" id="name"placeholder="Enter your full name"required> 
					</div> 
					<div class="inputBox"> 
						<label for="email"> Email:  </label> 
						<input type="text" id="email" placeholder="Enter email address" required> 
					</div> 
					<div class="inputBox"> 
						<label for="address">  Address:  </label> 
						<input type="text" id="address" placeholder="Enter address" required> 
					</div> 
					<div class="inputBox"> 
						<label for="city">  City:  </label> 
						<input type="text" id="city" placeholder="Enter city" required> 
					</div> 
					<div class="flex"> 

						<div class="inputBox"> 
							<label for="state"> 
								State: 
							</label> 
							<input type="text" id="state"
								placeholder="Enter state"
								required> 
						</div> 

						<div class="inputBox"> 
							<label for="zip"> 
								Zip Code: 
							</label> 
							<input type="number" id="zip"
								placeholder="123 456"
								required> 
						</div> 

					</div> 

				</div> 
				<div class="col"> 
					<h3 class="title">Payment</h3> 

					<div class="inputBox"> 
						<label for="name"> 
							Card Accepted: 
						</label> 
						<img src="img/card.png"
							alt="credit/debit card image"> 
					</div> 

					<div class="inputBox"> 
						<label for="cardName"> 
							Name On Card: 
						</label> 
						<input type="text" id="cardName"
							placeholder="Enter card name"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="cardNum"> 
							Credit Card Number: 
						</label> 
						<input type="text" id="cardNum"
							placeholder="1111-2222-3333-4444"
							maxlength="19" required> 
					</div> 

					<div class="inputBox"> 
						<label for="">Exp Month:</label> 
						<select name="" id=""> 
							<option value="">Choose month</option> 
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option> 
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
						</select> 
					</div> 


					<div class="flex"> 
						<div class="inputBox"> 
							<label for="">Exp Year:</label> 
							<select name="" id=""> 
								<option value="">Choose Year</option> 
								<option value="2023">2023</option> 
								<option value="2024">2024</option> 
								<option value="2025">2025</option> 
								<option value="2026">2026</option> 
								<option value="2027">2027</option> 
							</select> 
						</div> 

						<div class="inputBox"> 
							<label for="cvv">CVV</label> 
							<input type="number" id="cvv"
								placeholder="1234" required> 
						</div> 
					</div> 

				</div> 

			</div> 

			<input type="submit" value="Proceed to Checkout"
				class="submit_btn"> 
		</form> 
	</div> 

<section id="footerSection">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box">
                  <a href="#" class="logo">Kutrim Technology</a>
                  <p class="about">Welcome to our web design agency. Lorem ipsum simply free text dolor sited amet cons cing elit.</p>
                  <div class="social-links">
                     <a href="#"><i class="fab fa-facebook"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#" class="mr-0"><i class="fab fa-github"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
               <div class="footer-box box2">
                  <p class="title">EXPLORE</p>
                  <ul>
                     <li><a href="#">Support</a></li>
                     <li><a href="#">Privacy</a></li>
                     <li><a href="#">Policy</a></li>
                     <li><a href="#">Terms Of Use</a></li>
                     <li class="mb-0"><a href="#">Help</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
               <div class="footer-box box3">
                  <p class="title">CONTACT</p>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="txt">
                        <span>Nandoliyavas, Navavas, Gujarat,India</span>
                     </div>
                  </div>
                  <div class="icon-box">
                     <div class="icon">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="txt">
                        <span>kutrimtech@gmail.com</span>
                     </div>
                  </div>
                  <div class="icon-box mb-0">
                     <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                     </div>
                     <div class="txt">
                        <span>8899776655</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="footer-box box4">
                  <p class="title">NEWSLETTER</p>
                  <form>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                     </div>
                     <button type="submit" class="btn" name="button"><i class="fal fa-envelope"></i></button>
                  </form>
                  <span>Sign up for our latest news & articles. We won’t give you spam mails.</span>
               </div>
            </div>
         </div>
         <div class="copy-right">
            <div class="row">
               <div class="col">
                  <span>Copyright © 2024 kutrim. All rights reserved.</span>
               </div>
            </div>
         </div>
      </div>
   </section>