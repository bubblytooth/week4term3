<section>
	<div class="reservation container">
		<h1>Make A Reservation</h1>
		<img src="assets/wedding2.jpg" alt="wedding">
	</div>
</section>
<section>
	 <form class="container">
          	 <div>
			 	 <label>Full Name</label>
			 	 <input type="fullName" id="fullName" name="fullName" required>
			 </div>
			 <div>
				 <label>Email Address</label>
				 <input type="email" id="email" name="email" required>
			  </div>
			  <div>
				  <label>Required Dates</label>
				  <input type="date" id="weddingdate" name="weddingdate" required>
			   </div>
			   <div>
			 	    <label>Wedding Guests</label>
			 	    <select id="guestsSize">
				          <option value="50">50</option>
				          <option value="100" selected>100</option>
				          <option value="150">150</option>
				          <option value="200">200</option>
				          <option value="250">250</option>
				     </select>
		       </div>
		       <div>
				     <label>The Banquet Hall</label>
				     <select id="weddinghall">
				 	      <option value="grandhall">The Grand Hall</option>
				          <option value="west" selected>West Coast Lounge</option>
				     </select>
		       </div>
			 	<input type="submit" value="Request Reservation" class="sbtBtn">	
	 </form>
</section>
