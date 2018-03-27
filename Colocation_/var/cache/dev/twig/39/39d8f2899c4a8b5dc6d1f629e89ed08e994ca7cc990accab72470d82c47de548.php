<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_06cd27fe1f646edecfd4042c4d44f8a24b316e597d42a2a6341af3761919fc0a extends Twig_Template
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
        $__internal_82ba8559531e1cef601c2ab66419350cbab118e574a167839ddfeb844ed252ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ba8559531e1cef601c2ab66419350cbab118e574a167839ddfeb844ed252ee->enter($__internal_82ba8559531e1cef601c2ab66419350cbab118e574a167839ddfeb844ed252ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b37925d83a252ebe7c5e20aa7c5d7f473b607a22e9790b22204053179b418e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37925d83a252ebe7c5e20aa7c5d7f473b607a22e9790b22204053179b418e29->enter($__internal_b37925d83a252ebe7c5e20aa7c5d7f473b607a22e9790b22204053179b418e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_82ba8559531e1cef601c2ab66419350cbab118e574a167839ddfeb844ed252ee->leave($__internal_82ba8559531e1cef601c2ab66419350cbab118e574a167839ddfeb844ed252ee_prof);

        
        $__internal_b37925d83a252ebe7c5e20aa7c5d7f473b607a22e9790b22204053179b418e29->leave($__internal_b37925d83a252ebe7c5e20aa7c5d7f473b607a22e9790b22204053179b418e29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
