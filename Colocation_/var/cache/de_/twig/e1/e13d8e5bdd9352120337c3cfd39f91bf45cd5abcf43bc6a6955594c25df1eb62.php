<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_665b65a60d6e8d2668289d8bbf425ff0af822ccbba38ff87471f32ddf38ed6b6 extends Twig_Template
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
        $__internal_2d752ae3beda7b561bc1d1d44aa7d2d713df1c5eeba884a7486c2e8554e9131d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d752ae3beda7b561bc1d1d44aa7d2d713df1c5eeba884a7486c2e8554e9131d->enter($__internal_2d752ae3beda7b561bc1d1d44aa7d2d713df1c5eeba884a7486c2e8554e9131d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0af93459ecfa5eae412c1588ed3c96e025e3ed1615483092901d0584c60bf63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af93459ecfa5eae412c1588ed3c96e025e3ed1615483092901d0584c60bf63d->enter($__internal_0af93459ecfa5eae412c1588ed3c96e025e3ed1615483092901d0584c60bf63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2d752ae3beda7b561bc1d1d44aa7d2d713df1c5eeba884a7486c2e8554e9131d->leave($__internal_2d752ae3beda7b561bc1d1d44aa7d2d713df1c5eeba884a7486c2e8554e9131d_prof);

        
        $__internal_0af93459ecfa5eae412c1588ed3c96e025e3ed1615483092901d0584c60bf63d->leave($__internal_0af93459ecfa5eae412c1588ed3c96e025e3ed1615483092901d0584c60bf63d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
