<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_02a60667679434877d78acf414b9b3a0f4d2ce49e79f89474f8a4d936463be87 extends Twig_Template
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
        $__internal_042db395c57253aa4d4edd1f7f544f38ca7c4998d5eaebb8849c0d7e0f668445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042db395c57253aa4d4edd1f7f544f38ca7c4998d5eaebb8849c0d7e0f668445->enter($__internal_042db395c57253aa4d4edd1f7f544f38ca7c4998d5eaebb8849c0d7e0f668445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2d60722592d8d1eb7609bc3e4f12dfebaf7de862ccbd5aa06cca73a68590b907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d60722592d8d1eb7609bc3e4f12dfebaf7de862ccbd5aa06cca73a68590b907->enter($__internal_2d60722592d8d1eb7609bc3e4f12dfebaf7de862ccbd5aa06cca73a68590b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_042db395c57253aa4d4edd1f7f544f38ca7c4998d5eaebb8849c0d7e0f668445->leave($__internal_042db395c57253aa4d4edd1f7f544f38ca7c4998d5eaebb8849c0d7e0f668445_prof);

        
        $__internal_2d60722592d8d1eb7609bc3e4f12dfebaf7de862ccbd5aa06cca73a68590b907->leave($__internal_2d60722592d8d1eb7609bc3e4f12dfebaf7de862ccbd5aa06cca73a68590b907_prof);

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
