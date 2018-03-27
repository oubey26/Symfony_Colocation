<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7961010aef73b72d50321da309121e6ebbc19b818c32b85ed761c54572c06baf extends Twig_Template
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
        $__internal_d704cf17b0b95a2a60d4f6848185ea869fcfcfa57070c67add359df6272d1458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d704cf17b0b95a2a60d4f6848185ea869fcfcfa57070c67add359df6272d1458->enter($__internal_d704cf17b0b95a2a60d4f6848185ea869fcfcfa57070c67add359df6272d1458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_62f207431e02a7ff8603989506b8424a0aa867d234941f2ce9c2083407f53ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f207431e02a7ff8603989506b8424a0aa867d234941f2ce9c2083407f53ea5->enter($__internal_62f207431e02a7ff8603989506b8424a0aa867d234941f2ce9c2083407f53ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d704cf17b0b95a2a60d4f6848185ea869fcfcfa57070c67add359df6272d1458->leave($__internal_d704cf17b0b95a2a60d4f6848185ea869fcfcfa57070c67add359df6272d1458_prof);

        
        $__internal_62f207431e02a7ff8603989506b8424a0aa867d234941f2ce9c2083407f53ea5->leave($__internal_62f207431e02a7ff8603989506b8424a0aa867d234941f2ce9c2083407f53ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
