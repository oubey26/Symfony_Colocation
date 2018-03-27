<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_075bfe2c9c301a020b3fd243d4096119155396b87cd99b135b620ff937a03e40 extends Twig_Template
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
        $__internal_3123061995659eb877475cc1385fb1028784dd8cf6c741f6d970e9f3fda22a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3123061995659eb877475cc1385fb1028784dd8cf6c741f6d970e9f3fda22a00->enter($__internal_3123061995659eb877475cc1385fb1028784dd8cf6c741f6d970e9f3fda22a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_704e13db0bd65e54fad8240c37fbc521fe3fef45ce72a08f420c7fc5923a1d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704e13db0bd65e54fad8240c37fbc521fe3fef45ce72a08f420c7fc5923a1d4f->enter($__internal_704e13db0bd65e54fad8240c37fbc521fe3fef45ce72a08f420c7fc5923a1d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3123061995659eb877475cc1385fb1028784dd8cf6c741f6d970e9f3fda22a00->leave($__internal_3123061995659eb877475cc1385fb1028784dd8cf6c741f6d970e9f3fda22a00_prof);

        
        $__internal_704e13db0bd65e54fad8240c37fbc521fe3fef45ce72a08f420c7fc5923a1d4f->leave($__internal_704e13db0bd65e54fad8240c37fbc521fe3fef45ce72a08f420c7fc5923a1d4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
