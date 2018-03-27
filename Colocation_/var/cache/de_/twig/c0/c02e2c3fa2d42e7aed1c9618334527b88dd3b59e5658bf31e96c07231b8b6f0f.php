<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_39b52c6936755ad464331cae3e4194b60142f258673bbf59af91329294291a87 extends Twig_Template
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
        $__internal_68a67b4ad208c5aaafe759c1f25badc5aab19b2c70f3120be5dd89e4cafc0cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a67b4ad208c5aaafe759c1f25badc5aab19b2c70f3120be5dd89e4cafc0cd4->enter($__internal_68a67b4ad208c5aaafe759c1f25badc5aab19b2c70f3120be5dd89e4cafc0cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4d7cdce2f18a0378f910562afdbb61ee824ada773b4b5024ebb7e015f66cd62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7cdce2f18a0378f910562afdbb61ee824ada773b4b5024ebb7e015f66cd62d->enter($__internal_4d7cdce2f18a0378f910562afdbb61ee824ada773b4b5024ebb7e015f66cd62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_68a67b4ad208c5aaafe759c1f25badc5aab19b2c70f3120be5dd89e4cafc0cd4->leave($__internal_68a67b4ad208c5aaafe759c1f25badc5aab19b2c70f3120be5dd89e4cafc0cd4_prof);

        
        $__internal_4d7cdce2f18a0378f910562afdbb61ee824ada773b4b5024ebb7e015f66cd62d->leave($__internal_4d7cdce2f18a0378f910562afdbb61ee824ada773b4b5024ebb7e015f66cd62d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
