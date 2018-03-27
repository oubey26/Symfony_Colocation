<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f7b56927be0a41dfa6e71803fba5c7c2f86533e645608c46696f5763546968c2 extends Twig_Template
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
        $__internal_3a91a309d252cb70896e2a211dc6c9ca7f1b05e69ef8e434b113c301ea0d4df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a91a309d252cb70896e2a211dc6c9ca7f1b05e69ef8e434b113c301ea0d4df0->enter($__internal_3a91a309d252cb70896e2a211dc6c9ca7f1b05e69ef8e434b113c301ea0d4df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_ae2a7039e1874a42a06e3e0b2a6bf1399a79bfa0faf07889bea34f28a199bf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2a7039e1874a42a06e3e0b2a6bf1399a79bfa0faf07889bea34f28a199bf78->enter($__internal_ae2a7039e1874a42a06e3e0b2a6bf1399a79bfa0faf07889bea34f28a199bf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a91a309d252cb70896e2a211dc6c9ca7f1b05e69ef8e434b113c301ea0d4df0->leave($__internal_3a91a309d252cb70896e2a211dc6c9ca7f1b05e69ef8e434b113c301ea0d4df0_prof);

        
        $__internal_ae2a7039e1874a42a06e3e0b2a6bf1399a79bfa0faf07889bea34f28a199bf78->leave($__internal_ae2a7039e1874a42a06e3e0b2a6bf1399a79bfa0faf07889bea34f28a199bf78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1018bbff7e66469b156bbc786e09a9fa981277317e4a8f0c40cfdbbb3a8d17b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1018bbff7e66469b156bbc786e09a9fa981277317e4a8f0c40cfdbbb3a8d17b8->enter($__internal_1018bbff7e66469b156bbc786e09a9fa981277317e4a8f0c40cfdbbb3a8d17b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa1ad0c37029eb89552964aafc45e8e7b09a200820714ca490ad05ed1d6bf044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1ad0c37029eb89552964aafc45e8e7b09a200820714ca490ad05ed1d6bf044->enter($__internal_aa1ad0c37029eb89552964aafc45e8e7b09a200820714ca490ad05ed1d6bf044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_aa1ad0c37029eb89552964aafc45e8e7b09a200820714ca490ad05ed1d6bf044->leave($__internal_aa1ad0c37029eb89552964aafc45e8e7b09a200820714ca490ad05ed1d6bf044_prof);

        
        $__internal_1018bbff7e66469b156bbc786e09a9fa981277317e4a8f0c40cfdbbb3a8d17b8->leave($__internal_1018bbff7e66469b156bbc786e09a9fa981277317e4a8f0c40cfdbbb3a8d17b8_prof);

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
