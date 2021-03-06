<?php
set_include_path($_SERVER["DOCUMENT_ROOT"]."/shalomshanti/");
if (!isset($session)) {
  require_once "Controller/SessionController.php";
  $session = SessionController::getSession();
}

// Due date is set to midnight of next day; subtract 1 millisecond to get the due date
if ($session->user->rsvp->dueDate->getTimestamp() < time()) {
  $rsvpDate = "Please respond at your earliest convenience";
} else {
  $rsvpDate = "You can edit your response until ".date(
    "M\&\\n\b\s\p\;jS",
    $session->user->rsvp->dueDate->getTimestamp() - 1
  );
}


if ($session->user->rsvp->hasRSVPed && $session->user->rsvp->isComing()) {
  $message = "Thanks for responding! We can’t wait to see you at our wedding. {$rsvpDate}.";
} else if ($session->user->rsvp->hasRSVPed) {
  $message = "Thanks for responding! We’ll miss having you at our wedding. {$rsvpDate}.";
} else {
  $message = "Please respond below with the name of each guest who will be attending. If you cannot attend, just leave the form blank. Either way, don't forget to click \"Save Response\" when you are done. {$rsvpDate}.<br><br>Hope to see you&nbsp;there!";
}
$daysRemaining = (
  ($session->user->rsvp->dueDate->getTimestamp() - 1 - time()) < 0) ?
  0 :
  ceil(($session->user->rsvp->dueDate->getTimestamp() - 1 - time())/86400);
?>
<h1 class="typ-pageTitle">RSVP</h1>
<p class="daysRemaining typ-caption"><?php echo $daysRemaining; ?> Day<?php echo $daysRemaining !== 1 ? "s" : "";?> Remaining<?php if ($daysRemaining === 1.0) echo "!<br>(Let us know if you're having trouble finalizing plans.)"; ?></p>
<p class="householdName typ-subsection-header"><em><?php echo $session->user->household_name; ?></em></p>
<p class="typ-subsection-header"><?php echo $message; ?></p>
