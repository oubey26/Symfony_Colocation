<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4cf5a931c5fa919dcedf1d876fdae1220006e5829284fac1867d5caa89c62042 extends Twig_Template
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
        $__internal_f3a7b47441caa8afdde79be46ca29476034999e89ba333407e7e070e8c128afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a7b47441caa8afdde79be46ca29476034999e89ba333407e7e070e8c128afd->enter($__internal_f3a7b47441caa8afdde79be46ca29476034999e89ba333407e7e070e8c128afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_03bd6049fc1de14c041047dd90be06fa996e1a0a54b623ea157a87d283f101f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bd6049fc1de14c041047dd90be06fa996e1a0a54b623ea157a87d283f101f3->enter($__internal_03bd6049fc1de14c041047dd90be06fa996e1a0a54b623ea157a87d283f101f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f3a7b47441caa8afdde79be46ca29476034999e89ba333407e7e070e8c128afd->leave($__internal_f3a7b47441caa8afdde79be46ca29476034999e89ba333407e7e070e8c128afd_prof);

        
        $__internal_03bd6049fc1de14c041047dd90be06fa996e1a0a54b623ea157a87d283f101f3->leave($__internal_03bd6049fc1de14c041047dd90be06fa996e1a0a54b623ea157a87d283f101f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
