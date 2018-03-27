<?php

/* ::base2.html.twig */
class __TwigTemplate_b34ab74b904f68836fd197b9d509992ccf2a91391bb8af22796f5cbaf09d462f extends Twig_Template
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
        $__internal_9e4ed2dfb9b28f33022930ca6a2ad3cf7a0a71b178f6ab7b4d9f603b03e687dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4ed2dfb9b28f33022930ca6a2ad3cf7a0a71b178f6ab7b4d9f603b03e687dd->enter($__internal_9e4ed2dfb9b28f33022930ca6a2ad3cf7a0a71b178f6ab7b4d9f603b03e687dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_e2dffb6557ef8b6fc10d7e38c74267fa98bff6ff05d090cc9dee78544693750a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dffb6557ef8b6fc10d7e38c74267fa98bff6ff05d090cc9dee78544693750a->enter($__internal_e2dffb6557ef8b6fc10d7e38c74267fa98bff6ff05d090cc9dee78544693750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

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
        
        $__internal_9e4ed2dfb9b28f33022930ca6a2ad3cf7a0a71b178f6ab7b4d9f603b03e687dd->leave($__internal_9e4ed2dfb9b28f33022930ca6a2ad3cf7a0a71b178f6ab7b4d9f603b03e687dd_prof);

        
        $__internal_e2dffb6557ef8b6fc10d7e38c74267fa98bff6ff05d090cc9dee78544693750a->leave($__internal_e2dffb6557ef8b6fc10d7e38c74267fa98bff6ff05d090cc9dee78544693750a_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_598f05bff424f5161047438496e24855e338e78ac0650d6cc67c687d7f60c315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598f05bff424f5161047438496e24855e338e78ac0650d6cc67c687d7f60c315->enter($__internal_598f05bff424f5161047438496e24855e338e78ac0650d6cc67c687d7f60c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c59ac24c54a07547572f9ca8d4ff290a16b0d7cc8e6a0ac11068aa4c60db2b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59ac24c54a07547572f9ca8d4ff290a16b0d7cc8e6a0ac11068aa4c60db2b6e->enter($__internal_c59ac24c54a07547572f9ca8d4ff290a16b0d7cc8e6a0ac11068aa4c60db2b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c59ac24c54a07547572f9ca8d4ff290a16b0d7cc8e6a0ac11068aa4c60db2b6e->leave($__internal_c59ac24c54a07547572f9ca8d4ff290a16b0d7cc8e6a0ac11068aa4c60db2b6e_prof);

        
        $__internal_598f05bff424f5161047438496e24855e338e78ac0650d6cc67c687d7f60c315->leave($__internal_598f05bff424f5161047438496e24855e338e78ac0650d6cc67c687d7f60c315_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03bbc2a072d0e2ff5cb734fc290e05581f1134e5bcb3126f47a4a7eb2f427e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bbc2a072d0e2ff5cb734fc290e05581f1134e5bcb3126f47a4a7eb2f427e2f->enter($__internal_03bbc2a072d0e2ff5cb734fc290e05581f1134e5bcb3126f47a4a7eb2f427e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_643cc6263a6b9a07f5a735f0c9a8ada34f6e5c74ebc39c8f08e386e12763cc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643cc6263a6b9a07f5a735f0c9a8ada34f6e5c74ebc39c8f08e386e12763cc02->enter($__internal_643cc6263a6b9a07f5a735f0c9a8ada34f6e5c74ebc39c8f08e386e12763cc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_643cc6263a6b9a07f5a735f0c9a8ada34f6e5c74ebc39c8f08e386e12763cc02->leave($__internal_643cc6263a6b9a07f5a735f0c9a8ada34f6e5c74ebc39c8f08e386e12763cc02_prof);

        
        $__internal_03bbc2a072d0e2ff5cb734fc290e05581f1134e5bcb3126f47a4a7eb2f427e2f->leave($__internal_03bbc2a072d0e2ff5cb734fc290e05581f1134e5bcb3126f47a4a7eb2f427e2f_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
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
</html>", "::base2.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/base2.html.twig");
    }
}
