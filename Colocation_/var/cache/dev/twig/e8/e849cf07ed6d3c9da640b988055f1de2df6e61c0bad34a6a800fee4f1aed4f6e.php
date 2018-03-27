<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f479328357c5af288f032d7e5774b27f8ac6cdd5339fc0c144a22fda2eff08f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_e63f97a5e64271ba49b8069db22bbb00eab5e0d190b8108d2fa3ec72cfbde7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63f97a5e64271ba49b8069db22bbb00eab5e0d190b8108d2fa3ec72cfbde7e4->enter($__internal_e63f97a5e64271ba49b8069db22bbb00eab5e0d190b8108d2fa3ec72cfbde7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_15b2689222cca48c5e0be3354b9996013cf2943b1d156c9e30daec3f44ef5732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2689222cca48c5e0be3354b9996013cf2943b1d156c9e30daec3f44ef5732->enter($__internal_15b2689222cca48c5e0be3354b9996013cf2943b1d156c9e30daec3f44ef5732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63f97a5e64271ba49b8069db22bbb00eab5e0d190b8108d2fa3ec72cfbde7e4->leave($__internal_e63f97a5e64271ba49b8069db22bbb00eab5e0d190b8108d2fa3ec72cfbde7e4_prof);

        
        $__internal_15b2689222cca48c5e0be3354b9996013cf2943b1d156c9e30daec3f44ef5732->leave($__internal_15b2689222cca48c5e0be3354b9996013cf2943b1d156c9e30daec3f44ef5732_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8e64352cef57b867072a890327dcf47d67bc92e52f1bcf7513c46fbf2c5d384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e64352cef57b867072a890327dcf47d67bc92e52f1bcf7513c46fbf2c5d384->enter($__internal_c8e64352cef57b867072a890327dcf47d67bc92e52f1bcf7513c46fbf2c5d384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_997f602ff054e7a79cfb3b8d6c5e99d07297dbb52d89049ecad783fcf68db621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997f602ff054e7a79cfb3b8d6c5e99d07297dbb52d89049ecad783fcf68db621->enter($__internal_997f602ff054e7a79cfb3b8d6c5e99d07297dbb52d89049ecad783fcf68db621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_997f602ff054e7a79cfb3b8d6c5e99d07297dbb52d89049ecad783fcf68db621->leave($__internal_997f602ff054e7a79cfb3b8d6c5e99d07297dbb52d89049ecad783fcf68db621_prof);

        
        $__internal_c8e64352cef57b867072a890327dcf47d67bc92e52f1bcf7513c46fbf2c5d384->leave($__internal_c8e64352cef57b867072a890327dcf47d67bc92e52f1bcf7513c46fbf2c5d384_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
