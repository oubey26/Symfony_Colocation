<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_75b0b4459fc893b3ade5fef4a5447503e709e4e6066f34194fe4a8cffbeff49c extends Twig_Template
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
        $__internal_f8d0c2925b2b9eb883ae3b8106898f00176541945221184155e2bb2784b468ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d0c2925b2b9eb883ae3b8106898f00176541945221184155e2bb2784b468ae->enter($__internal_f8d0c2925b2b9eb883ae3b8106898f00176541945221184155e2bb2784b468ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b8313df68536570189951cd32b8f88c973c542cea79e23643657d8cb59e3dbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8313df68536570189951cd32b8f88c973c542cea79e23643657d8cb59e3dbe9->enter($__internal_b8313df68536570189951cd32b8f88c973c542cea79e23643657d8cb59e3dbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f8d0c2925b2b9eb883ae3b8106898f00176541945221184155e2bb2784b468ae->leave($__internal_f8d0c2925b2b9eb883ae3b8106898f00176541945221184155e2bb2784b468ae_prof);

        
        $__internal_b8313df68536570189951cd32b8f88c973c542cea79e23643657d8cb59e3dbe9->leave($__internal_b8313df68536570189951cd32b8f88c973c542cea79e23643657d8cb59e3dbe9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
