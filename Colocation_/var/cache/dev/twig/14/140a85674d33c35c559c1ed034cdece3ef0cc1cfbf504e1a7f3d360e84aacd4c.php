<?php

/* base2.html.twig */
class __TwigTemplate_5af7ed5fd1f0ab126c2549268cc8994eb8e5c4e266fa6be9b640625ef1418f8c extends Twig_Template
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
        $__internal_676cbb0b710e2f18c0da3dab0eaf6a2176d65efacefa3bee0b90d10e356ae910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676cbb0b710e2f18c0da3dab0eaf6a2176d65efacefa3bee0b90d10e356ae910->enter($__internal_676cbb0b710e2f18c0da3dab0eaf6a2176d65efacefa3bee0b90d10e356ae910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_4dd173f5f17dc231183cab3559c99d954b883c51590e504f161e2a83e7636607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd173f5f17dc231183cab3559c99d954b883c51590e504f161e2a83e7636607->enter($__internal_4dd173f5f17dc231183cab3559c99d954b883c51590e504f161e2a83e7636607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        <img class=\"w3-image\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("architect.jpg"), "html", null, true);
        echo "\" alt=\"Architecture\" width=\"1500\" height=\"800\">
        <div class=\"w3-display-middle w3-margin-top w3-center\">
            <h1 class=\"w3-xxlarge w3-text-white\">
                <span class=\"w3-padding w3-black w3-opacity-min\"><b>BR</b></span> 
                <span class=\"w3-hide-small w3-text-light-black\"><b>COLOCATIOON</b></span>
            </h1>
        </div>
    </header>

    <!-- page content -->
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    <div class=\"w3-container w3-padding-32\" id=\"projects\">
        <footer class=\"w3-center w3-black w3-padding-16\">
        <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-text-green\">Nyunting & MohamedIbrahim</a></p>
    </footer>
    </div>
    <!-- End page content -->
</body>
</html>";
        
        $__internal_676cbb0b710e2f18c0da3dab0eaf6a2176d65efacefa3bee0b90d10e356ae910->leave($__internal_676cbb0b710e2f18c0da3dab0eaf6a2176d65efacefa3bee0b90d10e356ae910_prof);

        
        $__internal_4dd173f5f17dc231183cab3559c99d954b883c51590e504f161e2a83e7636607->leave($__internal_4dd173f5f17dc231183cab3559c99d954b883c51590e504f161e2a83e7636607_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_1675ca114eb552445347d19de3625662310e6a0f5968e7f17803548b853a6012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1675ca114eb552445347d19de3625662310e6a0f5968e7f17803548b853a6012->enter($__internal_1675ca114eb552445347d19de3625662310e6a0f5968e7f17803548b853a6012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b597595daf77163f5ca7182ed0e4e7d5a34d57e61e28d9e1fb7f687ac244ce45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b597595daf77163f5ca7182ed0e4e7d5a34d57e61e28d9e1fb7f687ac244ce45->enter($__internal_b597595daf77163f5ca7182ed0e4e7d5a34d57e61e28d9e1fb7f687ac244ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b597595daf77163f5ca7182ed0e4e7d5a34d57e61e28d9e1fb7f687ac244ce45->leave($__internal_b597595daf77163f5ca7182ed0e4e7d5a34d57e61e28d9e1fb7f687ac244ce45_prof);

        
        $__internal_1675ca114eb552445347d19de3625662310e6a0f5968e7f17803548b853a6012->leave($__internal_1675ca114eb552445347d19de3625662310e6a0f5968e7f17803548b853a6012_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d238783fb9aed22950819e3250bfb885a58299b486b4216ed352a6f15e2604e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d238783fb9aed22950819e3250bfb885a58299b486b4216ed352a6f15e2604e->enter($__internal_5d238783fb9aed22950819e3250bfb885a58299b486b4216ed352a6f15e2604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ebf0def4abe6c73bc079eeb05da1d1d14b18c9060f9537e40a5f3bc2efb65ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebf0def4abe6c73bc079eeb05da1d1d14b18c9060f9537e40a5f3bc2efb65ee->enter($__internal_9ebf0def4abe6c73bc079eeb05da1d1d14b18c9060f9537e40a5f3bc2efb65ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ebf0def4abe6c73bc079eeb05da1d1d14b18c9060f9537e40a5f3bc2efb65ee->leave($__internal_9ebf0def4abe6c73bc079eeb05da1d1d14b18c9060f9537e40a5f3bc2efb65ee_prof);

        
        $__internal_5d238783fb9aed22950819e3250bfb885a58299b486b4216ed352a6f15e2604e->leave($__internal_5d238783fb9aed22950819e3250bfb885a58299b486b4216ed352a6f15e2604e_prof);

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
        return array (  145 => 46,  128 => 45,  111 => 47,  108 => 46,  106 => 45,  93 => 35,  83 => 28,  79 => 27,  74 => 25,  70 => 24,  67 => 23,  62 => 21,  57 => 20,  52 => 18,  48 => 17,  44 => 16,  27 => 1,);
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
        <img class=\"w3-image\" src=\"{{ asset('architect.jpg')}}\" alt=\"Architecture\" width=\"1500\" height=\"800\">
        <div class=\"w3-display-middle w3-margin-top w3-center\">
            <h1 class=\"w3-xxlarge w3-text-white\">
                <span class=\"w3-padding w3-black w3-opacity-min\"><b>BR</b></span> 
                <span class=\"w3-hide-small w3-text-light-black\"><b>COLOCATIOON</b></span>
            </h1>
        </div>
    </header>

    <!-- page content -->
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <div class=\"w3-container w3-padding-32\" id=\"projects\">
        <footer class=\"w3-center w3-black w3-padding-16\">
        <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" title=\"W3.CSS\" target=\"_blank\" class=\"w3-hover-text-green\">Nyunting & MohamedIbrahim</a></p>
    </footer>
    </div>
    <!-- End page content -->
</body>
</html>", "base2.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\base2.html.twig");
    }
}
