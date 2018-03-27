<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_eb4b67818284defd7900dd5549539d32b0822470619a5b7cde8b58cb4b8d4626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_262958be6250aaf12890d94e34b4b7899c3e89c99e5a84a4fa3c139c1270b648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262958be6250aaf12890d94e34b4b7899c3e89c99e5a84a4fa3c139c1270b648->enter($__internal_262958be6250aaf12890d94e34b4b7899c3e89c99e5a84a4fa3c139c1270b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d9081cdf7e44f14f4860ef1db31928a1c6b2366d0f499a1bfc0c4283322caf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9081cdf7e44f14f4860ef1db31928a1c6b2366d0f499a1bfc0c4283322caf98->enter($__internal_d9081cdf7e44f14f4860ef1db31928a1c6b2366d0f499a1bfc0c4283322caf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262958be6250aaf12890d94e34b4b7899c3e89c99e5a84a4fa3c139c1270b648->leave($__internal_262958be6250aaf12890d94e34b4b7899c3e89c99e5a84a4fa3c139c1270b648_prof);

        
        $__internal_d9081cdf7e44f14f4860ef1db31928a1c6b2366d0f499a1bfc0c4283322caf98->leave($__internal_d9081cdf7e44f14f4860ef1db31928a1c6b2366d0f499a1bfc0c4283322caf98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b5b0b98848ee1b3d1462fdea16ae9222a636b9b6253caaa008e579e53013276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5b0b98848ee1b3d1462fdea16ae9222a636b9b6253caaa008e579e53013276->enter($__internal_0b5b0b98848ee1b3d1462fdea16ae9222a636b9b6253caaa008e579e53013276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc787f2bf4b42585e641c1266d995c4d698ab5d06f1374f9ac675b23e6d39440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc787f2bf4b42585e641c1266d995c4d698ab5d06f1374f9ac675b23e6d39440->enter($__internal_cc787f2bf4b42585e641c1266d995c4d698ab5d06f1374f9ac675b23e6d39440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cc787f2bf4b42585e641c1266d995c4d698ab5d06f1374f9ac675b23e6d39440->leave($__internal_cc787f2bf4b42585e641c1266d995c4d698ab5d06f1374f9ac675b23e6d39440_prof);

        
        $__internal_0b5b0b98848ee1b3d1462fdea16ae9222a636b9b6253caaa008e579e53013276->leave($__internal_0b5b0b98848ee1b3d1462fdea16ae9222a636b9b6253caaa008e579e53013276_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
