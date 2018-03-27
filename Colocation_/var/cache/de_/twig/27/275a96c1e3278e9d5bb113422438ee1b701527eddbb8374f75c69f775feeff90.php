<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ba31e229071d079d0fa1b9774c97edd0060e7289f902cceb8731a764f9019099 extends Twig_Template
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
        $__internal_942678df793f5b265b0a6810e339e75a3b5bdad412f6e266896a653123e601a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942678df793f5b265b0a6810e339e75a3b5bdad412f6e266896a653123e601a0->enter($__internal_942678df793f5b265b0a6810e339e75a3b5bdad412f6e266896a653123e601a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_86caf7d3101d4bb3e4f2d192447a27bdd75c62d103e10a7975f0a507c729942f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86caf7d3101d4bb3e4f2d192447a27bdd75c62d103e10a7975f0a507c729942f->enter($__internal_86caf7d3101d4bb3e4f2d192447a27bdd75c62d103e10a7975f0a507c729942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_942678df793f5b265b0a6810e339e75a3b5bdad412f6e266896a653123e601a0->leave($__internal_942678df793f5b265b0a6810e339e75a3b5bdad412f6e266896a653123e601a0_prof);

        
        $__internal_86caf7d3101d4bb3e4f2d192447a27bdd75c62d103e10a7975f0a507c729942f->leave($__internal_86caf7d3101d4bb3e4f2d192447a27bdd75c62d103e10a7975f0a507c729942f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
