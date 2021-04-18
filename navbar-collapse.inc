<?php
if ($_SESSION['Category'] == "Administrator") {
?>
<li class="active propClone"><a href="newTransport.php">Insert transport</a></li>
<li class="active propClone"><a href="manageTransport.php">Manage transport system(s)</a></li>
<li class="active propClone"><a href="createAdmin.php">Create admin</a></li>
<li class="active propClone"><a href="orderedTickets.php">View ordered tickets</a></li>
<?php
}
else {
?>
<li class="active propClone"><a href="getNewTicket.php">Get New Ticket</a></li>
<li class="active propClone"><a href="printTicket.php">Print Ticket</a></li>
<li class="active propClone"><a href="cancelTicket.php">Cancel Ticket</a></li>
<li class="active propClone"><a href="viewTicket.php">View my tickets</a></li>
<?php	
}
?>