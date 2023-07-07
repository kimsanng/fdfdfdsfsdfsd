<!DOCTYPE html>
<html lang="kor" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="https://fscampus.co.kr/wp-content/themes/wplms/az_template/assets/images/vcc_image/vcc_thumb.png" />
	
	<?php
	echo '<title>'.$az_og[0].'</title>';
	echo '<meta property="og:type" content="website" />';
	echo '<meta property="og:title" content="'.$az_og[0].'" />';
	if (is_int($az_og[1])){
		echo '<meta property="og:image" content="https://fscampus.co.kr/wp-content/themes/wplms/az_template/assets/images/vcc_image/vcc_thumb.png" />';
	}
	else {
		echo '<meta property="og:image" content="'.$az_og[1].'" />';
	}
	
	if (isset($az_og[2])){
		echo '<meta name="description" content="'.$az_og[2].'">';
	}
	else{
		echo '<!--3없음-->';
	}
	
	if (isset($az_og[3])){
		echo '<meta property="og:description" content="'.$az_og[3].'">';
	}
	else{
		echo '<!--4없음-->';
	}
	
	if (isset($az_og[4])){
		echo '<meta name="keyword" content="'.$az_og[4].'">';
	}
	else{
		echo '<!--5없음-->';
	}
	
	
	
	?>
	
	<!-- ios 전화번호 인식으로 css 망가지는거 방지. -->
	<meta name="format-detection" content="telephone=no" />
	
	<link rel="icon" href="https://fscampus.co.kr/wp-content/uploads/2021/11/FSC_favi_001.png">



    <!-- 공통 css -->
    <link rel="stylesheet" href="/wp-content/themes/wplms/az_template/assets/css/vcc_common.css">





    <!-- 공통 JS -->
    <script src="/wp-content/themes/wplms/az_template/assets/js/plugin/jquery-3.5.1.min.js"></script>

    <!-- 플러그인 css,JS -->
    <link rel="stylesheet" href="/wp-content/themes/wplms/az_template/assets/css/plugin/swiper-bundle.min.css">
    <script src="/wp-content/themes/wplms/az_template/assets/js/plugin/swiper-bundle.min.js"></script>



	<style>
		body { max-width:1920px; margin:auto; }
	
	
	</style>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '949376976052132');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=949376976052132&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<meta name="facebook-domain-verification" content="vn0jhxd3ciczjh1naq2riob5cdrns2" />



</head>