<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8fe1290cbbaa3549fdb85ad38535775e3844babf681d392441c6d8cd70196ae8 extends Twig_Template
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
        $__internal_78ebbd73d3ff148c2b6d597e63978b3d7d6bc1bdcd9bd7b8392fb4093e87f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ebbd73d3ff148c2b6d597e63978b3d7d6bc1bdcd9bd7b8392fb4093e87f446->enter($__internal_78ebbd73d3ff148c2b6d597e63978b3d7d6bc1bdcd9bd7b8392fb4093e87f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_24ae1cf658626cc5c3b28bf4fe10c9f1139d44c980570ca546d73c8acd1bba54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae1cf658626cc5c3b28bf4fe10c9f1139d44c980570ca546d73c8acd1bba54->enter($__internal_24ae1cf658626cc5c3b28bf4fe10c9f1139d44c980570ca546d73c8acd1bba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_78ebbd73d3ff148c2b6d597e63978b3d7d6bc1bdcd9bd7b8392fb4093e87f446->leave($__internal_78ebbd73d3ff148c2b6d597e63978b3d7d6bc1bdcd9bd7b8392fb4093e87f446_prof);

        
        $__internal_24ae1cf658626cc5c3b28bf4fe10c9f1139d44c980570ca546d73c8acd1bba54->leave($__internal_24ae1cf658626cc5c3b28bf4fe10c9f1139d44c980570ca546d73c8acd1bba54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
