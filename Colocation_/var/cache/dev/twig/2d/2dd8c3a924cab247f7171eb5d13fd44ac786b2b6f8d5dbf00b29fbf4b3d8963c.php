<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2bd33b3b6313e4297e9467fb8ba0e2662acf20547a6e04bc3b562a9c7a5ddc4f extends Twig_Template
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
        $__internal_a65bab4e1c1beb0a1a976b5a8776b4450c109ba24f6d934fae21f9cea9abf930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65bab4e1c1beb0a1a976b5a8776b4450c109ba24f6d934fae21f9cea9abf930->enter($__internal_a65bab4e1c1beb0a1a976b5a8776b4450c109ba24f6d934fae21f9cea9abf930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3d2aa926059147a9f27365d7c6382cc2d24dd0e901940e388978a02b974fed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2aa926059147a9f27365d7c6382cc2d24dd0e901940e388978a02b974fed40->enter($__internal_3d2aa926059147a9f27365d7c6382cc2d24dd0e901940e388978a02b974fed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a65bab4e1c1beb0a1a976b5a8776b4450c109ba24f6d934fae21f9cea9abf930->leave($__internal_a65bab4e1c1beb0a1a976b5a8776b4450c109ba24f6d934fae21f9cea9abf930_prof);

        
        $__internal_3d2aa926059147a9f27365d7c6382cc2d24dd0e901940e388978a02b974fed40->leave($__internal_3d2aa926059147a9f27365d7c6382cc2d24dd0e901940e388978a02b974fed40_prof);

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
