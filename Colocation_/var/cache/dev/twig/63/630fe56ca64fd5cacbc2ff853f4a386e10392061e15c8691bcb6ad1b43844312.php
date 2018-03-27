<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_75079c2ecef46c63b1b4a20812a943bf41c74a367e45e58b00b927d1041a3add extends Twig_Template
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
        $__internal_6f38c92d30cc68389f273755fa1f4db424124a43963b6da395726acc3c1e79c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f38c92d30cc68389f273755fa1f4db424124a43963b6da395726acc3c1e79c0->enter($__internal_6f38c92d30cc68389f273755fa1f4db424124a43963b6da395726acc3c1e79c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b0ac4dfef3aecd181a4050783438a95be9d600a4abeabd79b7827f1a76e220a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ac4dfef3aecd181a4050783438a95be9d600a4abeabd79b7827f1a76e220a8->enter($__internal_b0ac4dfef3aecd181a4050783438a95be9d600a4abeabd79b7827f1a76e220a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6f38c92d30cc68389f273755fa1f4db424124a43963b6da395726acc3c1e79c0->leave($__internal_6f38c92d30cc68389f273755fa1f4db424124a43963b6da395726acc3c1e79c0_prof);

        
        $__internal_b0ac4dfef3aecd181a4050783438a95be9d600a4abeabd79b7827f1a76e220a8->leave($__internal_b0ac4dfef3aecd181a4050783438a95be9d600a4abeabd79b7827f1a76e220a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
