<?php  
if(isset($_POST["id"]))  
{   
// $connect = mysqli_connect("localhost", "root", "", "dashboard_savasaachi");  
require('connection.php');
$query =   "SELECT *FROM business
WHERE id = '".$_POST["id"]."'";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))  
{  

?>
<div class="modal-body" id="content_detail">
<p><?php echo $row["name"];?></p>

<table class="table table-bordered text-center ">
    <tbody class="table-break">
        <tr class="">
            <th class="text-left">Facebook</th>
            <td> <input id="fb_user" value="<?php echo $row["fb_user"];?>" onclick="fb_user()" readonly></td>
            <td> <input id="fb_pass" value="<?php echo $row["fb_pass"];?>" onclick="fb_pass()" readonly></td>
        </tr>
        <tr>
            <th class="text-left">Twitter</th>
            <td> <input id="twitter_user" value="<?php echo $row["twitter_user"];?>" onclick="twitter_user()" readonly></td>
            <td> <input id="twitter_pass" value="<?php echo $row["twitter_pass"];?>" onclick="twitter_pass()" readonly></td>
        </tr>
        <tr>
            <th class="text-left">Instagram</th>
            <td> <input id="insta_user" value="<?php echo $row["insta_user"];?>" onclick="insta_user()" readonly></td>
            <td> <input id="insta_pass" value="<?php echo $row["insta_pass"];?>" onclick="insta_pass()" readonly></td >
        </tr>
        <tr>
            <th class="text-left">Email</th>
            <td> <input id="email_user" value="<?php echo $row["email_user"];?>" onclick="email_user()" readonly></td>
            <td> <input id="email_pass" value="<?php echo $row["email_pass"];?>" onclick="email_pass()" readonly></td>
        </tr>
    </tbody>
</table>
<div class="social">
    <ul>
        <li><a href="https://<?php echo $row["trip_url"];?>">TripAdvisor</a></li>
        <li><a href="https://<?php echo $row["website_url"];?>">Website</a></li>
    </ul>
</div>

</div>
<?php
}
}

?>



<script>
function fb_user() {
  var copyText = document.getElementById("fb_user");
  copyText.select();
  document.execCommand("copy");
  copyText.$('[data-toggle="tooltip"]').tooltip();
}

function fb_pass() {
  var copyText = document.getElementById("fb_pass");
  copyText.select();
  document.execCommand("copy");
}

function twitter_user() {
  var copyText = document.getElementById("twitter_user");
  copyText.select();
  document.execCommand("copy");
}

function twitter_pass() {
  var copyText = document.getElementById("twitter_pass");
  copyText.select();
  document.execCommand("copy");
}

function insta_user() {
  var copyText = document.getElementById("insta_user");
  copyText.select();
  document.execCommand("copy");
}

function insta_pass() {
  var copyText = document.getElementById("insta_pass");
  copyText.select();
  document.execCommand("copy");
}

function email_user() {
  var copyText = document.getElementById("email_user");
  copyText.select();
  document.execCommand("copy");
}

function email_pass() {
  var copyText = document.getElementById("email_pass");
  copyText.select();
  document.execCommand("copy");
}

</script>