<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9b08d1b3a34b1820c217c428608b42df63aeaaff7186cbb8fc18e04ffe2a5a9d extends Twig_Template
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
        $__internal_edbb6275623f07c869dd982829b8e7b3c04a61f4ef3da831cfb3c6d219955a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbb6275623f07c869dd982829b8e7b3c04a61f4ef3da831cfb3c6d219955a91->enter($__internal_edbb6275623f07c869dd982829b8e7b3c04a61f4ef3da831cfb3c6d219955a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_918ef3a0725d00b68859ace636712c2946ea11f4d95862b2294d0d37614d3a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918ef3a0725d00b68859ace636712c2946ea11f4d95862b2294d0d37614d3a27->enter($__internal_918ef3a0725d00b68859ace636712c2946ea11f4d95862b2294d0d37614d3a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_edbb6275623f07c869dd982829b8e7b3c04a61f4ef3da831cfb3c6d219955a91->leave($__internal_edbb6275623f07c869dd982829b8e7b3c04a61f4ef3da831cfb3c6d219955a91_prof);

        
        $__internal_918ef3a0725d00b68859ace636712c2946ea11f4d95862b2294d0d37614d3a27->leave($__internal_918ef3a0725d00b68859ace636712c2946ea11f4d95862b2294d0d37614d3a27_prof);

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
