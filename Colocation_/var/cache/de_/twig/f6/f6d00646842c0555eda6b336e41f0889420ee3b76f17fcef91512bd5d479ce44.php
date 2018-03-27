<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_469bb255617f1f3df5bfb03bc5c4036773fb26d81799de67ecf8fe5308060167 extends Twig_Template
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
        $__internal_c74d34897070fac9a8a70bdaeedae837fa6f8836de2981cee6efc402afe72d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74d34897070fac9a8a70bdaeedae837fa6f8836de2981cee6efc402afe72d82->enter($__internal_c74d34897070fac9a8a70bdaeedae837fa6f8836de2981cee6efc402afe72d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_99dd83bf38da3790d5659abcd92277fd35f2cffc593dc492dd9d6377aedfe4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dd83bf38da3790d5659abcd92277fd35f2cffc593dc492dd9d6377aedfe4d0->enter($__internal_99dd83bf38da3790d5659abcd92277fd35f2cffc593dc492dd9d6377aedfe4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c74d34897070fac9a8a70bdaeedae837fa6f8836de2981cee6efc402afe72d82->leave($__internal_c74d34897070fac9a8a70bdaeedae837fa6f8836de2981cee6efc402afe72d82_prof);

        
        $__internal_99dd83bf38da3790d5659abcd92277fd35f2cffc593dc492dd9d6377aedfe4d0->leave($__internal_99dd83bf38da3790d5659abcd92277fd35f2cffc593dc492dd9d6377aedfe4d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
