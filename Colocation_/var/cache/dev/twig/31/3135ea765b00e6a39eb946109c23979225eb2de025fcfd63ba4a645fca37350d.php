<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e0921183e1c51de6a5a572ccf29cfd2a67b219fbda3118888dc4ea6545467564 extends Twig_Template
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
        $__internal_48ecf43ad9a35fef1e7249ce5811dc39dddbb71ddfa75ec40bf24eb0947607d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ecf43ad9a35fef1e7249ce5811dc39dddbb71ddfa75ec40bf24eb0947607d5->enter($__internal_48ecf43ad9a35fef1e7249ce5811dc39dddbb71ddfa75ec40bf24eb0947607d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9b39b082ccaa467afd2867681a2f0ff430a3eaa4325cf3d44b2e8dab059d8656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b39b082ccaa467afd2867681a2f0ff430a3eaa4325cf3d44b2e8dab059d8656->enter($__internal_9b39b082ccaa467afd2867681a2f0ff430a3eaa4325cf3d44b2e8dab059d8656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_48ecf43ad9a35fef1e7249ce5811dc39dddbb71ddfa75ec40bf24eb0947607d5->leave($__internal_48ecf43ad9a35fef1e7249ce5811dc39dddbb71ddfa75ec40bf24eb0947607d5_prof);

        
        $__internal_9b39b082ccaa467afd2867681a2f0ff430a3eaa4325cf3d44b2e8dab059d8656->leave($__internal_9b39b082ccaa467afd2867681a2f0ff430a3eaa4325cf3d44b2e8dab059d8656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
