
</div><!-- Footer -->
  <link rel="stylesheet" href="footer_style.css">
    <div class="footer-basic">
      <footer>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="..\index\index.php">Accueil</a></li>
          <li class="list-inline-item"><a href="../contact/contact.php">Contact</a></li>
          <li class="list-inline-item"><a href="../contact/apropos.php">À Propos de nous</a></li>
          <li class="list-inline-item"><a href="../contact/mentionslegales.php">Mention Legales</a></li>
          <li class="list-inline-item"><a href="../contact/politque.php">Politique de confidentialité</a></li>
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