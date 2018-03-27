<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5647dccf4ac28bb585f7852e28984373537ff8c9c3f0ab56e6342533ef89ef52 extends Twig_Template
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
        $__internal_7f49794d50691bd302e252d73c3b3f14bf774d8b21e45ad08c96883519d202c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f49794d50691bd302e252d73c3b3f14bf774d8b21e45ad08c96883519d202c7->enter($__internal_7f49794d50691bd302e252d73c3b3f14bf774d8b21e45ad08c96883519d202c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_503fa2fd931f2ff5f425503e4d619bc906b2f4cbdf01e756e3df7c885f07761d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503fa2fd931f2ff5f425503e4d619bc906b2f4cbdf01e756e3df7c885f07761d->enter($__internal_503fa2fd931f2ff5f425503e4d619bc906b2f4cbdf01e756e3df7c885f07761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7f49794d50691bd302e252d73c3b3f14bf774d8b21e45ad08c96883519d202c7->leave($__internal_7f49794d50691bd302e252d73c3b3f14bf774d8b21e45ad08c96883519d202c7_prof);

        
        $__internal_503fa2fd931f2ff5f425503e4d619bc906b2f4cbdf01e756e3df7c885f07761d->leave($__internal_503fa2fd931f2ff5f425503e4d619bc906b2f4cbdf01e756e3df7c885f07761d_prof);

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
