<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_30f22d76ea867883221c05294304c0d195f18ae0b02393406cc788019baa2b9f extends Twig_Template
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
        $__internal_e755ef7961a86b800ccf94c112ca6532c0be63ccdba717e0b13e2bb9201d60bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e755ef7961a86b800ccf94c112ca6532c0be63ccdba717e0b13e2bb9201d60bd->enter($__internal_e755ef7961a86b800ccf94c112ca6532c0be63ccdba717e0b13e2bb9201d60bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aa47d85d2e73ae1051767defcb50a3441acc4d0241c950ced3d3b4563525526e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa47d85d2e73ae1051767defcb50a3441acc4d0241c950ced3d3b4563525526e->enter($__internal_aa47d85d2e73ae1051767defcb50a3441acc4d0241c950ced3d3b4563525526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e755ef7961a86b800ccf94c112ca6532c0be63ccdba717e0b13e2bb9201d60bd->leave($__internal_e755ef7961a86b800ccf94c112ca6532c0be63ccdba717e0b13e2bb9201d60bd_prof);

        
        $__internal_aa47d85d2e73ae1051767defcb50a3441acc4d0241c950ced3d3b4563525526e->leave($__internal_aa47d85d2e73ae1051767defcb50a3441acc4d0241c950ced3d3b4563525526e_prof);

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
