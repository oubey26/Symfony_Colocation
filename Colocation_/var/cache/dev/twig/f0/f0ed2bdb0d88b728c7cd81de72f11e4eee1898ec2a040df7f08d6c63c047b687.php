<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3d6c0859ebf9dc23e2c00ef279c0c3d419ac4f55596de8e86b7a86c57aeb6374 extends Twig_Template
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
        $__internal_50a7440577cd70f0b7e119dfa1b443a15a213462683e3606b9cddaf320bbc197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a7440577cd70f0b7e119dfa1b443a15a213462683e3606b9cddaf320bbc197->enter($__internal_50a7440577cd70f0b7e119dfa1b443a15a213462683e3606b9cddaf320bbc197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_14a4dcbd7730694abeebe4d28900546a04ec4b63a887782e61b3424ed5a2a6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a4dcbd7730694abeebe4d28900546a04ec4b63a887782e61b3424ed5a2a6ea->enter($__internal_14a4dcbd7730694abeebe4d28900546a04ec4b63a887782e61b3424ed5a2a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_50a7440577cd70f0b7e119dfa1b443a15a213462683e3606b9cddaf320bbc197->leave($__internal_50a7440577cd70f0b7e119dfa1b443a15a213462683e3606b9cddaf320bbc197_prof);

        
        $__internal_14a4dcbd7730694abeebe4d28900546a04ec4b63a887782e61b3424ed5a2a6ea->leave($__internal_14a4dcbd7730694abeebe4d28900546a04ec4b63a887782e61b3424ed5a2a6ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
