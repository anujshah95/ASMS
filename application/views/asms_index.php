<!DOCTYPE html>
<html>

<form action="<?php echo base_url(); ?>index.php/asms/home/guest_feedback" method="POST" name="guest_feedback_form">
  <div class="feedback">
    <a id="feedback_button"><img src="<?php echo base_url(); ?>assets/images/feedback.png"></a>
      <div class="form">
          <input type="text" name="name1" placeholder="Your Good Name" size="35" class="span" required><br><br>
          <input type="email" name="email1" placeholder="Email Address" size="35" class="span" required><br><br>
          <input type="number" name="contact_number1" placeholder="Contact Number" min="7" style="width:360px" class="span" required><br><br>
          <select id="subject1" name="subject1" class="span" style="width:380px" required>
                <option selected disabled value=""> Choose Feedback Category </option>
                <option value = "love_products"> Love the all new products. </option>
                <option value = "can_better"> Can get better </option>
                <option value = "add_feature"> Add some more feature </option>
                <option value = "issue_page"> Issue with the page / Report a bug</option>
                <option value = "retailer_request_issue"> Retailer request issue </option>
                <option value="login" class="span"> Login related</option>
                <option value="products"> Products </option>
                <option value="other"> Other - Speak out your heart </option>
          </select><br><br>
          <textarea name="comments" placeholder="Your Comments..." cols="35" class="span" rows="5" required></textarea><br><br>
 
          <input type="submit" name="submit" class="btn" >&nbsp;&nbsp;
          <button type="cancel" class="btn" onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
          Cancel</button>
 
      </div>
  </div>
</form>


</body>

</html>