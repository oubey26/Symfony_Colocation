<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_90e0f5ec8902127620e91b6264400785b286670d157e82580ee879c2e562b159 extends Twig_Template
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
        $__internal_d94c4ebecfc5e569b240ab820089d6be3309819decdbb7944abe93fb7dd4f771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94c4ebecfc5e569b240ab820089d6be3309819decdbb7944abe93fb7dd4f771->enter($__internal_d94c4ebecfc5e569b240ab820089d6be3309819decdbb7944abe93fb7dd4f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f739e6a2ff102c6c1903315bfd23aa8517ae7f63730c70cef825a8e5f2752737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f739e6a2ff102c6c1903315bfd23aa8517ae7f63730c70cef825a8e5f2752737->enter($__internal_f739e6a2ff102c6c1903315bfd23aa8517ae7f63730c70cef825a8e5f2752737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d94c4ebecfc5e569b240ab820089d6be3309819decdbb7944abe93fb7dd4f771->leave($__internal_d94c4ebecfc5e569b240ab820089d6be3309819decdbb7944abe93fb7dd4f771_prof);

        
        $__internal_f739e6a2ff102c6c1903315bfd23aa8517ae7f63730c70cef825a8e5f2752737->leave($__internal_f739e6a2ff102c6c1903315bfd23aa8517ae7f63730c70cef825a8e5f2752737_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
