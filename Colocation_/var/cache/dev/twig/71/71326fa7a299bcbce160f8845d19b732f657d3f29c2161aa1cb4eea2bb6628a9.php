<?php

/* base2.html.twig */
class __TwigTemplate_657d16629fbe13aaf457bcb5f02cf9e1e5ca67305af53b4a80a164eae4c83f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_622d7589c4ca9c2c55a9936bec0cba1a52b6697ba9d1892aa193c0566e17c672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622d7589c4ca9c2c55a9936bec0cba1a52b6697ba9d1892aa193c0566e17c672->enter($__internal_622d7589c4ca9c2c55a9936bec0cba1a52b6697ba9d1892aa193c0566e17c672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_d98f66a3ac41865ebb58ca1956372e9d0e1a73c3691127c338c6c14fb8b81d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98f66a3ac41865ebb58ca1956372e9d0e1a73c3691127c338c6c14fb8b81d7c->enter($__internal_d98f66a3ac41865ebb58ca1956372e9d0e1a73c3691127c338c6c14fb8b81d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<title>Projet Colocation</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
<body>

<!-- Navbar (sit on top) -->
<div class=\"w3-top\">
  <div class=\"w3-bar w3-white w3-wide w3-padding w3-card\">
    <a href=\"#home\" class=\"w3-bar-item w3-button\"><b>BR</b> Colocation</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class=\"w3-right w3-hide-small\">
        ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
            <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se Déconnecter"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se Connecter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 23
        echo "        
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Voir Les Annonces"), "html", null, true);
        echo "</a> 
            
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_new");
        echo "\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créer une annonce"), "html", null, true);
        echo " </a>
    </div>
  </div>
</div>

<!-- Header -->
<header class=\"w3-display-container w3-content w3-wide\" style=\"max-width:1500px;\" id=\"home\">
    <img class=\"w3-image\" src=\"windows(C:)/Wamp64/www/Colocation/web/css/architect.jpg\" alt=\"Architecture\" width=\"1500\" height=\"800\">
  <div class=\"w3-display-middle w3-margin-top w3-center\">
    <h1 class=\"w3-xxlarge w3-text-white\"><span class=\"w3-padding w3-black w3-opacity-min\"><b>BR</b></span> <span class=\"w3-hide-small w3-text-light-grey\">Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class=\"w3-content w3-padding\" style=\"max-width:1564px\">

  <!-- Project Section -->
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "  <div class=\"w3-container w3-padding-32\" id=\"projects\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Projects</h3>
  </div>
    
    <div class=\"w3-row-padding\">
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Summer House</div>
            <img src=\"C:/wamp64/www/Colocation/house5.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
    
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Brick House</div>
            <img src=\"/w3images/house2.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
    
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Renovated</div>
            <img src=\"/w3images/house3.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
      
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Barn House</div>
            <img src=\"house4.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
  
    </div>
  
    <div class=\"w3-row-padding\">
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Summer House</div>
                <img src=\"/web/css/house2.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Brick House</div>
                <img src=\"/web/css/house5.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Renovated</div>
            <img src=\"/w3images/house4.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Barn House</div>
                <img src=\"/w3images/house3.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
    </div>

  <!-- About Section -->
  <div class=\"w3-container w3-padding-32\" id=\"about\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <div class=\"w3-row-padding w3-grayscale\">
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team2.jpg\" alt=\"John\" style=\"width:100%\">
      <h3>John Doe</h3>
      <p class=\"w3-opacity\">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team1.jpg\" alt=\"Jane\" style=\"width:100%\">
      <h3>Jane Doe</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team3.jpg\" alt=\"Mike\" style=\"width:100%\">
      <h3>Mike Ross</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team4.jpg\" alt=\"Dan\" style=\"width:100%\">
      <h3>Dan Star</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  <div class=\"w3-container w3-padding-32\" id=\"contact\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Contact</h3>
    <p>Lets get in touch and talk about your and our next project.</p>
    <form action=\"/action_page.php\" target=\"_blank\">
      <input class=\"w3-input\" type=\"text\" placeholder=\"Name\" required name=\"Name\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Email\" required name=\"Email\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Subject\" required name=\"Subject\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Comment\" required name=\"Comment\">
      <button class=\"w3-button w3-black w3-section\" type=\"submit\">
        <i class=\"fa fa-paper-plane\"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Google Map -->
<div id=\"googleMap\" class=\"w3-grayscale\" style=\"width:100%;height:450px;\"></div>

<!-- Footer -->
<footer class=\"w3-center w3-black w3-padding-16\">
  <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-text-green\">w3.css</a></p>
</footer>
</body>
</html>";
        
        $__internal_622d7589c4ca9c2c55a9936bec0cba1a52b6697ba9d1892aa193c0566e17c672->leave($__internal_622d7589c4ca9c2c55a9936bec0cba1a52b6697ba9d1892aa193c0566e17c672_prof);

        
        $__internal_d98f66a3ac41865ebb58ca1956372e9d0e1a73c3691127c338c6c14fb8b81d7c->leave($__internal_d98f66a3ac41865ebb58ca1956372e9d0e1a73c3691127c338c6c14fb8b81d7c_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2e54d78273e4881fd2ffc13281c9148df7295c64eb9dd3fd9b98bd14711a583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e54d78273e4881fd2ffc13281c9148df7295c64eb9dd3fd9b98bd14711a583->enter($__internal_e2e54d78273e4881fd2ffc13281c9148df7295c64eb9dd3fd9b98bd14711a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0126816fb8881fd0874e48ff2a1846a6d9fab61aa24bec9f766ba53c45d20e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0126816fb8881fd0874e48ff2a1846a6d9fab61aa24bec9f766ba53c45d20e77->enter($__internal_0126816fb8881fd0874e48ff2a1846a6d9fab61aa24bec9f766ba53c45d20e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0126816fb8881fd0874e48ff2a1846a6d9fab61aa24bec9f766ba53c45d20e77->leave($__internal_0126816fb8881fd0874e48ff2a1846a6d9fab61aa24bec9f766ba53c45d20e77_prof);

        
        $__internal_e2e54d78273e4881fd2ffc13281c9148df7295c64eb9dd3fd9b98bd14711a583->leave($__internal_e2e54d78273e4881fd2ffc13281c9148df7295c64eb9dd3fd9b98bd14711a583_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e350c1df69de134fc0086ef913d7e25db4dc2d4be4fba326c450496524445d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e350c1df69de134fc0086ef913d7e25db4dc2d4be4fba326c450496524445d03->enter($__internal_e350c1df69de134fc0086ef913d7e25db4dc2d4be4fba326c450496524445d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f34408e1d40c08cd1cb6a324eb828cec4aa144ccfa92f67ad27ca6925734ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f34408e1d40c08cd1cb6a324eb828cec4aa144ccfa92f67ad27ca6925734ff5->enter($__internal_3f34408e1d40c08cd1cb6a324eb828cec4aa144ccfa92f67ad27ca6925734ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f34408e1d40c08cd1cb6a324eb828cec4aa144ccfa92f67ad27ca6925734ff5->leave($__internal_3f34408e1d40c08cd1cb6a324eb828cec4aa144ccfa92f67ad27ca6925734ff5_prof);

        
        $__internal_e350c1df69de134fc0086ef913d7e25db4dc2d4be4fba326c450496524445d03->leave($__internal_e350c1df69de134fc0086ef913d7e25db4dc2d4be4fba326c450496524445d03_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 46,  246 => 45,  108 => 47,  105 => 46,  103 => 45,  83 => 28,  79 => 27,  74 => 25,  70 => 24,  67 => 23,  62 => 21,  57 => 20,  52 => 18,  48 => 17,  44 => 16,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<title>Projet Colocation</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
<body>

<!-- Navbar (sit on top) -->
<div class=\"w3-top\">
  <div class=\"w3-bar w3-white w3-wide w3-padding w3-card\">
    <a href=\"#home\" class=\"w3-bar-item w3-button\"><b>BR</b> Colocation</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class=\"w3-right w3-hide-small\">
        {% if is_granted('IS_AUTHENTICATED_FULLY')%} 
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{'Se Déconnecter'|trans}}</a>
        {%else%}
            <a href=\"{{ path('fos_user_security_login') }}\">
                {{'Se Connecter'|trans}}</a>
        {% endif %}
        
        <a href=\"{{ path('annonces_index') }}\">
            {{'Voir Les Annonces'|trans}}</a> 
            
        <a href=\"{{ path('annonces_new') }}\">
            {{'Créer une annonce'|trans}} </a>
    </div>
  </div>
</div>

<!-- Header -->
<header class=\"w3-display-container w3-content w3-wide\" style=\"max-width:1500px;\" id=\"home\">
    <img class=\"w3-image\" src=\"windows(C:)/Wamp64/www/Colocation/web/css/architect.jpg\" alt=\"Architecture\" width=\"1500\" height=\"800\">
  <div class=\"w3-display-middle w3-margin-top w3-center\">
    <h1 class=\"w3-xxlarge w3-text-white\"><span class=\"w3-padding w3-black w3-opacity-min\"><b>BR</b></span> <span class=\"w3-hide-small w3-text-light-grey\">Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class=\"w3-content w3-padding\" style=\"max-width:1564px\">

  <!-- Project Section -->
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
  <div class=\"w3-container w3-padding-32\" id=\"projects\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Projects</h3>
  </div>
    
    <div class=\"w3-row-padding\">
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Summer House</div>
            <img src=\"C:/wamp64/www/Colocation/house5.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
    
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Brick House</div>
            <img src=\"/w3images/house2.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
    
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Renovated</div>
            <img src=\"/w3images/house3.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
      
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
        <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Barn House</div>
            <img src=\"house4.jpg\" alt=\"House\" style=\"width:100%\">
        </div>
    </div>
  
    </div>
  
    <div class=\"w3-row-padding\">
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Summer House</div>
                <img src=\"/web/css/house2.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Brick House</div>
                <img src=\"/web/css/house5.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
            <div class=\"w3-display-topleft w3-black w3-padding\">Renovated</div>
            <img src=\"/w3images/house4.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
        <div class=\"w3-col l3 m6 w3-margin-bottom\">
            <div class=\"w3-display-container\">
                <div class=\"w3-display-topleft w3-black w3-padding\">Barn House</div>
                <img src=\"/w3images/house3.jpg\" alt=\"House\" style=\"width:99%\">
            </div>
        </div>
    </div>

  <!-- About Section -->
  <div class=\"w3-container w3-padding-32\" id=\"about\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <div class=\"w3-row-padding w3-grayscale\">
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team2.jpg\" alt=\"John\" style=\"width:100%\">
      <h3>John Doe</h3>
      <p class=\"w3-opacity\">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team1.jpg\" alt=\"Jane\" style=\"width:100%\">
      <h3>Jane Doe</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team3.jpg\" alt=\"Mike\" style=\"width:100%\">
      <h3>Mike Ross</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
    <div class=\"w3-col l3 m6 w3-margin-bottom\">
      <img src=\"/w3images/team4.jpg\" alt=\"Dan\" style=\"width:100%\">
      <h3>Dan Star</h3>
      <p class=\"w3-opacity\">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class=\"w3-button w3-light-grey w3-block\">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  <div class=\"w3-container w3-padding-32\" id=\"contact\">
    <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Contact</h3>
    <p>Lets get in touch and talk about your and our next project.</p>
    <form action=\"/action_page.php\" target=\"_blank\">
      <input class=\"w3-input\" type=\"text\" placeholder=\"Name\" required name=\"Name\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Email\" required name=\"Email\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Subject\" required name=\"Subject\">
      <input class=\"w3-input w3-section\" type=\"text\" placeholder=\"Comment\" required name=\"Comment\">
      <button class=\"w3-button w3-black w3-section\" type=\"submit\">
        <i class=\"fa fa-paper-plane\"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Google Map -->
<div id=\"googleMap\" class=\"w3-grayscale\" style=\"width:100%;height:450px;\"></div>

<!-- Footer -->
<footer class=\"w3-center w3-black w3-padding-16\">
  <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-text-green\">w3.css</a></p>
</footer>
</body>
</html>", "base2.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\base2.html.twig");
    }
}
