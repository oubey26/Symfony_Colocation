<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_88803b83abfd06742058197ce7d52fd236a5ddd4137ff616eb9f8f835421e5a9 extends Twig_Template
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
        $__internal_d9a3ad4ca3bef50547f877343c0d8aaef41ff200b2b71de0f527b776b2ab7ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a3ad4ca3bef50547f877343c0d8aaef41ff200b2b71de0f527b776b2ab7ed9->enter($__internal_d9a3ad4ca3bef50547f877343c0d8aaef41ff200b2b71de0f527b776b2ab7ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d7ea5d4f03d12790140f68c6d975ef6679b462724223546737b80aac348bb435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ea5d4f03d12790140f68c6d975ef6679b462724223546737b80aac348bb435->enter($__internal_d7ea5d4f03d12790140f68c6d975ef6679b462724223546737b80aac348bb435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d9a3ad4ca3bef50547f877343c0d8aaef41ff200b2b71de0f527b776b2ab7ed9->leave($__internal_d9a3ad4ca3bef50547f877343c0d8aaef41ff200b2b71de0f527b776b2ab7ed9_prof);

        
        $__internal_d7ea5d4f03d12790140f68c6d975ef6679b462724223546737b80aac348bb435->leave($__internal_d7ea5d4f03d12790140f68c6d975ef6679b462724223546737b80aac348bb435_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
