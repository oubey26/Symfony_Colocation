<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_877e7075410f5da779dce86e4f9ec911419c88704297c77f5cf2d3f72349820b extends Twig_Template
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
        $__internal_72c5d33d9799301fd9da7c880b1e2200a82168ab0fc24d35056bba8e40a1582d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c5d33d9799301fd9da7c880b1e2200a82168ab0fc24d35056bba8e40a1582d->enter($__internal_72c5d33d9799301fd9da7c880b1e2200a82168ab0fc24d35056bba8e40a1582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bf080dcb2396b32b4519b6b8056707c1e8f695dbb49c0051a732f553450f4408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf080dcb2396b32b4519b6b8056707c1e8f695dbb49c0051a732f553450f4408->enter($__internal_bf080dcb2396b32b4519b6b8056707c1e8f695dbb49c0051a732f553450f4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_72c5d33d9799301fd9da7c880b1e2200a82168ab0fc24d35056bba8e40a1582d->leave($__internal_72c5d33d9799301fd9da7c880b1e2200a82168ab0fc24d35056bba8e40a1582d_prof);

        
        $__internal_bf080dcb2396b32b4519b6b8056707c1e8f695dbb49c0051a732f553450f4408->leave($__internal_bf080dcb2396b32b4519b6b8056707c1e8f695dbb49c0051a732f553450f4408_prof);

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
