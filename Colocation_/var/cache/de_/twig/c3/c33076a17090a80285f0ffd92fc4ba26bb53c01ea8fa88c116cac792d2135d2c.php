<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0fa44f5a065add85b90a29fa96374f4c1e20a5c3fbb9a97a2c4793ef3acc38f1 extends Twig_Template
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
        $__internal_4f12ba12aa55415bab50c7b3e3efada7a82e1aa6e6f6a2ac1c0cc36b979ecd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f12ba12aa55415bab50c7b3e3efada7a82e1aa6e6f6a2ac1c0cc36b979ecd14->enter($__internal_4f12ba12aa55415bab50c7b3e3efada7a82e1aa6e6f6a2ac1c0cc36b979ecd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_139cdfffcdc15f6cb511e7ca2d3806ae1c4304e7a92ee2429968bccc6afdafa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139cdfffcdc15f6cb511e7ca2d3806ae1c4304e7a92ee2429968bccc6afdafa9->enter($__internal_139cdfffcdc15f6cb511e7ca2d3806ae1c4304e7a92ee2429968bccc6afdafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4f12ba12aa55415bab50c7b3e3efada7a82e1aa6e6f6a2ac1c0cc36b979ecd14->leave($__internal_4f12ba12aa55415bab50c7b3e3efada7a82e1aa6e6f6a2ac1c0cc36b979ecd14_prof);

        
        $__internal_139cdfffcdc15f6cb511e7ca2d3806ae1c4304e7a92ee2429968bccc6afdafa9->leave($__internal_139cdfffcdc15f6cb511e7ca2d3806ae1c4304e7a92ee2429968bccc6afdafa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
