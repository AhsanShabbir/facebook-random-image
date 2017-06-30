
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title><?=$this->config->item('tag_line');?></title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="twitter:card" value="summary"> 
<meta property="og:title" content="<?=$this->config->item('tag_line');?>" />
<meta property="og:description" content="Like it? Share it With friends"/>

<meta property="og:type" content="article" />
<meta property="og:url" content="<?=base_url(uri_string());?>"/>
<meta property="og:image" content="<?=base_url('/assets/uploads/'.$image->path);?>"/>
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1309775245809409', {
em: 'insert_email_variable'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1309775245809409&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>



<div style="text-align: center;font-size:2em;font-family:Consolas, Andale Mono, Lucida Console, Lucida Sans Typewriter, Monaco, Courier New, monospace">LOADING...</div>
<!-- START AD CODE -->
<script language="javascript" type="text/javascript" charset="utf-8">
var cpxcenter1522_banner_border = '#990033';
var cpxcenter1522_banner_text = '#000000';
var cpxcenter1522_banner_bg = '#FFFFFF';
cpxcenter1522_banner_link = '#000000';
cpxcenter1522_width = 336;
cpxcenter1522_height = 280;
</script>
<script language="JavaScript" type="text/javascript" src="//serv.clicksor.net/display.php?nid=1522&zone=133640&type=banner&sid=82494&pid=103243&subid=&opt1=&opt2=">
</script>
<!-- END AD CODE -->
<a href="<?=$this->config->item('redirect_url');?>">
<img width="250" height ="250" src= "<?=base_url('/assets/uploads/'.$image->path);?>" />
</a>

</html>


