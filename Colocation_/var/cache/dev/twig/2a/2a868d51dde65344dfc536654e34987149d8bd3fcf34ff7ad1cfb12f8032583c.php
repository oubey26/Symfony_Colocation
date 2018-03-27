<?php

/* default/index.html.twig */
class __TwigTemplate_d35e0b27d28339c4fb631cd67b5ea6e08c0b64bec938281e8e6117044d5b1da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ac2197d19967ff12726d8d3fcab2745d045ace18092b863c71f002671e67181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac2197d19967ff12726d8d3fcab2745d045ace18092b863c71f002671e67181->enter($__internal_6ac2197d19967ff12726d8d3fcab2745d045ace18092b863c71f002671e67181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_372fe2f975c12c9ea7f37b376b4d0e9b8f057044aa64fced66609961dc3a119c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372fe2f975c12c9ea7f37b376b4d0e9b8f057044aa64fced66609961dc3a119c->enter($__internal_372fe2f975c12c9ea7f37b376b4d0e9b8f057044aa64fced66609961dc3a119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac2197d19967ff12726d8d3fcab2745d045ace18092b863c71f002671e67181->leave($__internal_6ac2197d19967ff12726d8d3fcab2745d045ace18092b863c71f002671e67181_prof);

        
        $__internal_372fe2f975c12c9ea7f37b376b4d0e9b8f057044aa64fced66609961dc3a119c->leave($__internal_372fe2f975c12c9ea7f37b376b4d0e9b8f057044aa64fced66609961dc3a119c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92c87c43ef02029c0bfcf2dd52c8ad56ce396245dd67dae627522ae42b10659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92c87c43ef02029c0bfcf2dd52c8ad56ce396245dd67dae627522ae42b10659->enter($__internal_d92c87c43ef02029c0bfcf2dd52c8ad56ce396245dd67dae627522ae42b10659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b281e7811629e35eec4d274e49dbc71c052a3570c6a271c0808639c578e08178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b281e7811629e35eec4d274e49dbc71c052a3570c6a271c0808639c578e08178->enter($__internal_b281e7811629e35eec4d274e49dbc71c052a3570c6a271c0808639c578e08178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"w3-content w3-padding\" style=\"max-width:1564px\">
    <div class=\"w3-container w3-padding-32\" id=\"projects\">
        <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Ajouté Récemment...</h3>
    </div>
    <div class=\"w3-row-padding\">
        <rss version=\"2.0\">
            <channel>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 11
            echo "                    <item>
                    <div class=\"w3-col l3 m6 w3-margin-bottom\">
                        <div class=\"w3-display-container\">
                            <title class=\"w3-display-topleft w3-black w3-padding\"> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo " </title>
                           
                            <link> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\"> 
                                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo " </a><br> </link>                            
                            <description>";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["annonce"], "description", array()), 0, 25), "html", null, true);
            echo "</description>
                            
                        </div>
                    </div>
                    </item>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </channel>
        </rss>
    </div>
    </div>
";
        
        $__internal_b281e7811629e35eec4d274e49dbc71c052a3570c6a271c0808639c578e08178->leave($__internal_b281e7811629e35eec4d274e49dbc71c052a3570c6a271c0808639c578e08178_prof);

        
        $__internal_d92c87c43ef02029c0bfcf2dd52c8ad56ce396245dd67dae627522ae42b10659->leave($__internal_d92c87c43ef02029c0bfcf2dd52c8ad56ce396245dd67dae627522ae42b10659_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  62 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{% block body %}
    <div class=\"w3-content w3-padding\" style=\"max-width:1564px\">
    <div class=\"w3-container w3-padding-32\" id=\"projects\">
        <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\">Ajouté Récemment...</h3>
    </div>
    <div class=\"w3-row-padding\">
        <rss version=\"2.0\">
            <channel>
                {% for annonce in annonces %}
                    <item>
                    <div class=\"w3-col l3 m6 w3-margin-bottom\">
                        <div class=\"w3-display-container\">
                            <title class=\"w3-display-topleft w3-black w3-padding\"> {{ annonce.adresse}} </title>
                           
                            <link> <a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\" class=\"btn btn-primary btn-block\"> 
                                {{ annonce.adresse}} </a><br> </link>                            
                            <description>{{ annonce.description[:25]}}</description>
                            
                        </div>
                    </div>
                    </item>
                {% endfor %}
            </channel>
        </rss>
    </div>
    </div>
{% endblock body %}

", "default/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\default\\index.html.twig");
    }
}
