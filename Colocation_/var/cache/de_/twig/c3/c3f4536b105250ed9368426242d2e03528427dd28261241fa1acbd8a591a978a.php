<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cde02e45f64c9d722a369658a27758a4a76c852be63853cb51584b82438479ad extends Twig_Template
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
        $__internal_e6fb589642431029d2dbeea538cadb6ac59eb5fa3e4183e9264fae1e1e02a4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fb589642431029d2dbeea538cadb6ac59eb5fa3e4183e9264fae1e1e02a4b2->enter($__internal_e6fb589642431029d2dbeea538cadb6ac59eb5fa3e4183e9264fae1e1e02a4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_96e351bd4320d8b5b80a8b20d66f05d67ee16073b4ca28466967b7b026f4265e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e351bd4320d8b5b80a8b20d66f05d67ee16073b4ca28466967b7b026f4265e->enter($__internal_96e351bd4320d8b5b80a8b20d66f05d67ee16073b4ca28466967b7b026f4265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e6fb589642431029d2dbeea538cadb6ac59eb5fa3e4183e9264fae1e1e02a4b2->leave($__internal_e6fb589642431029d2dbeea538cadb6ac59eb5fa3e4183e9264fae1e1e02a4b2_prof);

        
        $__internal_96e351bd4320d8b5b80a8b20d66f05d67ee16073b4ca28466967b7b026f4265e->leave($__internal_96e351bd4320d8b5b80a8b20d66f05d67ee16073b4ca28466967b7b026f4265e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
