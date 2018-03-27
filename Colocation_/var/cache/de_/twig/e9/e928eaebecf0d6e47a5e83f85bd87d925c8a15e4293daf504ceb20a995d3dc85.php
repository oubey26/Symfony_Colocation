<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0861eb3a553d4b87cd72f3e42b66c07744b3b87ba5a79ecbd0c34e5f190934cd extends Twig_Template
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
        $__internal_dbc0306a8da73eaf7364fd710d835b57035a2c787d953405045d895d0515d88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc0306a8da73eaf7364fd710d835b57035a2c787d953405045d895d0515d88a->enter($__internal_dbc0306a8da73eaf7364fd710d835b57035a2c787d953405045d895d0515d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a61c49e1d54ca8f5f0ab6788afaa4bce932484a7b03183d419499e5fa6480a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61c49e1d54ca8f5f0ab6788afaa4bce932484a7b03183d419499e5fa6480a72->enter($__internal_a61c49e1d54ca8f5f0ab6788afaa4bce932484a7b03183d419499e5fa6480a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dbc0306a8da73eaf7364fd710d835b57035a2c787d953405045d895d0515d88a->leave($__internal_dbc0306a8da73eaf7364fd710d835b57035a2c787d953405045d895d0515d88a_prof);

        
        $__internal_a61c49e1d54ca8f5f0ab6788afaa4bce932484a7b03183d419499e5fa6480a72->leave($__internal_a61c49e1d54ca8f5f0ab6788afaa4bce932484a7b03183d419499e5fa6480a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
