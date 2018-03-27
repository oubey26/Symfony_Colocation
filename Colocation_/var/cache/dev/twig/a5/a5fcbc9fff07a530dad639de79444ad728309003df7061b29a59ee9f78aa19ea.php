<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e1da6ad62c4c25344d3cf5f98e6a5199bb5821bd912fff27fd190443438ef4dc extends Twig_Template
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
        $__internal_a8de13ed5f10c5b6ddc49f6b2f7e2495e3972c337f056b2f1ed2bb2293948405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8de13ed5f10c5b6ddc49f6b2f7e2495e3972c337f056b2f1ed2bb2293948405->enter($__internal_a8de13ed5f10c5b6ddc49f6b2f7e2495e3972c337f056b2f1ed2bb2293948405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_de63c41d7424cab88de33c508d7bb954f6a15acb410bafc047d475a124617d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de63c41d7424cab88de33c508d7bb954f6a15acb410bafc047d475a124617d1c->enter($__internal_de63c41d7424cab88de33c508d7bb954f6a15acb410bafc047d475a124617d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a8de13ed5f10c5b6ddc49f6b2f7e2495e3972c337f056b2f1ed2bb2293948405->leave($__internal_a8de13ed5f10c5b6ddc49f6b2f7e2495e3972c337f056b2f1ed2bb2293948405_prof);

        
        $__internal_de63c41d7424cab88de33c508d7bb954f6a15acb410bafc047d475a124617d1c->leave($__internal_de63c41d7424cab88de33c508d7bb954f6a15acb410bafc047d475a124617d1c_prof);

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
