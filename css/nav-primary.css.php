body > header > nav.primary { margin-top:0px; margin-bottom:0px; }
body > header > nav.primary > ul { width:100%; text-align:right; }
body > header > nav.primary > ul > li { vertical-align:top; padding-top:34px; }
body > header > nav.primary > ul > li:not(:last-of-type):not(.homepage) { margin-right:1px; }
body > header > nav.primary > ul > li.homepage, body > header > nav.primary.loggedIn > ul > li.homepage { position:absolute; top:0px; padding-top:20px; }
body > header > nav.primary > ul > li a { padding-bottom:6px; }
body.events > header > nav.primary  > ul > li.events a { border-bottom:1px solid <?php echo $blue; ?>; }
body.plan-your-trip > header > nav.primary  > ul > li.plan a { border-bottom:1px solid <?php echo $blue; ?>; }
body > header > nav.primary.loggedIn > ul > li.rsvp { padding-top:0px; }
body > header > nav.primary > ul > li.rsvp a { padding:36px 13px 20px 13px; display:inline-block; background-color:<?php echo $orange; ?>; overflow:hidden; }
body > header > nav.primary > ul > li.rsvp.complete a { background-color:<?php echo $green; ?>; }
body > header > nav.primary > ul > li.rsvp a span { color:white; padding-bottom:5px; display:inline-block; }
body > header > nav.primary > ul > li.rsvp a:hover { border-bottom:none; }
body.rsvp > header > nav.primary > ul > li.rsvp a,
body.rsvpConfirmation > header > nav.primary > ul > li.rsvp a,
body:not(.rsvp):not(.rsvpConfirmation) > header > nav.primary > ul > li.rsvp a:hover { padding-bottom:19px; }
body > header > nav.primary > ul > li.rsvp a:hover span,
body.rsvp > header > nav.primary  > ul > li.rsvp a span,
body.rsvpConfirmation > header > nav.primary  > ul > li.rsvp a span { border-bottom:1px solid white; }
body > header > nav.primary > ul > li.logo a img { height:50px; }

@media (min-width:<?php echo $iphone5; ?>px) {
  body > header > nav.primary > ul > li:not(:last-of-type):not(.homepage) { margin-right:10px; }
}
@media (min-width:<?php echo $iphone6; ?>px) {
  body > header > nav.primary > ul > li:not(:last-of-type):not(.homepage) { margin-right:25px; }
}
@media (min-width:<?php echo $mobile2; ?>px) {
  body > header > nav.primary > ul > li:not(:last-of-type):not(.homepage) { margin-right:35px; }
}
@media (min-width:<?php echo $mobile3; ?>px) {
  body > header > nav.primary > ul > li { padding-top:34px; }
  body > header > nav.primary.loggedIn > ul > li { padding-top:43px; }
  body > header > nav.primary > ul > li.homepage { left:40px; }
  body > header > nav.primary > ul > li.logo a img { height:70px; }
  body > header > nav.primary > ul > li.rsvp a { padding:43px 13px 20px 13px; }
}

body > header > nav.primary > ul > li.homepage, body > header > nav.primary.loggedIn > ul > li.homepage {
  left:<?php echo $padding_mobile; ?>;
}

@media (min-width:<?php echo $mobile3; ?>px) {
  body > header > nav.primary > ul > li.homepage, body > header > nav.primary.loggedIn > ul > li.homepage {
    left:<?php echo $padding_mobile3; ?>;
  }
}

@media (min-width:<?php echo $ipadLandscape; ?>px) {
  body > header > nav.primary > ul > li.homepage, body > header > nav.primary.loggedIn > ul > li.homepage {
    left:<?php echo $padding_ipadLandscape; ?>;
  }
}