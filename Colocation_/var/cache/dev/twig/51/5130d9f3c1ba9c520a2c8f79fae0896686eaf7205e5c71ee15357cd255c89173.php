<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8c3bffd74a6baca1da9e243a3a5197dda8a9a9e96dfb500671e879d286c656e3 extends Twig_Template
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
        $__internal_a7fda450b1d8d08fb10d82078b1f2f8a8dccfd4c6db2f31ca4cd2e9a430d2e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fda450b1d8d08fb10d82078b1f2f8a8dccfd4c6db2f31ca4cd2e9a430d2e59->enter($__internal_a7fda450b1d8d08fb10d82078b1f2f8a8dccfd4c6db2f31ca4cd2e9a430d2e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_98ec3d0f9a679bccb5961e2c0bd405f99577c15e5d5a9f11a40c3c3044be2d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ec3d0f9a679bccb5961e2c0bd405f99577c15e5d5a9f11a40c3c3044be2d09->enter($__internal_98ec3d0f9a679bccb5961e2c0bd405f99577c15e5d5a9f11a40c3c3044be2d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a7fda450b1d8d08fb10d82078b1f2f8a8dccfd4c6db2f31ca4cd2e9a430d2e59->leave($__internal_a7fda450b1d8d08fb10d82078b1f2f8a8dccfd4c6db2f31ca4cd2e9a430d2e59_prof);

        
        $__internal_98ec3d0f9a679bccb5961e2c0bd405f99577c15e5d5a9f11a40c3c3044be2d09->leave($__internal_98ec3d0f9a679bccb5961e2c0bd405f99577c15e5d5a9f11a40c3c3044be2d09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
