<!-- Begin Subnav -->
<div class="wrap mid">
<div class="wrap-inner">
<div class="subnav">
    	<ul>
            <li><a href="./aboutus.php">About US</a><span></span></li>
            <li><a href="./contact.php">Contact Us</a><span></span></li>
        </ul>
</div>
</div>
</div>

<script>
    // Highlight current subnav
    var h = location.href;
    
    var lis = $(".subnav").find("li");
    
    lis.each(function() {
    	var url = $(this).find("a").attr("href");
    	
    	var startLength = url.lastIndexOf("/");
    	
    	var endLength	= url.length;
    	
    	var uri = url.substring(startLength,endLength);
    	
        if(h.indexOf(uri) >= 0) {
            $(this).addClass("selected");
            return false;
        }
    });
    
</script>