<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ac16ad3a566fa45098918d46fc9da3b255e047489805bae76645ca110bd928ac extends Twig_Template
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
        $__internal_9504c76a02010fa29a5053a1bc4e3505041ceebbdf38100d3166c47ab84ca212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9504c76a02010fa29a5053a1bc4e3505041ceebbdf38100d3166c47ab84ca212->enter($__internal_9504c76a02010fa29a5053a1bc4e3505041ceebbdf38100d3166c47ab84ca212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_613c184a2987cd696c8d4e3e48cac2ffa03e2da1a3bc050daaa7f9315f733693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613c184a2987cd696c8d4e3e48cac2ffa03e2da1a3bc050daaa7f9315f733693->enter($__internal_613c184a2987cd696c8d4e3e48cac2ffa03e2da1a3bc050daaa7f9315f733693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9504c76a02010fa29a5053a1bc4e3505041ceebbdf38100d3166c47ab84ca212->leave($__internal_9504c76a02010fa29a5053a1bc4e3505041ceebbdf38100d3166c47ab84ca212_prof);

        
        $__internal_613c184a2987cd696c8d4e3e48cac2ffa03e2da1a3bc050daaa7f9315f733693->leave($__internal_613c184a2987cd696c8d4e3e48cac2ffa03e2da1a3bc050daaa7f9315f733693_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
