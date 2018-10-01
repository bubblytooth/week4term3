<section>
       <div class="contact container">
            <h1>Contact Us</h1>
            <img src="assets/golfcours4.jpeg" alt="golf course">
      </div>
</section>
<section>
       <form method="post" action="saveContact.php" class="container">
           <div>
                <label class="validForm">Full Name</label>
                <input type="fullName" id="fullName" name="fullName" required>
           </div>
           <div>
                <label class="validForm">Email Address</label>
                <input type="email" id="email" name="email" required>
           </div>
           <div>
                <label class="validForm">City</label>
                <select id="city" name="city">
                      <option value="Vancouver">Vancouver</option>
                      <option value="Surrey" selected>Surrey</option>
                      <option value="Burnaby">Burnaby</option>
                      <option value="Richmond">Richmond</option>
                      <option value="Victoria">Victoria</option>
                      <option value="Prince">Prince George</option>
                      <option value="Kelowna">Kelowna</option>
                      <option value="Kamploops">Kamploops</option>
               </select>
            </div>
            <textarea class="validForm" name="message"> Some Text Here...</textarea>
            <input type="submit" id="doAjax" name="submit" value="Submit" class="sbtBtn" onClick="validateForm()" value="">
      </form>
</section>
<!-------endcontact-------->
