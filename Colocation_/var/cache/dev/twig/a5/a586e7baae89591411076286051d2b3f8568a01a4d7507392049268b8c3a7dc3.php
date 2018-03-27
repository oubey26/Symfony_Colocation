<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f96131ef654ec0b1c22705c795df64229c9e5a5d1faa67ae3986b4ef68d501b0 extends Twig_Template
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
        $__internal_9002710ae061dfc4a2c66d9a7a355f647af334ca4461465a92aff12685fb34ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9002710ae061dfc4a2c66d9a7a355f647af334ca4461465a92aff12685fb34ab->enter($__internal_9002710ae061dfc4a2c66d9a7a355f647af334ca4461465a92aff12685fb34ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_478689ff584c7afd49be1b38578f7dc36cd4af7d9ffce7dd361e354d73217e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478689ff584c7afd49be1b38578f7dc36cd4af7d9ffce7dd361e354d73217e66->enter($__internal_478689ff584c7afd49be1b38578f7dc36cd4af7d9ffce7dd361e354d73217e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9002710ae061dfc4a2c66d9a7a355f647af334ca4461465a92aff12685fb34ab->leave($__internal_9002710ae061dfc4a2c66d9a7a355f647af334ca4461465a92aff12685fb34ab_prof);

        
        $__internal_478689ff584c7afd49be1b38578f7dc36cd4af7d9ffce7dd361e354d73217e66->leave($__internal_478689ff584c7afd49be1b38578f7dc36cd4af7d9ffce7dd361e354d73217e66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
