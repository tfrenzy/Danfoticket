<?php
if ($_SESSION['Category'] == "Administrator") {
?>
<li><strong><a href="newTransport.php">Insert new transport system</a></strong></li>
<li><strong><a href="manageTransport.php">Manage existing transport system(s)</a></strong></li>
<li><strong><a href="createAdmin.php">Create administrator account</a></strong></li>
<li><strong><a href="orderedTickets.php">View ordered bus tickets</a></strong></li>
<li><strong><a href="orderedTicketsByService.php">View ordered bus tickets by service</a></strong></li>
<li><strong><a href="soldTickets.php">View sales of tickets</a></strong></li>
<li><strong><a href="cancelledTickets.php">View cancelled tickets</a></strong></li>
</ul>
<?php
}
else {
?>
<ul>
<li><strong><a href="getNewTicket.php">Get New Ticket</a></strong></li>
<li><strong><a href="printTicket.php">Print Ticket</a></strong></li>
<li><strong><a href="cancelTicket.php">Cancel Ticket</a></strong></li>
<li><strong><a href="viewTicket.php">View my tickets</a></strong></li>
<?php	
}
?>