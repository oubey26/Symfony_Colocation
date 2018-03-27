<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f2c85f7127d2fedf0a501ef1bcf2de09e17ba1657bcbdeda789ca2301cb2b54d extends Twig_Template
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
        $__internal_830f68d9c205a2645352de6b6e02b9f8f82215df7e558fbb834cf59eb66eac15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830f68d9c205a2645352de6b6e02b9f8f82215df7e558fbb834cf59eb66eac15->enter($__internal_830f68d9c205a2645352de6b6e02b9f8f82215df7e558fbb834cf59eb66eac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_8d005840185380a7696f5b7c72eccfe9cb721851a80b54479c5ed00274afbb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d005840185380a7696f5b7c72eccfe9cb721851a80b54479c5ed00274afbb52->enter($__internal_8d005840185380a7696f5b7c72eccfe9cb721851a80b54479c5ed00274afbb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_830f68d9c205a2645352de6b6e02b9f8f82215df7e558fbb834cf59eb66eac15->leave($__internal_830f68d9c205a2645352de6b6e02b9f8f82215df7e558fbb834cf59eb66eac15_prof);

        
        $__internal_8d005840185380a7696f5b7c72eccfe9cb721851a80b54479c5ed00274afbb52->leave($__internal_8d005840185380a7696f5b7c72eccfe9cb721851a80b54479c5ed00274afbb52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
