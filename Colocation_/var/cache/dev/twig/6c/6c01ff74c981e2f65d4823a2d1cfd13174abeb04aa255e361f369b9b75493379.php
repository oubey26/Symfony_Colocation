<?php

/* :default:index.html.twig */
class __TwigTemplate_e6dd141976032995fc4a443c60211b9623122ccef35387c00f3735d9e06bacef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":default:index.html.twig", 1);
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
        $__internal_1bc8d7188a5b833381ad43319ac7b34f4976d4e6b5d9cdc89e223effe4100925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc8d7188a5b833381ad43319ac7b34f4976d4e6b5d9cdc89e223effe4100925->enter($__internal_1bc8d7188a5b833381ad43319ac7b34f4976d4e6b5d9cdc89e223effe4100925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_740e111376475258bd18ed0a62c4bd117cf965a6c32b15fb0bbd6f8ac7716dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740e111376475258bd18ed0a62c4bd117cf965a6c32b15fb0bbd6f8ac7716dbc->enter($__internal_740e111376475258bd18ed0a62c4bd117cf965a6c32b15fb0bbd6f8ac7716dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc8d7188a5b833381ad43319ac7b34f4976d4e6b5d9cdc89e223effe4100925->leave($__internal_1bc8d7188a5b833381ad43319ac7b34f4976d4e6b5d9cdc89e223effe4100925_prof);

        
        $__internal_740e111376475258bd18ed0a62c4bd117cf965a6c32b15fb0bbd6f8ac7716dbc->leave($__internal_740e111376475258bd18ed0a62c4bd117cf965a6c32b15fb0bbd6f8ac7716dbc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c71d5d0cb4d146548134272109d727c4b032b9f5a58dad2e198a0dc5d73ba56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c71d5d0cb4d146548134272109d727c4b032b9f5a58dad2e198a0dc5d73ba56->enter($__internal_0c71d5d0cb4d146548134272109d727c4b032b9f5a58dad2e198a0dc5d73ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fec78bb5dff09535da0b992b22dab37aff801954feeec7e57417524d1ec5292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fec78bb5dff09535da0b992b22dab37aff801954feeec7e57417524d1ec5292->enter($__internal_9fec78bb5dff09535da0b992b22dab37aff801954feeec7e57417524d1ec5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"w3-row-padding\">
    <rss version=\"2.0\">
        <channel>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 7
            echo "                <item>
                <div class=\"w3-col l3 m6 w3-margin-bottom\">
                    <div class=\"w3-display-container\">
                        <div class=\"w3-display-topleft w3-black w3-padding\"><title>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "</title></div>
                        <link><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_show", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-primary btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show"), "html", null, true);
            echo "</a></link>
                        <description>";
            // line 12
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["annonce"], "description", array()), 0, 65), "html", null, true);
            echo "</description>
                    <img src=\"C:/wamp64/www/Colocation/house5.jpg\" alt=\"House\" style=\"width:100%\">
                    </div>
                </div>
                </item>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </channel>
    </rss>

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
";
        
        $__internal_9fec78bb5dff09535da0b992b22dab37aff801954feeec7e57417524d1ec5292->leave($__internal_9fec78bb5dff09535da0b992b22dab37aff801954feeec7e57417524d1ec5292_prof);

        
        $__internal_0c71d5d0cb4d146548134272109d727c4b032b9f5a58dad2e198a0dc5d73ba56->leave($__internal_0c71d5d0cb4d146548134272109d727c4b032b9f5a58dad2e198a0dc5d73ba56_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  73 => 12,  67 => 11,  63 => 10,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"w3-row-padding\">
    <rss version=\"2.0\">
        <channel>
            {% for annonce in annonces %}
                <item>
                <div class=\"w3-col l3 m6 w3-margin-bottom\">
                    <div class=\"w3-display-container\">
                        <div class=\"w3-display-topleft w3-black w3-padding\"><title>{{ annonce.adresse}}</title></div>
                        <link><a href=\"{{ path('annonces_show', { 'id': annonce.id }) }}\"class=\"btn btn-primary btn-block\">{{'show'|trans}}</a></link>
                        <description>{{ annonce.description[:65]}}</description>
                    <img src=\"C:/wamp64/www/Colocation/house5.jpg\" alt=\"House\" style=\"width:100%\">
                    </div>
                </div>
                </item>
            {% endfor %}
        </channel>
    </rss>

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
{% endblock body %}


", ":default:index.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/default/index.html.twig");
    }
}
