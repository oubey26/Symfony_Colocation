<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2123708e364e4c6e50d60ab244723908b70dbd0aafc977e04da5c014ef364e3e extends Twig_Template
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
        $__internal_e00d4a16bb9f96cc8ee21b964629a43628b6eda8ccb882ed227cd0e28f7055f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00d4a16bb9f96cc8ee21b964629a43628b6eda8ccb882ed227cd0e28f7055f3->enter($__internal_e00d4a16bb9f96cc8ee21b964629a43628b6eda8ccb882ed227cd0e28f7055f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_02319d9f3a5d82b439819f04121ac2fc521a173528c7a771ff497dca83e326f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02319d9f3a5d82b439819f04121ac2fc521a173528c7a771ff497dca83e326f3->enter($__internal_02319d9f3a5d82b439819f04121ac2fc521a173528c7a771ff497dca83e326f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e00d4a16bb9f96cc8ee21b964629a43628b6eda8ccb882ed227cd0e28f7055f3->leave($__internal_e00d4a16bb9f96cc8ee21b964629a43628b6eda8ccb882ed227cd0e28f7055f3_prof);

        
        $__internal_02319d9f3a5d82b439819f04121ac2fc521a173528c7a771ff497dca83e326f3->leave($__internal_02319d9f3a5d82b439819f04121ac2fc521a173528c7a771ff497dca83e326f3_prof);

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
