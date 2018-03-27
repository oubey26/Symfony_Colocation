<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_15f5c51bbef2b08f67d9d221669bade3d48ad8a200007bc149f82a8c2781f348 extends Twig_Template
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
        $__internal_568bf2c442854b08504e216cdcce8f4fa5ec2aa88e7b9686c103ef9fa115ebad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568bf2c442854b08504e216cdcce8f4fa5ec2aa88e7b9686c103ef9fa115ebad->enter($__internal_568bf2c442854b08504e216cdcce8f4fa5ec2aa88e7b9686c103ef9fa115ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_656f698dbe45787655b5bd7270563d60246f973367219690222a7356954817cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656f698dbe45787655b5bd7270563d60246f973367219690222a7356954817cd->enter($__internal_656f698dbe45787655b5bd7270563d60246f973367219690222a7356954817cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_568bf2c442854b08504e216cdcce8f4fa5ec2aa88e7b9686c103ef9fa115ebad->leave($__internal_568bf2c442854b08504e216cdcce8f4fa5ec2aa88e7b9686c103ef9fa115ebad_prof);

        
        $__internal_656f698dbe45787655b5bd7270563d60246f973367219690222a7356954817cd->leave($__internal_656f698dbe45787655b5bd7270563d60246f973367219690222a7356954817cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
