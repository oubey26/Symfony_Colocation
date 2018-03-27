<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5456f25cde835212e324e7717f1e8eab30940cc88dc02d983d08600e4a00fbf0 extends Twig_Template
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
        $__internal_bea51ce4fb6b599c8092577ccbbd2d425dcf4add96283e60c8fd1fbafd5f5962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea51ce4fb6b599c8092577ccbbd2d425dcf4add96283e60c8fd1fbafd5f5962->enter($__internal_bea51ce4fb6b599c8092577ccbbd2d425dcf4add96283e60c8fd1fbafd5f5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3c8b01df4e882cd6c06b5e86196d911930971ebd7a3573a3adbbde637152c257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8b01df4e882cd6c06b5e86196d911930971ebd7a3573a3adbbde637152c257->enter($__internal_3c8b01df4e882cd6c06b5e86196d911930971ebd7a3573a3adbbde637152c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bea51ce4fb6b599c8092577ccbbd2d425dcf4add96283e60c8fd1fbafd5f5962->leave($__internal_bea51ce4fb6b599c8092577ccbbd2d425dcf4add96283e60c8fd1fbafd5f5962_prof);

        
        $__internal_3c8b01df4e882cd6c06b5e86196d911930971ebd7a3573a3adbbde637152c257->leave($__internal_3c8b01df4e882cd6c06b5e86196d911930971ebd7a3573a3adbbde637152c257_prof);

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
