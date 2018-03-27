<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_34a1b6fc1657820621a5f6ed13baad3c96b3862961a2b3b59f8588587efae296 extends Twig_Template
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
        $__internal_2679c0154ea8517a18bc72ac6b77f02ed2357202a44e6608fdec52ed3ff463a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2679c0154ea8517a18bc72ac6b77f02ed2357202a44e6608fdec52ed3ff463a4->enter($__internal_2679c0154ea8517a18bc72ac6b77f02ed2357202a44e6608fdec52ed3ff463a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a631b12872dc56641d2001e7ae1220cdae07561174fd83ca36011f5d377abf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a631b12872dc56641d2001e7ae1220cdae07561174fd83ca36011f5d377abf83->enter($__internal_a631b12872dc56641d2001e7ae1220cdae07561174fd83ca36011f5d377abf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2679c0154ea8517a18bc72ac6b77f02ed2357202a44e6608fdec52ed3ff463a4->leave($__internal_2679c0154ea8517a18bc72ac6b77f02ed2357202a44e6608fdec52ed3ff463a4_prof);

        
        $__internal_a631b12872dc56641d2001e7ae1220cdae07561174fd83ca36011f5d377abf83->leave($__internal_a631b12872dc56641d2001e7ae1220cdae07561174fd83ca36011f5d377abf83_prof);

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
