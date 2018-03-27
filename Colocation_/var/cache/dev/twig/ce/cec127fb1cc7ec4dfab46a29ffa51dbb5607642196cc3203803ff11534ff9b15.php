<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5cc46b4c38ddadf22f883b6cb0078f358a736ca9f043f76f4443d192731b72a2 extends Twig_Template
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
        $__internal_2aed131656c6a1ea309b885f3da77ebca09bbfcff570e870ef35f28f8535055b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aed131656c6a1ea309b885f3da77ebca09bbfcff570e870ef35f28f8535055b->enter($__internal_2aed131656c6a1ea309b885f3da77ebca09bbfcff570e870ef35f28f8535055b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_82b303d4259af85f626cac29e20b252288b837d81183e946cd697f4df849f23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b303d4259af85f626cac29e20b252288b837d81183e946cd697f4df849f23c->enter($__internal_82b303d4259af85f626cac29e20b252288b837d81183e946cd697f4df849f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2aed131656c6a1ea309b885f3da77ebca09bbfcff570e870ef35f28f8535055b->leave($__internal_2aed131656c6a1ea309b885f3da77ebca09bbfcff570e870ef35f28f8535055b_prof);

        
        $__internal_82b303d4259af85f626cac29e20b252288b837d81183e946cd697f4df849f23c->leave($__internal_82b303d4259af85f626cac29e20b252288b837d81183e946cd697f4df849f23c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
