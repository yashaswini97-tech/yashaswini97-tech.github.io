
<?php include "header.php"; ?>
<div class="maint">
<div class="container">
    <section class="top">
   
  
       <img src="assets/images/animated-writer-image-0007.gif"  style="position: relative;float:right">
       
    </section>
<form id="regForm" name="google-sheet2" method="POST" >
    <div class="tab">What is your name?<br/><br/>
          <p><input type="text" placeholder="" oninput="this.className = ''" autocomplete="off" name="Please Enter your name again" value=""></p>
          <h6 style="color:white"> First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Middle Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surname</h6>
          </div>
          <div class="tab">What is your mail id?<br/><br/>
            <p><input type="email" idplaceholder="" oninput="this.className = ''" autocomplete="off" name="Enter Your mail id" id="Email" value="">
            <span id="Emails" class="test-danger font-weight-bold" style="color:red"></span>	
          </p>
            
            </div>
            <div class="tab">What is your mobile number?<br/><br/>
              <p><input type="number" placeholder="" oninput="this.className = ''" autocomplete="off" name="Enter Your mobile number"  id="Phone" value="">
              <span id="mobile" class="text-danger font-weight-bold" style="color: red; font-size: 10pt"></span>
            </p>
              </div>
              <div class="tab">Why does a product/ service need advertising and marketing?<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="Why does a product/ service need advertising and marketing?" value=""></p>

        </div>
        <div class="tab">What is the ultimate purpose of marketing?<br/>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="What is the ultimate purpose of marketing?" value="Create intriguing content"> Create intriguing content</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="What is the ultimate purpose of marketing?" value="Get people’s attention on your product or service"> Get people’s attention on your product or service</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="What is the ultimate purpose of marketing?" value="To know your ideal target audience"> To know your ideal target audience</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="What is the ultimate purpose of marketing?" value="To set the price of the product or service you offer"> To set the price of the product or service you offer</p>
        </div>
        <div class="tab">Which is the hub of Influencer marketing?<br/>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which is the hub of Influencer marketing?" value="Instagram"> Instagram</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which is the hub of Influencer marketing?" value="Facebook"> Facebook</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which is the hub of Influencer marketing?" value="Youtube"> Youtube</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which is the hub of Influencer marketing?" value="Twitter"> Twitter</p>
        </div>
        <div class="tab">Which of the following is NOT the strength of a Marketing person?<br/>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which of the following is NOT the strength of a Marketing person?" value="Flexibility"> Flexibility</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which of the following is NOT the strength of a Marketing person?" value="Ability to Influence"> Ability to Influence</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which of the following is NOT the strength of a Marketing person?" value="Interrupting a customer"> Interrupting a customer</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Which of the following is NOT the strength of a Marketing person?" value="Tactical Thinking"> Tactical Thinking</p>
        </div>
        <div class="tab"> Expand the abbreviation CPM-
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Expand the abbreviation CPM" value="Characters Per Minute"> Characters Per Minute</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Expand the abbreviation CPM" value="	Copies per Month"> Copies per Month</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Expand the abbreviation CPM" value="	Cost per Million"> Cost per Million</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Expand the abbreviation CPM" value="Cost per Mile"> Cost per Mile</p>
        </div>
        <div class="tab">What is your gratest strength? what is your gratest weakness?<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="What is your gratest strength? what is your gratest weakness?" value=""></p>
        </div>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Choose the right verb form- I am exhausted. I think I am …………….. take a break for a while. (go)

            <p><input type="radio" placeholder="" oninput="this.className = ''" name="I am exhausted. I think I am …………….. take a break for a while(go)" value="Going"> Going</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="I am exhausted. I think I am …………….. take a break for a while(go)" value="To go"> To go</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="I am exhausted. I think I am …………….. take a break for a while(go)" value="	Going to"> Going to</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="I am exhausted. I think I am …………….. take a break for a while(go) " value="Go to"> Go to</p>
        </div>
        <div class="tab"> Jack …………his new mobile phone.
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Jack …………his new mobile phone" value="Did lost"> Did lost</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Jack …………his new mobile phone" value="Has lost"> Has lost</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Jack …………his new mobile phone" value="Is losing"> Is losing</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Jack …………his new mobile phone" value="Loses"> Loses</p>
        </div>



        <div class="tab"> Highest consumer internet traffic is through which medium?
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Highest consumer internet traffic is through which medium?" value="Audio"> Audio</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Highest consumer internet traffic is through which medium?" value="Video"> Video </p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Highest consumer internet traffic is through which medium?" value="Text"> Text</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Highest consumer internet traffic is through which medium?" value="Multimedia"> Multimedia</p>
        </div>
        <div class="tab">Mention a few promotion activities you would practice to get your customer’s attention for the longest time.<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="Mention a few promotion activities you would practice to get your customer’s attention for the longest time" value=""></p>
        </div>
        <div class="tab">Are digital marketing and social media marketing the same?<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="Are digital marketing and social media marketing the same?" value=""></p>
        </div>
        <div class="tab">Name a few marketing tools used in digital marketing.<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="Name a few marketing tools used in digital marketing" value=""></p>
            <!-- <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
        </div>
        <div class="tab" aria-required="true"> statements: Some actors are singers. All the singers are dancers. Conclusions: Some actors are dancers.<br/> No singer is actor.
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Some actors are singers. All the singers are dancers" value="Only (1) conclusion follows">Only (1) conclusion follows</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Some actors are singers. All the singers are dancers" value="Physical Environment, Power, Produce, Promotion">Only (2) conclusion follows</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Some actors are singers. All the singers are dancers" value="Either (1) or (2) follows">Either (1) or (2) follows</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Some actors are singers. All the singers are dancers" value="Both (1) and (2) follow">Both (1) and (2) follow</p>
        </div>
        <div class="tab" aria-required="true">Marketing mix or the divisible steps of marketing are:
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Marketing mix or the divisible steps of marketing are" value="Process, People, Place, Promotion"> Process, People, Place, Promotion</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Marketing mix or the divisible steps of marketing are" value="Physical Environment, Power, Produce, Promotion"> Physical Environment, Power, Produce, Promotion</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Marketing mix or the divisible steps of marketing are" value="product, price, place, and promotion"> product, price, place, and promotion</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="Marketing mix or the divisible steps of marketing are" value="Position, Proof, Promotion, People"> Position, Proof, Promotion, People</p>
        </div>
        <div class="tab">Developing a marketing strategy acts to your competitive advantage. Tell us why?<br/><br/><br/><br/><br/>
            <p><input type="text" placeholder="" oninput="this.className = ''" name="Developing a marketing strategy acts to your competitive advantage Tell us why?" value=""></p>
        </div>

        <div class="tab">One feature of Google’s algorithm helps determine the topic of a given web page and it is-
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="One feature of Google’s algorithm helps determine the topic of a given web page and it is" value="Disavow"> Disavow</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="One feature of Google’s algorithm helps determine the topic of a given web page and it is" value="Semrush"> Semrush </p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="One feature of Google’s algorithm helps determine the topic of a given web page and it is" value="SEO"> SEO</p>
            <p><input type="radio" placeholder="" oninput="this.className = ''" name="One feature of Google’s algorithm helps determine the topic of a given web page and it is" value="Buzzsumo"> Buzzsumo</p>
        </div>
        <div class="tab">
            Send your Resume to hr@rinex.ai
            To submit your answer Click on Submit
        </div>
    <!-- <div class="tab">Name:
      <p><input placeholder="First name..." oninput="this.className = ''"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">Contact Info:
      <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
      <p><input placeholder="Phone..." oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">Birthday:
      <p><input placeholder="dd" oninput="this.className = ''"></p>
      <p><input placeholder="mm" oninput="this.className = ''"></p>
      <p><input placeholder="yyyy" oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">Login Info:
      <p><input placeholder="Username..." oninput="this.className = ''"></p>
      <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div> -->
    
    <div class="butn"style="overflow:auto;">
   
        <button class="btn"type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="btn" name="submit" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> 
          <button type="submit" class="btn" id="submitbtn" >Submit</button>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  
 
 
</div>

</form>
<!-- <script>
  function validate() {

var p = document.forms["regForm"]["Phone"].value;
var e = document.forms["regForm"]["Email"].value;


var regex = /^[a-zA-Z]+$/;
var em = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

if ((isNaN(p)) || (p == "") || (p.length != 10)) {
    document.getElementById("mobile").innerHTML = "*Please enter your correct mobile number";
    return false;
}
if ((!e.match(em)) || (e == "")) {
    document.getElementById("Emails").innerHTML = "*Please enter valid email id";
    return false;
}


  </script> -->
<script>
    
    var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
           
            if (n == (x.length - 1)) {
                document.getElementById("submitbtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("submitbtn").style.display = "none";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <!-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzJHWyHHfCCjwKrRw6twbzybqTCYkgrpzbETckRc631I31qi3Y/exec'
  const form = document.forms['google-sheet2']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    //   .then(response => console.log('Success!', response))
      then(response => alert("Thank you, Your answer has been submitted successfully. Our team will get back to you."))
      .catch(error => console.error('Error!', error.message))
  })
</script> -->
<script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzbSjcN4liOfUy6jIl1HfCGfS5B1NcCBfMFfFPg9QBk2CR0roIc/exec'
            const form = document.forms['google-sheet2']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thank you, Your answer has been submitted successfully. Our team will get back to you."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>

</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php include "footer.php"; ?>
</body>
</html>