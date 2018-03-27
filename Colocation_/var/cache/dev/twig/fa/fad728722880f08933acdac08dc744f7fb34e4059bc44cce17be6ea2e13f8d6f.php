<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a33857b638f07054e9a26b7547737cc2da2b3d08451bd5f1980747dc17bd3172 extends Twig_Template
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
        $__internal_0e6990a9d7cac7cd7183ff80bd709965786f9bed8b657d867379b225b950f023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6990a9d7cac7cd7183ff80bd709965786f9bed8b657d867379b225b950f023->enter($__internal_0e6990a9d7cac7cd7183ff80bd709965786f9bed8b657d867379b225b950f023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bc5c00442d738af883fefbb9cbc51e683a6939dff95966f6dc9457a88f8b36a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5c00442d738af883fefbb9cbc51e683a6939dff95966f6dc9457a88f8b36a1->enter($__internal_bc5c00442d738af883fefbb9cbc51e683a6939dff95966f6dc9457a88f8b36a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0e6990a9d7cac7cd7183ff80bd709965786f9bed8b657d867379b225b950f023->leave($__internal_0e6990a9d7cac7cd7183ff80bd709965786f9bed8b657d867379b225b950f023_prof);

        
        $__internal_bc5c00442d738af883fefbb9cbc51e683a6939dff95966f6dc9457a88f8b36a1->leave($__internal_bc5c00442d738af883fefbb9cbc51e683a6939dff95966f6dc9457a88f8b36a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
