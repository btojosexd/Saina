<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My page</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">
</head>
<body>
<div class="container">
	<h2>fancyBox v3.2 - Images</h2>

<h3>Single images</h3>

<p>
  Add a <code>data-fancybox</code> attribute to any link to enable fancyBox.
</p>

<p class="imglist">
  <a href="https://source.unsplash.com/0JYgd2QuMfw/1500x1000" data-fancybox data-caption="This image has a caption">
      <img src="https://source.unsplash.com/0JYgd2QuMfw/240x160" />
  </a>
  
  <a href="https://source.unsplash.com/xAgvgQpYsf4/1500x1000" data-fancybox>
      <img src="https://source.unsplash.com/xAgvgQpYsf4/240x160" />
  </a>
</p>

<p>
  It is also possible to display close button in the top right corner.
</p>

<p class="imglist">
  <a href="https://source.unsplash.com/R261qkc-nDE/1500x1000" data-fancybox data-toolbar="false" data-small-btn="true">
      <img src="https://source.unsplash.com/R261qkc-nDE/240x160" />
  </a>
</p>

<h3>Image gallery</h3>

<p>
  Galleries are created by adding the same <code>data-fancybox</code> attribute value.
</p>

<p class="imglist">
  
  <a href="https://source.unsplash.com/eWFdaPRFjwE/1500x1000" data-fancybox="images">
      <img src="https://source.unsplash.com/eWFdaPRFjwE/240x160" />
  </a>
  
  <a href="https://c1.staticflickr.com/9/8148/29324593462_abebaddc38_k.jpg" data-fancybox="images">
      <img src="https://c1.staticflickr.com/9/8148/29324593462_f890687b7a_m.jpg" />
  </a>

  <a href="https://c2.staticflickr.com/6/5499/30972532232_051e1dc57e_h.jpg" data-fancybox="images">
      <img src="https://c2.staticflickr.com/6/5499/30972532232_e9a298a0c5_m.jpg" />
  </a>

  <a href="https://source.unsplash.com/i2KibvLYjqk/1500x1000" data-fancybox="images">
      <img src="https://source.unsplash.com/i2KibvLYjqk/240x160" />
  </a>
  
  <a href="https://source.unsplash.com/cZVthlrnlnQ/1500x1000" data-fancybox="images">
      <img src="https://source.unsplash.com/cZVthlrnlnQ/240x160" />
  </a>
  
  <a href="https://source.unsplash.com/vddccTqwal8/1500x1000" data-fancybox="images">
      <img src="https://source.unsplash.com/vddccTqwal8/240x160" />
  </a>
</p>


<h3>Gallery with one preview image</h3>

<p>
  To show only one or a few images but have a large gallery, simply hide the rest of the links. <br />
  Optionally, use <code>data-thumb</code> for thumbnail image.
</p>

<p>
    <a href="https://c1.staticflickr.com/1/357/31876784275_12286240d4_h.jpg" data-fancybox="images-preview">
      <img src="https://c1.staticflickr.com/1/357/31876784275_fbc9696913_m.jpg" />
    </a>
</p>

<div style="display: none;">
  
  <a href="https://farm1.staticflickr.com/582/32752534825_4b35b2df81_o_d.jpg" data-fancybox="images-preview"
     data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>
  
  <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
     data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>
  
</div>
</div>
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="public/js/jquery.fancybox.min.js"></script>
	<script type="text/javascript">
	$("[data-fancybox]").fancybox({
	});
</script>
</body>
</html>