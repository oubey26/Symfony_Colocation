<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_050108c6ad27f0b4c695db822ae7bce3c84d37679aba1b76fa184dc5cbc07351 extends Twig_Template
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
        $__internal_67cfa72dece9dd3c637df6698e1497342d451ed668075b262d5c1be5c23663b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cfa72dece9dd3c637df6698e1497342d451ed668075b262d5c1be5c23663b4->enter($__internal_67cfa72dece9dd3c637df6698e1497342d451ed668075b262d5c1be5c23663b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_17fe0945b347f36fce6fec5df18eef7b9e1bb14a06bb5b6707a48d2ae106e63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fe0945b347f36fce6fec5df18eef7b9e1bb14a06bb5b6707a48d2ae106e63e->enter($__internal_17fe0945b347f36fce6fec5df18eef7b9e1bb14a06bb5b6707a48d2ae106e63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_67cfa72dece9dd3c637df6698e1497342d451ed668075b262d5c1be5c23663b4->leave($__internal_67cfa72dece9dd3c637df6698e1497342d451ed668075b262d5c1be5c23663b4_prof);

        
        $__internal_17fe0945b347f36fce6fec5df18eef7b9e1bb14a06bb5b6707a48d2ae106e63e->leave($__internal_17fe0945b347f36fce6fec5df18eef7b9e1bb14a06bb5b6707a48d2ae106e63e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
