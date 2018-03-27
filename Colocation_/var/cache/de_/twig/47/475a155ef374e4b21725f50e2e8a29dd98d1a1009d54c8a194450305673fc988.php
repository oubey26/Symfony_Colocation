<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9210edacce7ff7ee7ccee0e31a7fd4dc2e67b06af9d8ad38e70329fb2dcfc129 extends Twig_Template
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
        $__internal_271f8d92ef4297376707ab8c80f9dac69706820d2330f6cc39bad46ae90464dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271f8d92ef4297376707ab8c80f9dac69706820d2330f6cc39bad46ae90464dc->enter($__internal_271f8d92ef4297376707ab8c80f9dac69706820d2330f6cc39bad46ae90464dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_89d52a2ba1e1898206a9061984c84637077ea9d60063d084c853bd9699908fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d52a2ba1e1898206a9061984c84637077ea9d60063d084c853bd9699908fad->enter($__internal_89d52a2ba1e1898206a9061984c84637077ea9d60063d084c853bd9699908fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_271f8d92ef4297376707ab8c80f9dac69706820d2330f6cc39bad46ae90464dc->leave($__internal_271f8d92ef4297376707ab8c80f9dac69706820d2330f6cc39bad46ae90464dc_prof);

        
        $__internal_89d52a2ba1e1898206a9061984c84637077ea9d60063d084c853bd9699908fad->leave($__internal_89d52a2ba1e1898206a9061984c84637077ea9d60063d084c853bd9699908fad_prof);

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
