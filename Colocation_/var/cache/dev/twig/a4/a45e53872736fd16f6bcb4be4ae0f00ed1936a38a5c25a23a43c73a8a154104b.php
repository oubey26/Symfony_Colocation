<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_59a914d36c5e0736a5d17bb9a17435604b8a4c174cd2cb4b775a2ebe94b5fefa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_0d3e445d221e34d8f2d6a1133e7ace105f1f4db9df90bac78fca1eebe9d26d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3e445d221e34d8f2d6a1133e7ace105f1f4db9df90bac78fca1eebe9d26d94->enter($__internal_0d3e445d221e34d8f2d6a1133e7ace105f1f4db9df90bac78fca1eebe9d26d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_a2e6a453a49a9201201ee320cdf83e384fedad41948c68ac63265f51ba1bf624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e6a453a49a9201201ee320cdf83e384fedad41948c68ac63265f51ba1bf624->enter($__internal_a2e6a453a49a9201201ee320cdf83e384fedad41948c68ac63265f51ba1bf624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d3e445d221e34d8f2d6a1133e7ace105f1f4db9df90bac78fca1eebe9d26d94->leave($__internal_0d3e445d221e34d8f2d6a1133e7ace105f1f4db9df90bac78fca1eebe9d26d94_prof);

        
        $__internal_a2e6a453a49a9201201ee320cdf83e384fedad41948c68ac63265f51ba1bf624->leave($__internal_a2e6a453a49a9201201ee320cdf83e384fedad41948c68ac63265f51ba1bf624_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_866b4fe66f353ada77f9e397a675f8c6a42d91adcc44080c15646f28f69d225f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866b4fe66f353ada77f9e397a675f8c6a42d91adcc44080c15646f28f69d225f->enter($__internal_866b4fe66f353ada77f9e397a675f8c6a42d91adcc44080c15646f28f69d225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_312b42c72c71aa6ea420a5d995748eedda46026787bd35b36595428c92b4d29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312b42c72c71aa6ea420a5d995748eedda46026787bd35b36595428c92b4d29d->enter($__internal_312b42c72c71aa6ea420a5d995748eedda46026787bd35b36595428c92b4d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_312b42c72c71aa6ea420a5d995748eedda46026787bd35b36595428c92b4d29d->leave($__internal_312b42c72c71aa6ea420a5d995748eedda46026787bd35b36595428c92b4d29d_prof);

        
        $__internal_866b4fe66f353ada77f9e397a675f8c6a42d91adcc44080c15646f28f69d225f->leave($__internal_866b4fe66f353ada77f9e397a675f8c6a42d91adcc44080c15646f28f69d225f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
