<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e0f427cefacb164037114f74da8f6a0f4afefec2f314ab745e539c62e4b063d4 extends Twig_Template
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
        $__internal_bfb8b36edd709de0efefd2bb553119cd9507460df522a646259140ae07b61c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb8b36edd709de0efefd2bb553119cd9507460df522a646259140ae07b61c49->enter($__internal_bfb8b36edd709de0efefd2bb553119cd9507460df522a646259140ae07b61c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8c9b7a247c18e22adef20ed4a43442f3455e7d9b92e5cc7bceaadd5edf86f066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9b7a247c18e22adef20ed4a43442f3455e7d9b92e5cc7bceaadd5edf86f066->enter($__internal_8c9b7a247c18e22adef20ed4a43442f3455e7d9b92e5cc7bceaadd5edf86f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bfb8b36edd709de0efefd2bb553119cd9507460df522a646259140ae07b61c49->leave($__internal_bfb8b36edd709de0efefd2bb553119cd9507460df522a646259140ae07b61c49_prof);

        
        $__internal_8c9b7a247c18e22adef20ed4a43442f3455e7d9b92e5cc7bceaadd5edf86f066->leave($__internal_8c9b7a247c18e22adef20ed4a43442f3455e7d9b92e5cc7bceaadd5edf86f066_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
