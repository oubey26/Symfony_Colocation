<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_deead66f8e69a095dbb162510c7aaaa4b15919d0aa537b2525e53ba9172372dd extends Twig_Template
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
        $__internal_1c8d266080a8ae2c4940d41626d997c99eda56564902a2c748395549c1c6e5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8d266080a8ae2c4940d41626d997c99eda56564902a2c748395549c1c6e5c0->enter($__internal_1c8d266080a8ae2c4940d41626d997c99eda56564902a2c748395549c1c6e5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1ac12b7fb430c2879953b6247b0056d7ae0893165e22e97ec3085a8b63ddb075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac12b7fb430c2879953b6247b0056d7ae0893165e22e97ec3085a8b63ddb075->enter($__internal_1ac12b7fb430c2879953b6247b0056d7ae0893165e22e97ec3085a8b63ddb075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1c8d266080a8ae2c4940d41626d997c99eda56564902a2c748395549c1c6e5c0->leave($__internal_1c8d266080a8ae2c4940d41626d997c99eda56564902a2c748395549c1c6e5c0_prof);

        
        $__internal_1ac12b7fb430c2879953b6247b0056d7ae0893165e22e97ec3085a8b63ddb075->leave($__internal_1ac12b7fb430c2879953b6247b0056d7ae0893165e22e97ec3085a8b63ddb075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
