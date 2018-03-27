<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_52906f244f7814bbd1402bf7456b2ef699275346e93c93fcac962cea18763912 extends Twig_Template
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
        $__internal_dfc018868cca693ebfed912fef78d9a03dd830e592f987f558fef0ae6dec0305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc018868cca693ebfed912fef78d9a03dd830e592f987f558fef0ae6dec0305->enter($__internal_dfc018868cca693ebfed912fef78d9a03dd830e592f987f558fef0ae6dec0305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3a89b481a435c18f4e5dd4400583016d7c5f368fb423e20faaf87f88b8c895f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89b481a435c18f4e5dd4400583016d7c5f368fb423e20faaf87f88b8c895f3->enter($__internal_3a89b481a435c18f4e5dd4400583016d7c5f368fb423e20faaf87f88b8c895f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dfc018868cca693ebfed912fef78d9a03dd830e592f987f558fef0ae6dec0305->leave($__internal_dfc018868cca693ebfed912fef78d9a03dd830e592f987f558fef0ae6dec0305_prof);

        
        $__internal_3a89b481a435c18f4e5dd4400583016d7c5f368fb423e20faaf87f88b8c895f3->leave($__internal_3a89b481a435c18f4e5dd4400583016d7c5f368fb423e20faaf87f88b8c895f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
