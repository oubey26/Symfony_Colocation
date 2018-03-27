<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cd28c0856a7706691934ce4b1d9c139e3144a40ce982890546379e4e81526caa extends Twig_Template
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
        $__internal_b1da723341bfeec3f67a76b749ad542eb259e51b660668467718bd4e2dc0bf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1da723341bfeec3f67a76b749ad542eb259e51b660668467718bd4e2dc0bf59->enter($__internal_b1da723341bfeec3f67a76b749ad542eb259e51b660668467718bd4e2dc0bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b6895bbe7c1d87847071ab5dbda02f97ce8124f2bd47e652996ae07eb55eab02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6895bbe7c1d87847071ab5dbda02f97ce8124f2bd47e652996ae07eb55eab02->enter($__internal_b6895bbe7c1d87847071ab5dbda02f97ce8124f2bd47e652996ae07eb55eab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b1da723341bfeec3f67a76b749ad542eb259e51b660668467718bd4e2dc0bf59->leave($__internal_b1da723341bfeec3f67a76b749ad542eb259e51b660668467718bd4e2dc0bf59_prof);

        
        $__internal_b6895bbe7c1d87847071ab5dbda02f97ce8124f2bd47e652996ae07eb55eab02->leave($__internal_b6895bbe7c1d87847071ab5dbda02f97ce8124f2bd47e652996ae07eb55eab02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
