<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_65eab69d1f0ade8398918c0e9a891933af083608f401680627c260e469d416be extends Twig_Template
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
        $__internal_e41213b9ff607090d5385a4b692e50da2c7c248a5493b52effa8bf519dc4b9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41213b9ff607090d5385a4b692e50da2c7c248a5493b52effa8bf519dc4b9ad->enter($__internal_e41213b9ff607090d5385a4b692e50da2c7c248a5493b52effa8bf519dc4b9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3ad960f24480a7b39953b2498e3b7c69952550f27aa6bcfa034d359699854fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad960f24480a7b39953b2498e3b7c69952550f27aa6bcfa034d359699854fc2->enter($__internal_3ad960f24480a7b39953b2498e3b7c69952550f27aa6bcfa034d359699854fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e41213b9ff607090d5385a4b692e50da2c7c248a5493b52effa8bf519dc4b9ad->leave($__internal_e41213b9ff607090d5385a4b692e50da2c7c248a5493b52effa8bf519dc4b9ad_prof);

        
        $__internal_3ad960f24480a7b39953b2498e3b7c69952550f27aa6bcfa034d359699854fc2->leave($__internal_3ad960f24480a7b39953b2498e3b7c69952550f27aa6bcfa034d359699854fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
