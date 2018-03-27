<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_f23bcd186df420d9c86448abcbfb030f006f1cc55dcbd7218f20936c31bf16e1 extends Twig_Template
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
        $__internal_6924b563f3a7f5a6df1612e4dcfa73e726f36fda5f6feaee80a182616f1a4446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6924b563f3a7f5a6df1612e4dcfa73e726f36fda5f6feaee80a182616f1a4446->enter($__internal_6924b563f3a7f5a6df1612e4dcfa73e726f36fda5f6feaee80a182616f1a4446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5e12a3ed724006cbe54947932d83db64871304d7260903deddc927a33ff314c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e12a3ed724006cbe54947932d83db64871304d7260903deddc927a33ff314c1->enter($__internal_5e12a3ed724006cbe54947932d83db64871304d7260903deddc927a33ff314c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6924b563f3a7f5a6df1612e4dcfa73e726f36fda5f6feaee80a182616f1a4446->leave($__internal_6924b563f3a7f5a6df1612e4dcfa73e726f36fda5f6feaee80a182616f1a4446_prof);

        
        $__internal_5e12a3ed724006cbe54947932d83db64871304d7260903deddc927a33ff314c1->leave($__internal_5e12a3ed724006cbe54947932d83db64871304d7260903deddc927a33ff314c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
