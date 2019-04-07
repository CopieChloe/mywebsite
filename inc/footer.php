<footer class="row col-12 p-0">  
    <div class="remonter row col-12 p-0 pt-2">
        <a href="#name" class="row remonter_link col-12 offset-lg-2 p-0">
        <i class="fas fa-arrow-up col-1 p-0"></i>          
        </a>
    </div> 
    <div class="col-4 col-md-6 col-lg-4 linkedin_footer">  
        <a href="https://www.linkedin.com/in/chloe-seiler/" class="offset-1 row">        
            <i class="fab fa-linkedin col-md-2"></i>
            <span class="retrouvezMoi col-md-10"> Retrouvez-moi sur LinkedIn</span>
        </a>      
    </div>  
    <div class="col-8 col-md-6 col-lg-4 copyright">
        Copyright Chloé Seiler 2018
    </div>

    <div class="col-8 col-md-6 col-lg-4 mentionslegales">
        <a href="mentionslegales.php">Mentions légales</a>
    </div>
</footer>

<script>
function init() {
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>
 
</body>
 
</html>