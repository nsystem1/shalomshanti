* { box-sizing:border-box; margin-left:auto; margin-right:auto; }
body { overflow-x:hidden; }
html, body, header, main, section, article, footer { margin:0 auto; padding:0; width:100%; }
header, main { z-index:1; position:relative; }
h1, h2, h3, h4, h5, h6 { margin-top:0px; margin-bottom:0px; }
a { text-decoration:none; }
a, a:link, a:hover, a:link, a:active, a span, a:link span, a:hover span, a:link span, a:active span { color:<?php echo $orange; ?>; }
a:hover, a:hover span { color:#c94628; }
nav a, nav a:link, nav a:hover, nav a:link, nav a:active, p, span, h1, h2, h3, h4, h5, h6 { color:<?php echo $blue; ?>; }
ul, nav ul { list-style-type:none; margin:0; padding:0; }
nav li { display:inline-block; }
nav > ul li:first-child { margin-left:0px; }
nav > ul li:last-child { margin-right:0px; }
nav a:hover { border-bottom:1px solid <?php echo $blue; ?>; }
nav a.image:hover { border-bottom:0; }
img { max-width:100%; }
main { position:relative; text-align:center; }
figure { margin:0; padding:0; }
fieldset { border:0px; margin:0; padding:0; }
input { border:0px; border-radius:0px; box-shadow:none; }
input[type="text"] { -webkit-appearance: none; }
input:focus, button:focus, label:focus { outline:none; }
button { background:none; border:none; padding:0; }
button:hover { cursor:pointer; }
section { position:relative; text-align:center; }
iframe { border:none; }
p { margin:0 auto; }
hr { border:none; height:1px; width:170px; margin:0 auto; padding:0; background-color:<?php echo $blue; ?>;}
.mobileHide { display:none; }
.mobileOnly { display:block; }
.mobileOnly.imageOnly { display:none; }
.nobreak { white-space:nowrap; }
footer p { margin:0; padding:0; }
.jumpToPoint { visibility:hidden; position:absolute; top:-25px; left:0px; }
.disabled iframe { pointer-events:none; }
.templates, .hidden { display:none !important; }
.invisible { opacity:0 !important; }

@media (min-width:<?php echo $mobile3; ?>px) {
    .mobileOnly.imageOnly { display:block; }
}

@media (min-width:<?php echo $ipadLandscape; ?>px) {
  /* Reset */
  .mobileHide { display:block; }
  .mobileOnly, .mobileOnly.imageOnly { display:none; }
}

@media (min-width:<?php echo $desktop3; ?>px) {
    /* Size */
    body { max-width:<?php echo $desktop3; ?>px; }
}