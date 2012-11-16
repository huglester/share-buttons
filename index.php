<?php
  $u = urlencode("http://www.lomography.com/magazine/lifestyle/2012/07/06/i-like-your-photo-you-like-his-photo-he-likes-her-photo-and-what-does-she-like");
  $t = urlencode("I Like Your Photo, You Like His Photo, He Likes Her Photo, and What Does She Like?");
  $d = urlencode("I get very happy ever time I check the number of photo likes (we are at over 19,000,000 right now) in the community. After liking a photo I asked myself, what photo did this person like recently? I checked it out and wondered again. So I decided to make a database query: start with one photo, show me a photo this photographer liked recently, and so on – but exclude all previous liked photos and people (this reads like I am barking commands at my computer – well, sometimes I do, but not in this case).");
  $i = urlencode("http://cloud.lomography.com/564/576/f1/893a91f33c16a74cfe0f176abd454d00c12dac.jpg");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,maximum-scale=1.0,initial-scale=1.0,minimum-scale=1.0" />
    <title>Share Buttons</title>
    <link href="stylesheets/basic.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/share.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <section>
      <p>Share buttons for <a href="http://lmgr.ph/LT1kPo">lmgr.ph/LT1kPo</a></p>
      <ul class="share span_4 center">
        <li class="twitter"><a href="https://twitter.com/share?url=<?php echo $u; ?>&amp;text=<?php echo $t; ?>&amp;via=lomography" onclick="window.open(this.href); return false;"><span>Twitter</span></a></li>
        <li class="facebook"><a href="https://www.facebook.com/dialog/feed?link=<?php echo $u; ?>&amp;picture=<?php echo $i; ?>&amp;name=<?php echo $t; ?>&amp;description=<?php echo $d; ?>&amp;redirect_uri=<?php echo $u; ?>&amp;app_id=78247857278" onclick="window.open(this.href); return false;"><span>Facebook</span></a></li>
        <li class="tumblr"><a href="http://www.tumblr.com/share/photo?clickthru=<?php echo $u; ?>&amp;source=<?php echo $i; ?>&amp;caption=<?php echo $d; ?>" onclick="window.open(this.href); return false;"><span>Tumblr</span></a></li>
        <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo $u; ?>&amp;media=<?php echo $i; ?>&amp;description=<?php echo $d; ?>" onclick="window.open(this.href); return false;"><span>Pinterest</span></a></li>
      </ul>
    <section>
  </body>
</html>