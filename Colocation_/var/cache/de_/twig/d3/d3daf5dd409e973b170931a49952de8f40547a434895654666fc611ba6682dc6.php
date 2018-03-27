<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_33823269319eeefb99a2de4fa1796280b569327fd9337ed25cf2bd42c357033d extends Twig_Template
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
        $__internal_3934ccdd14b083e85cfe711073b5bdd9de140251e4af7855fb7b4900e650c312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3934ccdd14b083e85cfe711073b5bdd9de140251e4af7855fb7b4900e650c312->enter($__internal_3934ccdd14b083e85cfe711073b5bdd9de140251e4af7855fb7b4900e650c312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a48c88f8951a4a3e20fdf9d56a2bd682cbe33b0cfb6fa893ba99d06520458ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48c88f8951a4a3e20fdf9d56a2bd682cbe33b0cfb6fa893ba99d06520458ce8->enter($__internal_a48c88f8951a4a3e20fdf9d56a2bd682cbe33b0cfb6fa893ba99d06520458ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3934ccdd14b083e85cfe711073b5bdd9de140251e4af7855fb7b4900e650c312->leave($__internal_3934ccdd14b083e85cfe711073b5bdd9de140251e4af7855fb7b4900e650c312_prof);

        
        $__internal_a48c88f8951a4a3e20fdf9d56a2bd682cbe33b0cfb6fa893ba99d06520458ce8->leave($__internal_a48c88f8951a4a3e20fdf9d56a2bd682cbe33b0cfb6fa893ba99d06520458ce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
