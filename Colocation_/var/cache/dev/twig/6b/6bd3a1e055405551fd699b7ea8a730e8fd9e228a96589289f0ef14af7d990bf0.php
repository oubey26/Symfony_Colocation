<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_453171f3ddf7c780c2d1017698b2ff0efc0151fe8ba75c0f613e0d14bac6df00 extends Twig_Template
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
        $__internal_57d5753ee1e1baca655556f6735553b4213467f4e676c8c9a909a487d77afb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d5753ee1e1baca655556f6735553b4213467f4e676c8c9a909a487d77afb1b->enter($__internal_57d5753ee1e1baca655556f6735553b4213467f4e676c8c9a909a487d77afb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dc4b68dce33b9e05895f57e40567b6d1b14fc8b68ab07d84261c80f8735fd2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4b68dce33b9e05895f57e40567b6d1b14fc8b68ab07d84261c80f8735fd2e3->enter($__internal_dc4b68dce33b9e05895f57e40567b6d1b14fc8b68ab07d84261c80f8735fd2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_57d5753ee1e1baca655556f6735553b4213467f4e676c8c9a909a487d77afb1b->leave($__internal_57d5753ee1e1baca655556f6735553b4213467f4e676c8c9a909a487d77afb1b_prof);

        
        $__internal_dc4b68dce33b9e05895f57e40567b6d1b14fc8b68ab07d84261c80f8735fd2e3->leave($__internal_dc4b68dce33b9e05895f57e40567b6d1b14fc8b68ab07d84261c80f8735fd2e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
