
</div><!-- Footer -->
    
    <div class="footer-basic">
      <footer>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Acceuil</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">À Propos de nous</a></li>
          <li class="list-inline-item"><a href="#">Termes</a></li>
          <li class="list-inline-item"><a href="#">Politique de confidentialité</a></li>
          <li class="list-inline-item"><a href="https://github.com/YoCPaul/UnSold">Github</a></li>
        </ul>
        <p class="copyright">Unsold © 2024</p>
      </footer>
    </div>
    
  </body>

  <script>
    const menuHamburger = document.querySelector("#iconeMenuHamb")
    const navLinks = document.querySelector(".nav-links")
 
    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })

    var counter = 1;
      setInterval(function(){
        document.getElementById('radio'+ counter).checked = true;
        counter++;
        if(counter >4){
          counter = 1;
        }
      },5000);

  </script>
</html>