<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7286a1461a93bdf60019d5c2616755fb8cb3db30f255867b2db9fd1f88fe909e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd6cc733b4e937894acf3d80299021557167ddedc32d379b800da109c862046a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6cc733b4e937894acf3d80299021557167ddedc32d379b800da109c862046a->enter($__internal_cd6cc733b4e937894acf3d80299021557167ddedc32d379b800da109c862046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_0d71b68307ec27ab2be7a14e604640a820342ccf1fe53cf5c04f784773047736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d71b68307ec27ab2be7a14e604640a820342ccf1fe53cf5c04f784773047736->enter($__internal_0d71b68307ec27ab2be7a14e604640a820342ccf1fe53cf5c04f784773047736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd6cc733b4e937894acf3d80299021557167ddedc32d379b800da109c862046a->leave($__internal_cd6cc733b4e937894acf3d80299021557167ddedc32d379b800da109c862046a_prof);

        
        $__internal_0d71b68307ec27ab2be7a14e604640a820342ccf1fe53cf5c04f784773047736->leave($__internal_0d71b68307ec27ab2be7a14e604640a820342ccf1fe53cf5c04f784773047736_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
