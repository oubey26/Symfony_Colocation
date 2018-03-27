<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f3c0d27df97b37201364635208fcd8fec6e96f267d5df2f38a569cf5b98bee8a extends Twig_Template
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
        $__internal_69e2d1b52c18c412a3596c02983f01f7810dcdc6d2aba98fd808eb60203772b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e2d1b52c18c412a3596c02983f01f7810dcdc6d2aba98fd808eb60203772b6->enter($__internal_69e2d1b52c18c412a3596c02983f01f7810dcdc6d2aba98fd808eb60203772b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_27ac0d32944ad5342b1b3b9910c6b766e3fb3e330482997c7604ecc9b01ec7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ac0d32944ad5342b1b3b9910c6b766e3fb3e330482997c7604ecc9b01ec7f8->enter($__internal_27ac0d32944ad5342b1b3b9910c6b766e3fb3e330482997c7604ecc9b01ec7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_69e2d1b52c18c412a3596c02983f01f7810dcdc6d2aba98fd808eb60203772b6->leave($__internal_69e2d1b52c18c412a3596c02983f01f7810dcdc6d2aba98fd808eb60203772b6_prof);

        
        $__internal_27ac0d32944ad5342b1b3b9910c6b766e3fb3e330482997c7604ecc9b01ec7f8->leave($__internal_27ac0d32944ad5342b1b3b9910c6b766e3fb3e330482997c7604ecc9b01ec7f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
