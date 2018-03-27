<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f819a8ade82ddc4908bbe3c171c2f7f58644c5fbe8883bcd070ebdd634b97135 extends Twig_Template
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
        $__internal_6f3b0e2a50d14cbd418bfaf1c8bf23fa3d3953bc6eb52ca9a38c41db80dcc064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3b0e2a50d14cbd418bfaf1c8bf23fa3d3953bc6eb52ca9a38c41db80dcc064->enter($__internal_6f3b0e2a50d14cbd418bfaf1c8bf23fa3d3953bc6eb52ca9a38c41db80dcc064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b7110257003ad2d14c3a6dd58d88e5b60c3297f9626f045aebc02f2b1387a978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7110257003ad2d14c3a6dd58d88e5b60c3297f9626f045aebc02f2b1387a978->enter($__internal_b7110257003ad2d14c3a6dd58d88e5b60c3297f9626f045aebc02f2b1387a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6f3b0e2a50d14cbd418bfaf1c8bf23fa3d3953bc6eb52ca9a38c41db80dcc064->leave($__internal_6f3b0e2a50d14cbd418bfaf1c8bf23fa3d3953bc6eb52ca9a38c41db80dcc064_prof);

        
        $__internal_b7110257003ad2d14c3a6dd58d88e5b60c3297f9626f045aebc02f2b1387a978->leave($__internal_b7110257003ad2d14c3a6dd58d88e5b60c3297f9626f045aebc02f2b1387a978_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
