<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_d3e7be6c52b58f8a792732536ae39ac405fba3a53d058ad3f12a70b9a938cde5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5388c2692e9b5295f1b985f70224dacf9b39251c7ad2f98666b5f4d3cdc20dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5388c2692e9b5295f1b985f70224dacf9b39251c7ad2f98666b5f4d3cdc20dbc->enter($__internal_5388c2692e9b5295f1b985f70224dacf9b39251c7ad2f98666b5f4d3cdc20dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_08e3bc8c80dee60621ab3249bc60d85cec918dcaacd0f8c019b75bbc13bd5b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e3bc8c80dee60621ab3249bc60d85cec918dcaacd0f8c019b75bbc13bd5b77->enter($__internal_08e3bc8c80dee60621ab3249bc60d85cec918dcaacd0f8c019b75bbc13bd5b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5388c2692e9b5295f1b985f70224dacf9b39251c7ad2f98666b5f4d3cdc20dbc->leave($__internal_5388c2692e9b5295f1b985f70224dacf9b39251c7ad2f98666b5f4d3cdc20dbc_prof);

        
        $__internal_08e3bc8c80dee60621ab3249bc60d85cec918dcaacd0f8c019b75bbc13bd5b77->leave($__internal_08e3bc8c80dee60621ab3249bc60d85cec918dcaacd0f8c019b75bbc13bd5b77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60eb6fada1cff033fc90c001ee75f519ca829c507d968be23316b0f175586815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60eb6fada1cff033fc90c001ee75f519ca829c507d968be23316b0f175586815->enter($__internal_60eb6fada1cff033fc90c001ee75f519ca829c507d968be23316b0f175586815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_962e7c9c7f28be885b3f6fce30c1a8b909a599f7fc03403ce3772e30d74ddc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962e7c9c7f28be885b3f6fce30c1a8b909a599f7fc03403ce3772e30d74ddc21->enter($__internal_962e7c9c7f28be885b3f6fce30c1a8b909a599f7fc03403ce3772e30d74ddc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_962e7c9c7f28be885b3f6fce30c1a8b909a599f7fc03403ce3772e30d74ddc21->leave($__internal_962e7c9c7f28be885b3f6fce30c1a8b909a599f7fc03403ce3772e30d74ddc21_prof);

        
        $__internal_60eb6fada1cff033fc90c001ee75f519ca829c507d968be23316b0f175586815->leave($__internal_60eb6fada1cff033fc90c001ee75f519ca829c507d968be23316b0f175586815_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
