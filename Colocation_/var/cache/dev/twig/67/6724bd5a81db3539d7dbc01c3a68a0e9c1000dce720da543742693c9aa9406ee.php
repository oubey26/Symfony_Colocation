<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec8bdd538899a439954dd9ae35e19ec67c0f8c4d8953f2f2c9d13473afaf7ec9 extends Twig_Template
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
        $__internal_ba309277c14413162202f471999bd6c1abdb43fc19d38c9c9770ec031b5cabfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba309277c14413162202f471999bd6c1abdb43fc19d38c9c9770ec031b5cabfa->enter($__internal_ba309277c14413162202f471999bd6c1abdb43fc19d38c9c9770ec031b5cabfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_041727011836c97e0c940730a99c3936f9b853e30d4110dd6d9e6dc1270078f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041727011836c97e0c940730a99c3936f9b853e30d4110dd6d9e6dc1270078f8->enter($__internal_041727011836c97e0c940730a99c3936f9b853e30d4110dd6d9e6dc1270078f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba309277c14413162202f471999bd6c1abdb43fc19d38c9c9770ec031b5cabfa->leave($__internal_ba309277c14413162202f471999bd6c1abdb43fc19d38c9c9770ec031b5cabfa_prof);

        
        $__internal_041727011836c97e0c940730a99c3936f9b853e30d4110dd6d9e6dc1270078f8->leave($__internal_041727011836c97e0c940730a99c3936f9b853e30d4110dd6d9e6dc1270078f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
