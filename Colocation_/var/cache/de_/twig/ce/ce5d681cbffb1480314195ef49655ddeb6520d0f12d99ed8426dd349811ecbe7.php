<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0ac9df72b16fe75e54090e2648668692ce67bdda859575a63ca93839ad0fcd79 extends Twig_Template
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
        $__internal_942c4e65efe9baf60423137856609a296a4e394f2d02b453d998d2d2ee23f1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942c4e65efe9baf60423137856609a296a4e394f2d02b453d998d2d2ee23f1b4->enter($__internal_942c4e65efe9baf60423137856609a296a4e394f2d02b453d998d2d2ee23f1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1a5fa468b7a5ead11afaa77ac891cf2dd43c32bd9655f8a5f15f1f7747312ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5fa468b7a5ead11afaa77ac891cf2dd43c32bd9655f8a5f15f1f7747312ebc->enter($__internal_1a5fa468b7a5ead11afaa77ac891cf2dd43c32bd9655f8a5f15f1f7747312ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_942c4e65efe9baf60423137856609a296a4e394f2d02b453d998d2d2ee23f1b4->leave($__internal_942c4e65efe9baf60423137856609a296a4e394f2d02b453d998d2d2ee23f1b4_prof);

        
        $__internal_1a5fa468b7a5ead11afaa77ac891cf2dd43c32bd9655f8a5f15f1f7747312ebc->leave($__internal_1a5fa468b7a5ead11afaa77ac891cf2dd43c32bd9655f8a5f15f1f7747312ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
