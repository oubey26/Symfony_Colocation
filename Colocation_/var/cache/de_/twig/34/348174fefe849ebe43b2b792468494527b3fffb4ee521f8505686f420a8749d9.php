<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_67d91d4f36227fcdf8cbc6eb0368528d7c815edd59e70f88eed1ea8d6cf0d8f3 extends Twig_Template
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
        $__internal_cd38a16e0c61c2f3afa802ee31eabd1e781327d188a48749c98f8b7add148e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd38a16e0c61c2f3afa802ee31eabd1e781327d188a48749c98f8b7add148e03->enter($__internal_cd38a16e0c61c2f3afa802ee31eabd1e781327d188a48749c98f8b7add148e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2d6751521f3ca3bf75d2aa0e47f331b85a729085728b13f3f9fa31205b33176a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6751521f3ca3bf75d2aa0e47f331b85a729085728b13f3f9fa31205b33176a->enter($__internal_2d6751521f3ca3bf75d2aa0e47f331b85a729085728b13f3f9fa31205b33176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd38a16e0c61c2f3afa802ee31eabd1e781327d188a48749c98f8b7add148e03->leave($__internal_cd38a16e0c61c2f3afa802ee31eabd1e781327d188a48749c98f8b7add148e03_prof);

        
        $__internal_2d6751521f3ca3bf75d2aa0e47f331b85a729085728b13f3f9fa31205b33176a->leave($__internal_2d6751521f3ca3bf75d2aa0e47f331b85a729085728b13f3f9fa31205b33176a_prof);

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
