<?php

$url = 'https://paqs2025.com/';
$title = 'PAQS Congress 2025';
$description = 'By becoming a member of PAQS, you ensure that you are working with highly skilled and knowledgeable professionals who adhere to international standards and ethical practices. PAQS members benefit from continuous professional development and a strong network, enhancing their ability to provide high-quality services. Encouraging innovation and sustainability in the construction industry through international collaboration.';
$image = asset('img/LOGO PAQS CONGRESS - metatag.png');

?>


<meta name="title" content="{{ $title }}" />
<meta name="description" content="{{ $description }}" />
<meta name="keywords" content="{{ $title }}">
<meta name="author" content="PAQS">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $url }}" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:image" content="{{ $image }}" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{ $url }}" />
<meta property="twitter:title" content="{{ $title }}" />
<meta property="twitter:description" content="{{ $description }}" />
<meta property="twitter:image" content="{{ $image }}" />
