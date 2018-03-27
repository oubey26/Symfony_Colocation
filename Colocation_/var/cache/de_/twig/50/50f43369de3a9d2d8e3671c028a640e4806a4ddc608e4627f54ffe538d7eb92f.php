<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7481aa68de56ec70cc517733dd0b4846709cd0ef64448bd3e7f4401691609faf extends Twig_Template
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
        $__internal_d81fe34d179fc331b7ac2b47ded020e523488ee98ffeb16bb0d22901b0f32f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81fe34d179fc331b7ac2b47ded020e523488ee98ffeb16bb0d22901b0f32f93->enter($__internal_d81fe34d179fc331b7ac2b47ded020e523488ee98ffeb16bb0d22901b0f32f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_23b9c825a529d3db4a8c11e1943f941bf2f48cd7147193aa4f19e156c53ae447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b9c825a529d3db4a8c11e1943f941bf2f48cd7147193aa4f19e156c53ae447->enter($__internal_23b9c825a529d3db4a8c11e1943f941bf2f48cd7147193aa4f19e156c53ae447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d81fe34d179fc331b7ac2b47ded020e523488ee98ffeb16bb0d22901b0f32f93->leave($__internal_d81fe34d179fc331b7ac2b47ded020e523488ee98ffeb16bb0d22901b0f32f93_prof);

        
        $__internal_23b9c825a529d3db4a8c11e1943f941bf2f48cd7147193aa4f19e156c53ae447->leave($__internal_23b9c825a529d3db4a8c11e1943f941bf2f48cd7147193aa4f19e156c53ae447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
