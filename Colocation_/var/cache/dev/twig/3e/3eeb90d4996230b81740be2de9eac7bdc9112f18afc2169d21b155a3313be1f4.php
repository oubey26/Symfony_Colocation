<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c4d2192012f6f341026bd0e9eddb6e7913a1d1fe75a2da6143214a2a643ed9ee extends Twig_Template
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
        $__internal_70029f4ac825641731c26b744d8574fd3b92658e16375c3da8e2ec62825593b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70029f4ac825641731c26b744d8574fd3b92658e16375c3da8e2ec62825593b5->enter($__internal_70029f4ac825641731c26b744d8574fd3b92658e16375c3da8e2ec62825593b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2193d34d5adc7026fe83e99954da09428e280b5a627a10d83fbce8772073df9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2193d34d5adc7026fe83e99954da09428e280b5a627a10d83fbce8772073df9d->enter($__internal_2193d34d5adc7026fe83e99954da09428e280b5a627a10d83fbce8772073df9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_70029f4ac825641731c26b744d8574fd3b92658e16375c3da8e2ec62825593b5->leave($__internal_70029f4ac825641731c26b744d8574fd3b92658e16375c3da8e2ec62825593b5_prof);

        
        $__internal_2193d34d5adc7026fe83e99954da09428e280b5a627a10d83fbce8772073df9d->leave($__internal_2193d34d5adc7026fe83e99954da09428e280b5a627a10d83fbce8772073df9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
