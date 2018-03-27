<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e8d21b9599bc22862f54aed4f212c1670d3b773e1795b9b815909571cae620ad extends Twig_Template
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
        $__internal_17778abaff1569c1381c5494f3c22ee103b665b89c30e5be49586f88d7b80d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17778abaff1569c1381c5494f3c22ee103b665b89c30e5be49586f88d7b80d36->enter($__internal_17778abaff1569c1381c5494f3c22ee103b665b89c30e5be49586f88d7b80d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a477e28d2dde7dd18c4bcb7af9850f7bd0d7933680a05427121c64281a74dd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a477e28d2dde7dd18c4bcb7af9850f7bd0d7933680a05427121c64281a74dd19->enter($__internal_a477e28d2dde7dd18c4bcb7af9850f7bd0d7933680a05427121c64281a74dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_17778abaff1569c1381c5494f3c22ee103b665b89c30e5be49586f88d7b80d36->leave($__internal_17778abaff1569c1381c5494f3c22ee103b665b89c30e5be49586f88d7b80d36_prof);

        
        $__internal_a477e28d2dde7dd18c4bcb7af9850f7bd0d7933680a05427121c64281a74dd19->leave($__internal_a477e28d2dde7dd18c4bcb7af9850f7bd0d7933680a05427121c64281a74dd19_prof);

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
