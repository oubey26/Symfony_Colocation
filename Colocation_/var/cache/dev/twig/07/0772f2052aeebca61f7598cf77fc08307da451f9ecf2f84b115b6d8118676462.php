<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e7c8cc83e2843841ae10f2cf98e127383d95f35b7588107516ea431b5accec1d extends Twig_Template
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
        $__internal_f51da80d1936a592959834fe0e8d5ce75fdc3cd528b5c4ae75d5b56ed57f68b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51da80d1936a592959834fe0e8d5ce75fdc3cd528b5c4ae75d5b56ed57f68b2->enter($__internal_f51da80d1936a592959834fe0e8d5ce75fdc3cd528b5c4ae75d5b56ed57f68b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3110d15c4d42cf43aebea7cbd12079b6d38d0def6d2d40068dbf6d00b594d98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3110d15c4d42cf43aebea7cbd12079b6d38d0def6d2d40068dbf6d00b594d98a->enter($__internal_3110d15c4d42cf43aebea7cbd12079b6d38d0def6d2d40068dbf6d00b594d98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f51da80d1936a592959834fe0e8d5ce75fdc3cd528b5c4ae75d5b56ed57f68b2->leave($__internal_f51da80d1936a592959834fe0e8d5ce75fdc3cd528b5c4ae75d5b56ed57f68b2_prof);

        
        $__internal_3110d15c4d42cf43aebea7cbd12079b6d38d0def6d2d40068dbf6d00b594d98a->leave($__internal_3110d15c4d42cf43aebea7cbd12079b6d38d0def6d2d40068dbf6d00b594d98a_prof);

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
