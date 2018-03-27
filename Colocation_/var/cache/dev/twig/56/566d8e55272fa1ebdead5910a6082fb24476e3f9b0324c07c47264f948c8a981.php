<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3456715a71efb0b315aaa759f326094fe41b053544041e7df7f4fdbc5c874abe extends Twig_Template
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
        $__internal_3abcd41dea387c3f2ba513ce303dd2a524bf0c4d43cc9c5430d23509a955a9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abcd41dea387c3f2ba513ce303dd2a524bf0c4d43cc9c5430d23509a955a9b4->enter($__internal_3abcd41dea387c3f2ba513ce303dd2a524bf0c4d43cc9c5430d23509a955a9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e088c62e5f1afb6b2820e8a0704be6ad567cdcb833f962ab0676ef8960923573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e088c62e5f1afb6b2820e8a0704be6ad567cdcb833f962ab0676ef8960923573->enter($__internal_e088c62e5f1afb6b2820e8a0704be6ad567cdcb833f962ab0676ef8960923573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3abcd41dea387c3f2ba513ce303dd2a524bf0c4d43cc9c5430d23509a955a9b4->leave($__internal_3abcd41dea387c3f2ba513ce303dd2a524bf0c4d43cc9c5430d23509a955a9b4_prof);

        
        $__internal_e088c62e5f1afb6b2820e8a0704be6ad567cdcb833f962ab0676ef8960923573->leave($__internal_e088c62e5f1afb6b2820e8a0704be6ad567cdcb833f962ab0676ef8960923573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
