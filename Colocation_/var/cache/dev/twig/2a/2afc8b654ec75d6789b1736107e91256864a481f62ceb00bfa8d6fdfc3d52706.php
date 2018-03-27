<?php

/* default/index.html.twig */
class __TwigTemplate_a66a6e55e140abf706b8156c74bbffdd8d5713f63f2e36ebc526ea2ac2c5d64c extends Twig_Template
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
        $__internal_8f44fa9c8aad1e6ea093bf974d873139773e7fd9a345d8c190c334dc11b665fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f44fa9c8aad1e6ea093bf974d873139773e7fd9a345d8c190c334dc11b665fe->enter($__internal_8f44fa9c8aad1e6ea093bf974d873139773e7fd9a345d8c190c334dc11b665fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_50477e7f29433cf69ac4f63f1ef5cd52e80c30766d2a923dbb9f8f5dd19c7599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50477e7f29433cf69ac4f63f1ef5cd52e80c30766d2a923dbb9f8f5dd19c7599->enter($__internal_50477e7f29433cf69ac4f63f1ef5cd52e80c30766d2a923dbb9f8f5dd19c7599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f44fa9c8aad1e6ea093bf974d873139773e7fd9a345d8c190c334dc11b665fe->leave($__internal_8f44fa9c8aad1e6ea093bf974d873139773e7fd9a345d8c190c334dc11b665fe_prof);

        
        $__internal_50477e7f29433cf69ac4f63f1ef5cd52e80c30766d2a923dbb9f8f5dd19c7599->leave($__internal_50477e7f29433cf69ac4f63f1ef5cd52e80c30766d2a923dbb9f8f5dd19c7599_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4d830689b6efbd2c6b0b91b01ec2575c870b549050d4fcdbf76fc6d056464b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d830689b6efbd2c6b0b91b01ec2575c870b549050d4fcdbf76fc6d056464b8->enter($__internal_f4d830689b6efbd2c6b0b91b01ec2575c870b549050d4fcdbf76fc6d056464b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eb0e7bed06ff830c147b82bf2f900c2e7f513d678446b96b51849fd23a95571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb0e7bed06ff830c147b82bf2f900c2e7f513d678446b96b51849fd23a95571->enter($__internal_2eb0e7bed06ff830c147b82bf2f900c2e7f513d678446b96b51849fd23a95571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2eb0e7bed06ff830c147b82bf2f900c2e7f513d678446b96b51849fd23a95571->leave($__internal_2eb0e7bed06ff830c147b82bf2f900c2e7f513d678446b96b51849fd23a95571_prof);

        
        $__internal_f4d830689b6efbd2c6b0b91b01ec2575c870b549050d4fcdbf76fc6d056464b8->leave($__internal_f4d830689b6efbd2c6b0b91b01ec2575c870b549050d4fcdbf76fc6d056464b8_prof);

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


", "default/index.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\default\\index.html.twig");
    }
}
